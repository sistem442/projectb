<?php 
echo $this->Html->script('jquery.tablesorter.min'); 
echo $this->Html->css('style');
//if conditions are set display only element because this view is called by AJAX
// and will be displayed within #main_content
if($conditions_are_set){
    echo $this->element('filter_content'); 
    die;
}
//if last condition from conditions is removed, display only filter element 
// because this view is called by AJAX
// and will be displayed within #main_content
if($last_condition_removed){
    echo $this->element('filter_content'); 
    die;
}

//if last condition is not removed and conditions are not set display whole page
// beacuse this is first call. Because of that #section_name_bar and #main_content 
// must be generated
?>
<div id="section_name_bar">
    <div id="section_name"><?php echo __('Processors'); ?></div>
    <div id="comparison_div" >
        <div id="compare_blank"></div>
        <div id="compare">
            <?php echo __('Compare specifications'); ?> (<span id="comparison_sum"></span>)
        </div>
        <div id = "delete_comparison_items"></div>   
    </div>
</div>

    <div class="row nopadding" id='main_content'>
        <?php echo $this->element('filter_content'); ?>
    </div>
        
    </div>
    <div class="row " id="loading_overlay" style="display: none"><img src="/img/ajax-loader.gif" class="loading_circle" alt="loading" /></div>
<script type="text/javascript">
    //window.sessionStorage.query_conditions = '{}';
    var query_conditions = {};
    //prepare labels for comparison
    var remove_string = '<?php echo '<div class="comparison3">'.__('Remove -').'</div>'; ?>';
    var compare_string = '<?php echo '<div class="comparison2">'.__('Compare +').'</div>'; ?>';
    var str_delete = '<?php echo __('Delete') ?>';
    var remove_all = '<?php echo __('Remove All'); ?>';
    var add_all = '<?php echo __('Add All'); ?>';
    $( document ).ready(function() {
        //if sesion is set clear it
        if(typeof window.sessionStorage.query_conditions != 'undefined')
        {
            window.sessionStorage.query_conditions = '{}';
        }
        if(typeof window.sessionStorage.conditions_array != 'undefined')
        {
            window.sessionStorage.conditions_array = '{}';
        }
        //check if comparison is set
        if(typeof window.sessionStorage.num_of_comparison_items != 'undefined'){
            $('#comparison_div').css('display','block');
            var text = window.sessionStorage.num_of_comparison_items;
            $('#comparison_sum').html(text);
        }
        /***************************************************************************
    
                           When radio button is clicked

        ***************************************************************************/
        $("#main_content").on( "click","input[type='radio']", function() {
            var id = this.id;
            var val = $(this).val();
            search(id,val);
        });
        
        
        /***********************************************************************
    
                               remove conditions

        ************************************************************************/
        $('#main_content').on('click','.remove_condition',function(){
            last_condition_removed = false;
            //remove condition from query
            query_conditions = JSON.parse(window.sessionStorage.query_conditions);
            var removed_condition = this.id;
            delete query_conditions[removed_condition]; 
            if(jQuery.isEmptyObject(query_conditions)){
                query_conditions = {};
                last_condition_removed = true;
            }
            window.sessionStorage.query_conditions = JSON.stringify(query_conditions);

            //remove condition from top of filter
            $(this).closest('li').remove();

            //remove condition from query
            if(typeof window.sessionStorage.conditions_array != 'undefined'){
                var conditions_array = JSON.parse(window.sessionStorage.conditions_array);
                delete conditions_array[removed_condition];
                window.sessionStorage.conditions_array = JSON.stringify(conditions_array);
            }
  
            //do ajax call to reload page data based on new conditions
             make_ajax_call(0,last_condition_removed);

       });
    });
    
    /***************************************************************************
    
                            More less for filter

    ***************************************************************************/
    $('dl.main').each(function(){ 
        var LiN = $(this).find('dd').length;
        if( LiN > 4){    
          $('dd', this).eq(3).nextAll().hide().addClass('extras');
          $(this).append('<dd class="more" style="text-align: right; padding-right: 10px; font-style: italic">More...</dd>');    
        }
      });
      $('dl.main').on('click','.more',function(){
        $this = $(this);
        var text = ($this.text() === 'Less...') ? 'More...' : 'Less...';
        $this.text(text);  
        $(this).siblings('dd.extras').slideToggle();
      });
   /***************************************************************************
    
                            Comparison

    ***************************************************************************/
    $('#main_content').on('click','td.comparison',function(){
        var action = $(this).data('comparison');
        var result = compare(action,this.id);
        if( result == 'remove'){
            $(this).html( remove_string ) ;
            $(this).data('comparison','remove');
             $(this).children('div.comparison2').class('comparison3.');
        }
        else if (result == 'add' ){
            $(this).html( compare_string );
            $(this).data('comparison','add');
             $(this).children('div.comparison3').class('comparison2');
        }
      });
      
    /*************************************************************************
    
                                    FUNCTIONS
    
     ************************************************************************/
    function search(id,val){
        //console.log(val);
         var value = null;
         if(val === '') 
             value = 'IS NULL'; 
         else 
             value = val
         if(typeof window.sessionStorage.query_conditions == 'undefined'){
             var query_conditions = {};
         }
         else{
             var query_conditions = JSON.parse(window.sessionStorage.query_conditions);;
         }
         query_conditions[id] = value;
         window.sessionStorage.query_conditions = JSON.stringify(query_conditions);

         //in this array save all removable conditions for displaing on top of filter div
         if(typeof window.sessionStorage.conditions_array == 'undefined'){
             var conditions_array = {};
         }
         else{
             var conditions_array = JSON.parse(window.sessionStorage.conditions_array);;
         }
         conditions_array[id] = val;
         window.sessionStorage.conditions_array = JSON.stringify(conditions_array);

         //reload page data with new query
         make_ajax_call(0);
    }
     
    /***************************************************************************
        
                            AJAX

    ***************************************************************************/
    
    function make_ajax_call(page_number,last_condition_removed = false){
        $('#main_content').hide();
        $('#loading_overlay').css('display','block');
        $.ajax(
        {
            url : '/processors/filter',
            type: "POST",
            data : {
                conditions: window.sessionStorage.query_conditions, 
                last_condition_removed: last_condition_removed },
            success:function(data)
            {
                $('#loading_overlay').css('display','none')
                $('#main_content').show();
                
                $('#main_content').html(data) ;

                //if last condition is removed hide div with number of results
                if(last_condition_removed){
                    $('#number_of_results').css('display','none');
                }

               //add removable conditions on top of filter div
                if(typeof window.sessionStorage.conditions_array != 'undefined'){
                    conditions = JSON.parse(window.sessionStorage.conditions_array);
                    var html = '';
                    $.each( conditions, function( key, value ) {
                        var fixed_value = value.substring(1, value.length-1);
                        html = html + '<li id='
                                + key + ' class = "remove_condition"'
                                + 'title =' + str_delete + '\n\>'
                                + fixed_value + '</li>';
                    });
                    $('.removable_conditions').html(html) ;
                    $('#removable-conditions').css('display','block');
                }

                //call comparison function
                if(typeof window.sessionStorage.comparison_items != 'undefined'){
                    check_comparison();
                }
                //Initialize table sorter
                $("#processor_table").tablesorter();    
            },
            error: function()
            {
                alert('<?php echo __('Database error. Please try again later.'); ?>');     
            }
        });
        /**********************************************************************/
        
        //check all items for current filter selection are in comarison selection
        //if true change compare all to remove all 

        /**********************************************************************/
        function check_comparison(){
            var comparison_items = JSON.parse(window.sessionStorage.comparison_items);
            var show_remove_all = [];
            $('td.comparison').each(function(){
                if((this.id in comparison_items)){
                    show_remove_all[this.id] = true;
                }
                else{
                    show_remove_all[this.id] = false;
                }
            });
            if(show_remove_all.every(check_if_true)){
                $('#compare_all').html(remove_all);
                $('#compare_all').attr("id",'remove_all');
            }
            //CHANGE 'add to comparison' to 'remove from comaprison' 
            //for items in search result list that are already selected for comparison
            $.each( comparison_items, function( key, value ) {
                $('#'+value).html('<?php echo '<div class="comparison3">'.__('Remove -').'</div>'; ?>');
                $('#'+value).data('comparison','remove');
            });
        }
        function check_if_true(value, index, ar){
            if(value == true) return true; else return false; 
        }

    }
    </script>
<?php echo $this->Html->script('comparison'); ?>