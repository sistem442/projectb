<div class="col-sm-3 col-xs-12 nopadding pull-right">
            <?php echo $this->element('sidebar/right_menu'); ?>              
        </div>        
<div class=" col-sm-9 pull-left">
            <h2><?php echo __('Featured Article'); ?></h2>
            <h3><?php echo $single_article[0]['articles']['title']; ?></h3>
            <?php echo $single_article[0]['articles']['body']; ?>
        </div>

        

