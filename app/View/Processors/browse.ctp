<div id="section_name_bar">
    <div id="section_name"></div>
    <div id="comparison_div" >
        <div id="compare_blank"></div>
        <div id="compare">
            <?php echo __('Compare specifications'); ?> (<span id="comparison_sum"></span>)
        </div>
        <div id = "delete_comparison_items"></div>   
    </div>
</div>
</div>
<div id="main_content" class="browse_main_div">
    <!-- print brands -->
    <?php foreach ($processors as $brand => $series): ?>
        <div class="brand2" style="display: inline "><?php echo $brand; ?></div>
    <?php endforeach; ?> 
    <!-- for each brand print list of series -->
    <?php foreach ($processors as $brand => $series){ ?>
        <div id="<?php echo $brand; ?>" class="brand_div" style="display: none">
            <!-- print series for brand -->
            <?php foreach ($series as $serie => $years): ?>
                <div class="serie" style="display: inline "><?php echo $serie; ?></div>
            <?php endforeach; ?>
            <?php foreach ($series as $serie => $years){ ?>
                <div id="<?php echo $serie; ?>" style="display: none " class="serie_div">        
                    <!-- print years for series -->
                    <?php foreach ($years as $year => $processors): ?>
                    <div data-processor_list_div_id="<?php echo $year.$serie; ?>" class="year" style="display: inline "><?php echo $year; ?></div>
                    <?php endforeach; ?>
                    <?php foreach ($years as $year => $processors): ?>
                        <div id="<?php echo $year.$serie; ?>" style="display: none " class="year_div">        
                            <table>
                                <?php foreach ($processors as $processor){ ?>
                                    <tr>                                         
                                        <td>
                                            <div class='comparison4' comparison='add' id="<?php echo $processor['processors']['id']; ?>">
                                                <div class="comparison2"><?php echo __('Compare +'); ?></div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="/processors/item/<?php echo $processor['processors']['id']; ?>">
                                            <?php echo $processor['processors']['product_name']; ?> 
                                            </a>
                                        </td>
                                        <td>
                                           <?php echo $processor['processors']['frequency']/1000; ?>GHz / 
                                            <?php echo $processor['processors']['cache']; ?> / 
                                            <?php echo $processor['processors']['number_of_cores']; ?>-core
                                        </td>                                     
                                    </tr>
                                <?php  }    ?>
                            </table>
                        </div>
                    <?php endforeach;    ?>
                </div>
            <?php }    ?>
        </div>
    <?php  }    ?>
</div>
<script type="text/javascript">
    //prepare labels for comparison
        var remove_string = '<?php echo '<div class="comparison3">'.__('Remove -').'</div>'; ?>';
    var compare_string = '<?php echo '<div class="comparison2">'.__('Compare +').'</div>'; ?>';
        
    $( document ).ready(function() {
        
        
        //show/hide divs with resuts
        $(".brand2").click(function() {
            var $this = $('#'+$(this).html());
            $(".brand_div").not($this).hide();
            $this.toggle();
            $(this).css('background-color','#10631b');
            $(".brand2").not($(this)).css('background-color','#52A55C');
        });
        $(".serie").click(function() {
            var serie_name = $(this).html().toString();
            var $this = $("[id='"+serie_name+"']");
            $(".serie_div").not($this).hide();
            $this.toggle();
            $(this).css('background-color','#10631b');
            $(".serie").not($(this)).css('background-color','#52A55C');
        });
        $(".year").click(function() {
            var $this = $("[id='"+$(this).data("processor_list_div_id")+"']");
            $(".year_div").not($this).hide();
            $this.toggle();
            $(this).css('background-color','#10631b');
            $(".year").not($(this)).css('background-color','#52A55C');
        });
        
        //check if comparison is set
        if(typeof window.sessionStorage.num_of_comparison_items != 'undefined' && window.sessionStorage.num_of_comparison_items != 0){
            $('#comparison_div').css('display','block');
            $('#comparison_div').css('visibility','visible');
            var text = window.sessionStorage.num_of_comparison_items;
            $('#comparison_sum').html(text);
        }
        
        //set remove from conditions for selected items
        if(typeof window.sessionStorage.comparison_items != 'undefined'){
            //CHANGE 'add to comparison' to 'remove from comaprison' 
            //for items in search result list that are already selected for comparison
            var comparison_items = JSON.parse(window.sessionStorage.comparison_items);
            $.each( comparison_items, function( key, value ) {
                $('#'+value).html('<?php echo '<div class="comparison3">'.__('Remove -').'</div>'; ?>');
                $('#'+value).data('comparison','remove');
            });

        }

    });
    /***************************************************************************
    
                            Comparison

    ***************************************************************************/
    $('#main_content').on('click','div.comparison4',function(){
        var action = $(this).data('comparison');
        var result = compare(action,this.id);
        if( result == 'remove'){
            $(this).html( remove_string ) ;
            $(this).data('comparison','remove');
        }
        else if (result == 'add' ){
            $(this).html( compare_string );
            $(this).data('comparison','add');
        }
      });
</script>
<?php echo $this->Html->script('comparison'); ?>