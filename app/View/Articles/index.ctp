        <div class=" col-sm-9">
            <h2><?php echo __('Featured Article'); ?></h2>
            <h3><?php echo $single_article[0]['articles']['title']; ?></h3>
            <?php echo $single_article[0]['articles']['body']; ?>
        </div>

        <div class="col-sm-3 nopadding">
    <?php echo $this->element('sidebar/right_menu'); ?>  
            <h2><?php echo __('Articles'); ?></h2>
            <?php foreach($articles as $article){ ?>
            <div class="article_title">
                <a href="/articles/view/<?php echo $article['articles']['id']; ?>">
                    <?php echo $article['articles']['title']; ?>
                </a>
            </div>
            <?php } ?>
        </div>

