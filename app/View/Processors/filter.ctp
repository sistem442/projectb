<?php 
if($conditions_are_set){
    echo $this->element('filter_content'); 
    die;
}
?>
<div class="container">
    <div id="comparison_div" style = "display:none"><span id="compare"><?php echo __('Compare specifications'); ?>(<span id="comparison_sum"></span>)</span><span id = "delete_comparison_items">x</span></div>
    <div class="row" id='main_content'>
        <?php echo $this->element('filter_content'); ?>
    </div>
</div>
<script type="text/javascript">
    //window.sessionStorage.query_conditions = '{}';
    var query_conditions = {};
    
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
    
                           When radio is clicked

        ***************************************************************************/
        $("#main_content").on( "click","input[type='radio']", function() {
            //if value is null set string IS NULL because of database query
            var value = null;
            if($(this).val() === '') 
                value = 'IS NULL'; 
            else 
                value = $(this).val();
            
            //if previous conditions exists fetch them from session and add new condition            
            if(typeof window.sessionStorage.query_conditions == 'undefined'){
                var query_conditions = {};
            }
            else{
                var query_conditions = JSON.parse(window.sessionStorage.query_conditions);;
            }
            query_conditions[this.id] = value;
            window.sessionStorage.query_conditions = JSON.stringify(query_conditions);

            //in this array save all removable conditions for displaing on top of filter div
            if(typeof window.sessionStorage.conditions_array == 'undefined'){
                var conditions_array = {};
            }
            else{
                var conditions_array = JSON.parse(window.sessionStorage.conditions_array);;
            }
            conditions_array[this.id] = $(this).val();
            window.sessionStorage.conditions_array = JSON.stringify(conditions_array);
            
            //reload page data with new query
            make_ajax_call(0);
        });
        
        /***************************************************************************
    
                            pagination

        ***************************************************************************/
        $("#main_content").on( "click",".pagination", function() {
            make_ajax_call($(this).val());
        });
        
        /***************************************************************************
        
                            AJAX

        ***************************************************************************/
    
        function make_ajax_call(page_number,last_condition_removed = false){
            $.ajax(
            {
                url : '/processors/filter',
                type: "POST",
                data : {conditions: window.sessionStorage.query_conditions, page: page_number },
                success:function(data)
                {
                    $('#main_content').html(data) ;
                   //add removable conditions on top of filter div
                    if(typeof window.sessionStorage.conditions_array != 'undefined'){
                        conditions = JSON.parse(window.sessionStorage.conditions_array);
                        var html = '';
                        $.each( conditions, function( key, value ) {
                            html = html + '<li>' + value + '<span id='+key+' class = "remove_condition">x</span></li>';
                        });
                        $('#removable-conditions').html(html) ;
                        $('#removable-conditions').css('display','block');
                    }

                    //set remove from conditions for selected items
                    if(typeof window.sessionStorage.comparison_items != 'undefined'){
                        //CHANGE 'add to comparison' to 'remove from comaprison' 
                        //for items in search result list that are already selected for comparison
                        var comparison_items = JSON.parse(window.sessionStorage.comparison_items);
                        $.each( comparison_items, function( key, value ) {
                            $('#'+value).html('<?php echo __('Remove -'); ?>');
                            $('#'+value).data('comparison','remove');
                        });

                    }
                        
                },
                error: function()
                {
                    alert('<?php echo __('Database error. Please try again later.'); ?>');     
                }
            });
            
        }
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
        if($(this).data('comparison') !== 'remove'){
            if(typeof window.sessionStorage.comparison_items != 'undefined'){
                var comparison_items = JSON.parse(window.sessionStorage["comparison_items"]);
                comparison_items[this.id] = this.id;
            }
            else{
                var comparison_items = {};
                comparison_items[this.id] = this.id;
            }
            
            if(typeof window.sessionStorage.num_of_comparison_items == 'undefined'){
                window.sessionStorage.num_of_comparison_items = 0
            }
            
            window.sessionStorage.comparison_items = JSON.stringify(comparison_items);
            window.sessionStorage.num_of_comparison_items++;
            $(this).html( '<?php echo __('Remove -'); ?>' ) ;
            $(this).data('comparison','remove');
            $('#comparison_sum').html(window.sessionStorage.num_of_comparison_items);
            $('#comparison_div').css('display','block');
        }
        else{
            var comparison_items = JSON.parse(window.sessionStorage.comparison_items);
            delete comparison_items[this.id];
            window.sessionStorage.comparison_items = JSON.stringify(comparison_items);
            window.sessionStorage.num_of_comparison_items--;
            $(this).html('<?php echo __('Compare +'); ?>');
            $(this).data('comparison','add');
            $('#comparison_sum').html(window.sessionStorage.num_of_comparison_items);
            if(window.sessionStorage.num_of_comparison_items == 0){
                $('#comparison_div').css('display','none');
            }
        }
      });
      
    $('#delete_comparison_items').click(function(){
        delete window.sessionStorage.comparison_items;
        delete window.sessionStorage.num_of_comparison_items;
        $('#comparison_div').css('display','none');
        $('td.comparison').html('<?php echo __('Compare +'); ?>');
    });
    
    $('#compare').click(function(){
        var comparison_string = '';
        if(typeof window.sessionStorage.comparison_items != 'undefined'){
            var comparison_object = JSON.parse(window.sessionStorage["comparison_items"]);
            for (var index in comparison_object) {
                if (comparison_object.hasOwnProperty(index)) {
                    comparison_string += comparison_object[index]+',';
                }
            }
            comparison_string = comparison_string.substring(0, comparison_string.length - 1);
        }
        document.location = "/processors/comparison/"+comparison_string;
    });
    
    $('#main_content').on('click','#compare_all',function(){
        if(typeof window.sessionStorage.comparison_items != 'undefined'){
            var comparison_items = JSON.parse(window.sessionStorage["comparison_items"]);
        }
        else{
            var comparison_items = {};
        }
        
        if(typeof window.sessionStorage.num_of_comparison_items == 'undefined'){
            window.sessionStorage.num_of_comparison_items = 0
        }
        $('td.comparison').each(function(){
            if(!(this.id in comparison_items)){
                window.sessionStorage.num_of_comparison_items++;
                comparison_items[this.id] = this.id;
                $(this).html('<?php echo __('Remove -'); ?>');
                $(this).data('comparison','remove');
            }
        });
        
        window.sessionStorage.comparison_items = JSON.stringify(comparison_items);
        $('#comparison_sum').html(window.sessionStorage.num_of_comparison_items);
        $('#comparison_div').css('display','block');
    });
    
    
    </script>
