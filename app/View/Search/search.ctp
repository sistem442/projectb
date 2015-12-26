<?php

// var_dump($processors_results); ?>
<div class="search_results">
<?php 
if (!empty($articles_results)){
    ?>
    <div class='search_section_title'>
        Articles
    </div>
    <?php foreach($articles_results as $article){
        ?>
    <div class="search_result">
        <a href="/articles/components/cpu/<?php echo $article['articles']['article_url_title'];?>">
        <?php echo $article['articles']['title'];?></a>
    </div>
        <?php
    }
}
if (!empty($processors_results)){
    ?>
    <div class='search_section_title'>
        Processors
    </div>
    <?php foreach($processors_results as $processor){
        ?>
    <div class="search_result">
        <a href="/processors/view/<?php echo $processor['processors']['brand'].'/'.
                $processor['processors']['series'].'/'.
                $processor['processors']['product_name'];?>">
            <div class="processor_name">
                <?php echo $processor['processors']['brand'].' '.
                $processor['processors']['series'].' '.
                $processor['processors']['product_name'];?>
            </div>
            <div class="processor_desc">
                <?php echo 'cache: '. 
                $processor['processors']['cache'].'/ '.
                $processor['processors']['litography'].'nm/ cores:'.
                $processor['processors']['number_of_cores'].'/ socket:'.
                $processor['processors']['socket'].'/ launch year: '.
                $processor['processors']['launch_year'].'/ device type:'.
                $processor['processors']['device_type'];?>
            </div>
        </a>
    </div>
        <?php
    }
}
else { 
    ?>
    <div class='search_section_title'>
        <span style="color: red">
            No results were found for search:</br>
        </span>
        <span style="color: grey">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $search_string0; ?>
        </span>
    </div>
    <?php
}?>
</div>