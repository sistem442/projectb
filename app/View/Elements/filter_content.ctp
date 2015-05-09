<div class=" col-sm-9" >
    <h2><?php echo __('Processors'); ?></h2>

    <?php
    if(isset($search_results)){
    ?>
    <div>
        <table class="tablesorter" id="processor_table">
            <thead>
                <tr>
                    <td id="compare_all"><?php echo __('Add All'); ?></td>
                    <th><?php echo __('Brand'); ?></th>
                    <th><?php echo __('Series'); ?></th>
                    <th><?php echo __('Name'); ?></th>
                    <th><?php echo __('# of</br> Cores'); ?></th>
                    <th><?php echo __('Frequency'); ?></th>
                    <th><?php echo __('Price Range'); ?></th>
                    <th><?php echo __('Device Type'); ?></th>
                    <th><?php echo __('Socket'); ?></th>
                    <th><?php echo __('Lanch Year'); ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($search_results as $search_result): ?>
                <tr>
                    <td class='comparison' comparison='add' id="<?php echo $search_result['processors']['id']; ?>"><?php echo __('Compare +'); ?></td>
                    <td><?php echo $search_result['processors']['brand']; ?></td>
                    <td><?php echo $search_result['processors']['series']; ?></td>
                    <td>
                        <a href="/processors/item/<?php echo $search_result['processors']['id']; ?>">
                            <?php echo $search_result['processors']['product_name']; ?>
                        </a>
                    </td>
                    <td><?php echo $search_result['processors']['number_of_cores']; ?></td>
                    <td><?php echo $search_result['processors']['frequency']/1000; ?> GHz</td>
                    <td><?php if($search_result['processors']['price_range'] == '') echo 'unknown'; else echo $search_result['processors']['price_range']; ?>
                    <td><?php echo $search_result['processors']['device_type']; ?></td>
                    <td><?php echo $search_result['processors']['socket']; ?></td>
                    <td><?php echo $search_result['processors']['launch_year']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php 
    } 
    else{  ?>
    <div class="center">Pick from filter. -></div>
    <?php } ?>
</div>    
<div class="col-sm-3">
    <div id = 'removable-conditions' style="display:none">

    </div>
    <div id="searchFacets" class="gdSearchList">
        <?php if(isset($number_of_results)) echo __('Number of results: ').$number_of_results; ?>
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