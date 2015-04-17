<div class="container">
    <div class="row" id='main_content'>
       <?php echo $this->element('filter_content'); ?>
    </div>
</div>
<script type="text/javascript">
    window.sessionStorage.conditions = '';
    $( document ).ready(function() {
        var query = 'SELECT brand,socket,price,device_type,product_name,number_of_cores,frequency,launch_year FROM processors ';
        var logic_operator = '';
         $("#main_content").on( "click","input[type='checkbox']", function() {
            var value = null;
                if($(this).val() === '') value = 'IS NULL'; else value = " = '"+$(this).val()+"'";
                window.sessionStorage.conditions += " "+logic_operator +" "+this.id+" "+ value;
                logic_operator = 'AND'
                $.ajax(
                {
                    url : '/processors/filter',
                    type: "POST",
                    data : {query: query, conditions: window.sessionStorage.conditions },
                    success:function(data)
                    {
                        $('#main_content').html(data) ;
                    },
                    error: function()
                    {
                        alert('<?php echo __('Database error. Please try again later.'); ?>');     
                    }
                });
        });
    });</script>
