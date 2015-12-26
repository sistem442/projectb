<div class=" nopadding col-sm-12 col-md-10" >
    <?php if(isset($search_results)){ ?>
    <div style="min-width: 800px">
        <table class="tablesorter" id="processor_table">
            <thead>
                <tr>
                    <td id="compare_all"><?php echo __('Add All'); ?></td>
                    <th><?php echo __('Brand'); ?></th>
                    <th><?php echo __('Series'); ?></th>
                    <th><?php echo __('Model'); ?></th>
                    <th><?php echo __('# of</br> Cores'); ?></th>
                    <th><?php echo __('Frequency'); ?></th>
                    <th><?php echo __('Price Range'); ?></th>
                    <th><?php echo __('Device Type'); ?></th>
                    <th><?php echo __('Socket'); ?></th>
                    <th><?php echo __('Year'); ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($search_results as $search_result): ?>
                <tr>
                    <td class='comparison' comparison='add' id="<?php echo $search_result['processors']['id']; ?>">
                        <div class="comparison2"><?php echo __('Compare +'); ?></div>
                    </td>
                    <td><?php echo $search_result['processors']['brand']; ?></td>
                    <td><?php echo $search_result['processors']['series']; ?></td>
                    <td>
                        <a href="/processors/view/<?php echo $search_result['processors']['brand']; ?>/<?php echo $search_result['processors']['series']; ?>/<?php echo $search_result['processors']['product_name']; ?>">
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
    elseif ($display_no_result_notice_only) { ?>
    <div class="centered-message red">No results were found. Change keyword or use filter only.</div>
    <?php }
    else{  ?>
        <div class="centered-message green"><?php echo __('Please select option from filter or enter keyword.'); ?></div>
    <?php } ?>
</div>    
<div class="col-xs-12 col-sm-12 col-md-2 nopadding search">
    <div id = 'removable-conditions'>
        <ul class = 'removable_conditions'>
            
        </ul>
    </div>
    
    <div id="keywords_section">
        <div id="keywords_left">
            <form id="keywords_form" onsubmit="return false;">
                <input 
                    type="text" 
                    id="keywords"
                    title="<?php echo __("Keyword"); ?>"
                    placeholder="<?php echo __("Keyword"); ?>" 
                    style=" width:100%; border: 0px solid; padding: 0px; height: 30px; text-overflow: ellipsis;"
                />
                <button type="submit" style="display:none"/>
            </form>
        </div>
        <div id="keywords_right"><a href="#" id="keywords_button" class="magni glyphicon glyphicon-search"></a></div>

    </div><!-- search_section -->
     
    <div id="searchFacets" class="gdSearchList">
        <div id="number_of_results"><?php if(isset($number_of_results)) echo __('Number of results: ').$number_of_results; ?></div>
        <?php $success = natsort($price); ?>
        <?php if($success && count($price)>1): ?>
        <dl class="main">
            <dt style="border-bottom: 1px solid black; width: 100%; border-color: #787878;">Price</dt>
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
            <dt style="border-bottom: 1px solid black; width: 100%; border-color: #787878;" >Launch Year</dt>

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
            <dt style="border-bottom: 1px solid black; width: 100%; border-color: #787878;">Device type</dt>
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
            <dt style="border-bottom: 1px solid black; width: 100%; border-color: #787878;">Number of cores</dt>
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
            <dt style="border-bottom: 1px solid black; width: 100%; border-color: #787878;">Frequency</dt>
            <?php foreach ($frequency_range as $value) { ?>
                        <dd class="commondd">
                             <input  id="frequency_range" name="frequency_range[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label style="width: 90%" for="frequency_range"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php $success = natsort($series); ?>
        <?php if($success && count($series)>1): ?>
        <dl class="main">
            <dt style="border-bottom: 1px solid black; width: 100%; border-color: #787878;">Series</dt>
            <?php foreach ($series as $value) { ?>
                        <dd class="commondd">
                             <input  id="series" name="series[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label for="series"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php $success = natsort($code_name); ?>
        <?php if($success && count($code_name)>1): ?>
        <dl class="main">
            <dt style="border-bottom: 1px solid black; width: 100%; border-color: #787878;">Code name</dt>
            <?php foreach ($code_name as $value) { ?>
                        <dd class="commondd">
                             <input  id="code_name" name="code_name[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label style="width: 90%" for="code_name"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
        <?php $success = natsort($socket); ?>
        <?php if($success && count($socket)>1): ?>
        <dl class="main">
            <dt style="border-bottom: 1px solid black; width: 100%; border-color: #787878;">CPU Socket Type</dt>
            <?php foreach ($socket as $key => $value) { ?>
                        <dd class="commondd">
                            <input  id="socket" name="socket[]"  autocomplete="off" type="radio" value="'<?php echo $value; ?>'">&nbsp;
                             <label for="socket"><?php echo $value; ?></label>                             
                         </dd>
            <?php } ?>
        </dl>
        <?php endif; ?>
       <?php $success = natsort($brands); ?>
        <?php if($success && count($brands)>1): ?>
        <dl class="main">
            <dt style="border-bottom: 1px solid black; width: 100%; border-color: #787878;">Brand</dt>
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
