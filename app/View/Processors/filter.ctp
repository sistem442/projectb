<div class="container">
    <div class="row">
        <div class=" col-sm-9">
            <h2><?php echo __('Processors'); ?></h2>

            <?php
            if(isset($search_results)){
                foreach ($search_results as $search_result): ?>
                <ul class="featureList">
                    <li><b>Brand:</b> <?php echo $search_result['processors']['brand']; ?></li>
                    <li><b>Product name:</b><?php echo $search_result['processors']['product_name']; ?></li>
                    <li><b>Socket:</b><?php echo $search_result['processors']['socket']; ?></li>
                    <li><b>Frequency:</b> <?php echo $search_result['processors']['frequency']; ?>GHz</li>
                    <?php if(isset($search_result['processors']['price'])): ?>
                        <li><b>Price:</b> $<?php echo $search_result['processors']['price']; ?></li>
                    <?php endif; ?>
                    <li><b>Device type:</b> <?php echo $search_result['processors']['device_type']; ?></li>
                    <li><b>Number of cores:</b> <?php echo $search_result['processors']['number_of_cores']; ?></li>
                    <li><b>Launch year:</b> <?php echo $search_result['processors']['launch_year']; ?></li>
                    
                    
                    
                </ul>
                <?php endforeach; 
            }?>
        </div>    
        <div class="col-sm-3">
            <form action="/processors/filter" method="POST">
            <input class="submit" type="submit" value="<?php echo __("submit"); ?>"/>
            <div id="searchFacets" class="gdSearchList">
                <dl class="main">
                    <dt class="commondt">CPU Socket Type</dt>
                    <?php foreach ($socket as $key => $value) { ?>
                                <dd class="commondd">
                                    <input class="submit" id="600005851" name="socket[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <dl class="main">
                    <dt class="commondt">Brand</dt>
                    <?php foreach ($brands as $value) { ?>
                                <dd class="commondd">
                                     <input class="submit" id="600005851" name="brand[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php $success = asort($price); if($success): ?>
                <dl class="main">
                    <dt class="commondt">Price</dt>
                    <?php foreach ($price as $value) { ?>
                                <dd class="commondd">
                                     <input class="submit" id="600005851" name="price[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php if ($value == NULL) echo __('no price'); else echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php endif; ?>
                <dl class="main">
                    <dt class="commondt">Device type</dt>
                    <?php foreach ($device_type as $value) { ?>
                                <dd class="commondd">
                                     <input class="submit" id="600005851" name="device_type[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <dl id="facet4816" class="main">
                    <dt class="commondt">Series</dt>
                    <?php foreach ($series as $value) { ?>
                                <dd class="commondd">
                                     <input class="submit" id="600005851" name="series[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <dl class="main">
                    <dt class="commondt">Code name</dt>
                    <?php foreach ($code_name as $value) { ?>
                                <dd class="commondd">
                                     <input class="submit" id="600005851" name="code_name[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php $success = asort($number_of_cores); if($success): ?>
                <dl class="main">
                    <dt class="commondt">Number of cores</dt>
                    <?php foreach ($number_of_cores as $value) { ?>
                                <dd class="commondd">
                                     <input class="submit" id="600005851" name="number_of_cores[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php endif; ?>
                <?php $success = asort($frequency); if($success): ?>
                <dl class="main">
                    <dt class="commondt">Frequency</dt>
                    <?php foreach ($frequency as $value) { ?>
                                <dd class="commondd">
                                     <input class="submit" id="600005851" name="frequency[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php endif; ?>
                <?php $success = asort($launch_year); if($success): ?>
                <dl class="main">
                    <dt class="commondt">Launch Year</dt>
                    <?php foreach ($launch_year as $value) { ?>
                                <dd class="commondd">
                                    <input class="submit" id="600005851" name="launch_year[]" autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                 <?php endif; ?>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    alert('aaa');
    $( document ).ready(function() {
        alert('bbb');
        console.log( "ready!" );
        $("input[type='checkbox']").click(function(){
            if($(this).is(":checked")) {
                console.log('aaa');
            }
            else {
              console.log('bbb');
            }
        })
    ;});</script>
