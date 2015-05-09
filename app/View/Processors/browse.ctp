
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
                                    <li> <?php echo $processor['processors']['product_name']; ?> </li>
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
    $( document ).ready(function() {
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

    });
</script>