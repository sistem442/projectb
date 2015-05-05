<div class=" col-sm-9" >
    <h2><?php echo __('Processors'); ?></h2>

    <?php
    if(isset($search_results)){
    ?>
    <table>
        <tbody>
            <tr>
                <td><?php echo __('Brand'); ?></td>
                <td><?php echo __('Series'); ?></td>
                <td><?php echo __('Name'); ?></td>
                <td><?php echo __('Socket'); ?></td>
                <td><?php echo __('Frequency'); ?></td>
                <td><?php echo __('Price Range'); ?></td>
                <td><?php echo __('Device Type'); ?></td>
                <td><?php echo __('# of</br> Cores'); ?></td>
                <td><?php echo __('Lanch Year'); ?></td>
                <td id="compare_all"><?php echo __('Add All'); ?></td>
                
            </tr>
        <?php foreach ($search_results as $search_result): ?>
            <tr>
                <td><?php echo $search_result['processors']['brand']; ?></td>
                <td><?php echo $search_result['processors']['series']; ?></td>
                <td><?php echo $search_result['processors']['product_name']; ?></td>
                <td><?php echo $search_result['processors']['socket']; ?></td>
                <td><?php echo $search_result['processors']['frequency']/1000; ?>GHz</td>
                <td><?php echo $search_result['processors']['price_range']; ?>
                <td><?php echo $search_result['processors']['device_type']; ?></td>
                <td><?php echo $search_result['processors']['number_of_cores']; ?></td>
                <td><?php echo $search_result['processors']['launch_year']; ?></td>
                <td class='comparison' comparison='add' id="<?php echo $search_result['processors']['id']; ?>"><?php echo __('Compare +'); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    
    
    
    
<!--        <div class="filter_result">
            <ul class="featureList">
                <li><b>Brand:</b> <?php echo $search_result['processors']['brand']; ?></li>
                <li><b>Product name:</b><?php echo $search_result['processors']['product_name']; ?></li>
                <li><b>Socket:</b><?php echo $search_result['processors']['socket']; ?></li>
                <li><b>Frequency:</b> <?php echo $search_result['processors']['frequency_range']/1000; ?>GHz</li>
                <?php if(isset($search_result['processors']['price_range'])): ?>
                    <li><b>Price:</b> <?php echo $search_result['processors']['price_range']; ?></li>
                <?php endif; ?>
                <li><b>Device type:</b> <?php echo $search_result['processors']['device_type']; ?></li>
                <li><b>Number of cores:</b> <?php echo $search_result['processors']['number_of_cores']; ?></li>
                <li><b>Launch year:</b> <?php echo $search_result['processors']['launch_year']; ?></li>
                <li class = 'comparison' comparison='add' id="<?php echo $search_result['processors']['id']; ?>"><?php echo __('Compare'); ?></li>
            </ul>
        </div>
        <?php // endforeach; ?> -->

    <div>
        <?php
        for($i = 1; $i <=$num_of_pages; $i++){
            ?><li class = 'pagination' value="<?php echo $i-1; ?>" > <?php echo $i; ?></li> <?php
        }
        ?> 
    </div>
    <?php 
    } 
    else{ ?>
    <div class="center">Pick from filter. -></div>
    <?php } ?>
</div>    
<div class="col-sm-3">
    <div id = 'removable-conditions' style="display:none">

    </div>
    <div id="searchFacets" class="gdSearchList">
        <?php $success = asort($price); ?>
        <?php if($success && count($price)>1): ?>
        <dl class="main">
            <dt class="commondt">Price</dt>
            <?php foreach ($price as $value) { ?>
                        <dd class="commondd">
                            <input  id="price_range" name="price_range[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label for="price_range"><?php if ($value == NULL) echo __('no price'); else echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php $success = asort($launch_year); ?>
        <?php if($success && count($launch_year) > 1): ?>
        <dl class="main">
            <dt class="commondt" >Launch Year</dt>

            <?php foreach ($launch_year as $value) { ?>
                        <dd class="commondd">
                            <input  id="launch_year" name="launch_year[]" autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label for="launch_year"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php if(count($device_type)>1): ?>
        <dl class="main">
            <dt class="commondt">Device type</dt>
            <?php foreach ($device_type as $value) { ?>
                        <dd class="commondd">
                             <input  id="device_type" name="device_type[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label for="device_type"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php $success = asort($number_of_cores); ?>
        <?php if($success && count($number_of_cores)>1): ?>
        <dl class="main">
            <dt class="commondt">Number of cores</dt>
            <?php foreach ($number_of_cores as $value) { ?>
                        <dd class="commondd">
                             <input  id="number_of_cores" name="number_of_cores[]"  autocomplete="off" type="radio" value="<?php echo $value; ?>">&nbsp;
                             <label for="number_of_cores"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php $success = asort($frequency_range); ?>
        <?php if($success && count($frequency_range)>1): ?>
        <dl class="main">
            <dt class="commondt">Frequency</dt>
            <?php foreach ($frequency_range as $value) { ?>
                        <dd class="commondd">
                             <input  id="frequency_range" name="frequency_range[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label for="frequency_range"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php if(count($series)>1): ?>
        <dl class="main">
            <dt class="commondt">Series</dt>
            <?php foreach ($series as $value) { ?>
                        <dd class="commondd">
                             <input  id="series" name="series[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label for="series"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php if(count($code_name)>1): ?>
        <dl class="main">
            <dt class="commondt">Code name</dt>
            <?php foreach ($code_name as $value) { ?>
                        <dd class="commondd">
                             <input  id="code_name" name="code_name[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label for="code_name"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php $success = asort($socket); ?>
        <?php if($success && count($socket)>1): ?>
        <dl class="main">
            <dt class="commondt">CPU Socket Type</dt>
            <?php foreach ($socket as $key => $value) { ?>
                        <dd class="commondd">
                            <input  id="socket" name="socket[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label for="socket"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php if(count($brands)>1): ?>
        <dl class="main">
            <dt class="commondt">Brand</dt>
            <?php foreach ($brands as $value) { ?>
                        <dd class="commondd">
                             <input  id="brand" name="brand[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label for="brand"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
    </div>         
</div>