<div class="container">
    <div class="row">
        <div class=" col-sm-9">
            <h2><?php echo __('Processors'); ?></h2>

            <?php
            if(isset($processors)){
                foreach ($processors as $processor): ?>
                <ul class="featureList">
                    <li><b>Series:</b>Sempron</li>
                    <li><b>L2 Cache:</b> 1MB</li>
                    <li><b>Cooling Device:</b> Heatsink and fan included</li>
                    <li><b>Manufacturing Tech:</b> 28nm</li>
                    <li><b>Model #: </b>SD2650JAHMBOX</li>
                    <li><b>Item #: </b>N82E16819113367</li>
                    <li><b>Return Policy: </b><a href="http://kb.newegg.com/Policies/Article/1167#39" target="_blank" title="CPU Replacement Only Return Policy(New Window)">CPU Replacement Only Return Policy</a></li>
                </ul>
                <?php endforeach; 
            }?>
        </div>
        <form action="/processors/filter" method="POST">
            <input type="submit" value="<?php echo __("submit"); ?>"/>
        
        <div class="col-sm-3">
            <div id="searchFacets" class="gdSearchList">
                <dl class="main">
                    <dt class="commondt">CPU Socket Type</dt>
                    <?php foreach ($socket as $key => $value) { ?>
                                <dd class="commondd">
                                    <input id="600005851" name="socket[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <dl class="main">
                    <dt class="commondt">Brand</dt>
                    <?php foreach ($brands as $value) { ?>
                                <dd class="commondd">
                                     <input id="600005851" name="brand[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php $success = asort($price); if($success): ?>
                <dl class="main">
                    <dt class="commondt">Price</dt>
                    <?php foreach ($price as $value) { ?>
                                <dd class="commondd">
                                     <input id="600005851" name="price[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php if ($value == NULL) echo __('no price'); else echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php endif; ?>
                <dl class="main">
                    <dt class="commondt">Device type</dt>
                    <?php foreach ($device_type as $value) { ?>
                                <dd class="commondd">
                                     <input id="600005851" name="device_type[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <dl id="facet4816" class="main">
                    <dt class="commondt">Series</dt>
                    <?php foreach ($series as $value) { ?>
                                <dd class="commondd">
                                     <input id="600005851" name="series[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <dl class="main">
                    <dt class="commondt">Code name</dt>
                    <?php foreach ($code_name as $value) { ?>
                                <dd class="commondd">
                                     <input id="600005851" name="code_name[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                <?php $success = asort($number_of_cores); if($success): ?>
                <dl class="main">
                    <dt class="commondt">Number of cores</dt>
                    <?php foreach ($number_of_cores as $value) { ?>
                                <dd class="commondd">
                                     <input id="600005851" name="number_of_cores[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
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
                                     <input id="600005851" name="frequency[]"  autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
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
                                     <input id="600005851" name="launch_year[]" autocomplete="off" type="checkbox" value="<?php echo $value; ?>">
                                     <label for="600005851"><?php echo $value; ?></label>                             
                                 </dd>
                    <?php } ?>
                </dl>
                 <?php endif; ?>
            </div>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    
</script>
