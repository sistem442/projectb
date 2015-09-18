<?php var_dump($processors_results); ?>
<?php 
if (!empty($articles_results)){
    foreach($articles_results as $article){
        ?>
        <a href="/articles/view/<?php echo $article['articles']['id'];?>">
        <?php echo $article['articles']['title'];?></a></br>
        <?php
    }
}
if (!empty($processors_results)){
    foreach($processors_results as $processor){
        ?>
        <a href="/processors/item/<?php echo $processor['processors']['id'];?>">
        <?php echo $processor['processors']['brand'].' '.
                $processor['processors']['series'].' '.
        $processor['processors']['product_name'];?></a></br>
        <?php
    }
}
?>