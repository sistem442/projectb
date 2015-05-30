        <div class=" col-sm-5">
            <h2><?php echo __('Articles'); ?></h2>
            <?php foreach($articles as $article){ ?>
            <div class="article_title">
                <a href="/articles/view/<?php echo $article['articles']['id']; ?>">
                    <?php echo $article['articles']['title']; ?>
                </a>
            </div>
            <?php } ?>
        </div>
        <div class=" col-sm-4">
            <h2><?php echo __('News'); ?></h2>
            <?php foreach($news as $news_single){ ?>
            <div class="article_title">
                <a href="/news/view/<?php echo $news_single['news']['id']; ?>">
                    <?php echo $news_single['news']['title']; ?>
                </a>
            </div>
            <?php } ?>
        </div>
        <div class="col-sm-3 nopadding">
    <?php echo $this->element('sidebar/right_menu'); ?>   
        </div>

