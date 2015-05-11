<div id="comparison_div" style = "display:none"><span id="compare"><?php echo __('Compare specifications'); ?>(<span id="comparison_sum"></span>)</span><span id = "delete_comparison_items">x</span></div>
<div id="main_content">
    <!-- print brands -->
    <?php foreach ($processors as $brand => $series): ?>
        <div class="brand" style="display: inline "><?php echo $brand; ?></div>
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
                            <ul>
                                <?php foreach ($processors as $processor){ ?>
                                    <li> 
                                        <div class='comparison' comparison='add' id="<?php echo $processor['processors']['id']; ?>"><?php echo __('Compare +'); ?></div>
                                        <a href="/processors/item/<?php echo $processor['processors']['id']; ?>">
                                            <?php echo $processor['processors']['product_name']; ?>
                                        </a>
                                    </li>
                                <?php  }    ?>
                            </ul>
                        </div>
                    <?php endforeach;    ?>
                </div>
            <?php }    ?>
        </div>
    <?php  }    ?>
</div>
<script type="text/javascript">
    //prepare labels for comparison
        var remove_string = '<?php echo __('Remove -'); ?>';
        var compare_string = '<?php echo __('Compare +'); ?>';
        
    $( document ).ready(function() {
        
        
        //show/hide divs with resuts
        $(".brand").click(function() {
            var $this = $('#'+$(this).html());
            $(".brand_div").not($this).hide();
            $this.toggle();
        });
        $(".serie").click(function() {
            var $this = $('#'+$(this).html());
            $(".serie_div").not($this).hide();
            $this.toggle();
        });
        $(".year").click(function() {
            var $this = $('#'+$(this).data("processor_list_div_id"));
            $(".year_div").not($this).hide();
            $this.toggle();
        });
        
        //check if comparison is set
        console.log(window.sessionStorage.num_of_comparison_items);
        if(typeof window.sessionStorage.num_of_comparison_items != 'undefined' && window.sessionStorage.num_of_comparison_items != 0){
            $('#comparison_div').css('display','block');
            var text = window.sessionStorage.num_of_comparison_items;
            $('#comparison_sum').html(text);
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

    });
    /***************************************************************************
    
                            Comparison

    ***************************************************************************/
    $('#main_content').on('click','div.comparison',function(){
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