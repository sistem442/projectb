        <div class=" col-sm-9" >
            <h2><?php echo __('Processors'); ?></h2>

            <?php
            if(isset($search_results)){
                foreach ($search_results as $search_result): ?>
                <ul class="featureList">
                    <li><b>Brand:</b> <?php echo $search_result['processors']['brand']; ?></li>
                    <li><b>Product name:</b><?php echo $search_result['processors']['product_name']; ?></li>
                    <li><b>Socket:</b><?php echo $search_result['processors']['socket']; ?></li>
                    <li><b>Frequency:</b> <?php echo $search_result['processors']['frequency']/1000; ?>GHz</li>
                    <?php if(isset($search_result['processors']['price'])): ?>
                        <li><b>Price:</b> $<?php echo $search_result['processors']['price']; ?></li>
                    <?php endif; ?>
                    <li><b>Device type:</b> <?php echo $search_result['processors']['device_type']; ?></li>
                    <li><b>Number of cores:</b> <?php echo $search_result['processors']['number_of_cores']; ?></li>
                    <li><b>Launch year:</b> <?php echo $search_result['processors']['launch_year']; ?></li>
                </ul>
                <?php endforeach; ?> 
                
            <div class="pagination">
                <?php
                for($i = 1; $i <=$num_of_pages; $i++){
                    ?><li value="<?php echo $i; ?>" > <?php echo $i; ?></li> <?php
                }
                ?> </div><?php
            }
            else{?>
            <div class="center">Pick from filter. -></div>
            <?php } ?>
        </div>    
        <div class="col-sm-3">
            <div id="searchFacets" class="gdSearchList">
                <dl class="main">
                    <dt class="commondt">CPU Socket Type</dt>
                    <?php foreach ($socket as $key => $value) { ?>
                                <dd class="commondd">
                                    <input  id="socket" name="socket[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="socket"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <dl class="main">
                    <dt class="commondt">Brand</dt>
                    <?php foreach ($brands as $value) { ?>
                                <dd class="commondd">
                                     <input  id="brand" name="brand[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="brand"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php $success = asort($price); if($success): ?>
                <dl class="main">
                    <dt class="commondt">Price</dt>
                    <?php foreach ($price as $value) { ?>
                                <dd class="commondd">
                                     <input  id="price" name="price[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="price"><?php if ($value == NULL) echo __('no price'); else echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php endif; ?>
                <dl class="main">
                    <dt class="commondt">Device type</dt>
                    <?php foreach ($device_type as $value) { ?>
                                <dd class="commondd">
                                     <input  id="device_type" name="device_type[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="device_type"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <dl id="facet4816" class="main">
                    <dt class="commondt">Series</dt>
                    <?php foreach ($series as $value) { ?>
                                <dd class="commondd">
                                     <input  id="series" name="series[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="series"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <dl class="main">
                    <dt class="commondt">Code name</dt>
                    <?php foreach ($code_name as $value) { ?>
                                <dd class="commondd">
                                     <input  id="code_name" name="code_name[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="code_name"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php $success = asort($number_of_cores); if($success): ?>
                <dl class="main">
                    <dt class="commondt">Number of cores</dt>
                    <?php foreach ($number_of_cores as $value) { ?>
                                <dd class="commondd">
                                     <input  id="number_of_cores" name="number_of_cores[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="number_of_cores"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php endif; ?>
                <?php $success = asort($frequency); if($success): ?>
                <dl class="main">
                    <dt class="commondt">Frequency</dt>
                    <?php foreach ($frequency as $value) { ?>
                                <dd class="commondd">
                                     <input  id="frequency" name="frequency[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="frequency"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php endif; ?>
                <?php $success = asort($launch_year); if($success): ?>
                <dl class="main">
                    <dt class="commondt">Launch Year</dt>
                    <?php foreach ($launch_year as $value) { ?>
                                <dd class="commondd">
                                    <input  id="launch_year" name="launch_year[]" autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="launch_year"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                 <?php endif; ?>
            </div>         
        </div>
