<div class="container">
    <div id="comparison_div" style = "display:none"><?php echo __('Compare specifications'); ?>(<span id="comparison_sum"></span>)<span id = "delete_comparison_items">x</span></div>
    <div class="row" id='main_content'>
        <?php echo $this->element('filter_content'); ?>
    </div>
</div>
<script type="text/javascript">
    window.sessionStorage.conditions = '';
    $( document ).ready(function() {
        
        //check if comparison is set
        if(typeof window.sessionStorage.num_of_comparison_items != 'undefined')
        {
            console.log('number of comaprison items = '+window.sessionStorage.num_of_comparison_items);
            $('#comparison_div').css('display','block');
            var text = window.sessionStorage.num_of_comparison_items;
            $('#comparison_sum').html(text);
        }
        else
        {
            console.log('undefined');
        }
        
        
        var query = 'SELECT id,brand,socket,price_range,device_type,product_name,number_of_cores,frequency_range,launch_year FROM processors ';
        var logic_operator = '';
        window.sessionStorage["comparison_items"] = '{}';
        
        //when checkbox is clicked, add condition to query and do ajax call
        $("#main_content").on( "click","input[type='checkbox']", function() {
            var value = null;
                if($(this).val() === '') value = 'IS NULL'; else value = " = '"+$(this).val()+"'";
                window.sessionStorage.conditions += " "+logic_operator +" "+this.id+" "+ value;
                logic_operator = 'AND';
                make_ajax_call(0);
        });
        
        //pagination
        $("#main_content").on( "click",".pagination", function() {
           // console.log($(this).val());
            make_ajax_call($(this).val());
        });
    
        function make_ajax_call(page_number){    
            $.ajax(
            {
                url : '/processors/filter',
                type: "POST",
                data : {query: query, conditions: window.sessionStorage.conditions, page: page_number },
                success:function(data)
                {
                    $('#main_content').html(data) ;
                },
                error: function()
                {
                    alert('<?php echo __('Database error. Please try again later.'); ?>');     
                }
            });
        }
    });
    
    /***************************************************************************
    
                            More less for filter

    ***************************************************************************/
    $('dl.main').each(function(){ 
        var LiN = $(this).find('dd').length;
       //console.log(LiN);
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
    $('#main_content').on('click','li.comparison',function(){
        if($(this).data('comparison') !== 'remove'){
            if(typeof window.sessionStorage.comparison_items != 'undefined'){
                var comparison_items = JSON.parse(window.sessionStorage["comparison_items"]);
                comparison_items[$(this).val()] = $(this).val();
            }
            else{
                comparison_items[$(this).val()] = $(this).val();
            }
            
            if(typeof window.sessionStorage.num_of_comparison_items == 'undefined'){
                window.sessionStorage.num_of_comparison_items = 0
            }
            
            window.sessionStorage.comparison_items = JSON.stringify(comparison_items);
            window.sessionStorage.num_of_comparison_items++;
            $(this).html('Remove from comparison.');
            $(this).data('comparison','remove');
            $('#comparison_sum').html(window.sessionStorage.num_of_comparison_items);
            $('#comparison_div').css('display','block');
        }
        else{
            var comparison_items = JSON.parse(window.sessionStorage.comparison_items);
            delete comparison_items[$(this).val()];
            window.sessionStorage.num_of_comparison_items--;
            $(this).html('Add to comparison.');
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
        $('li.comparison').html('Add to comparison.');
    })
    
    </script>
