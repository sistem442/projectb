<div class="processor">
    <h1>
<?php echo $item[0]['processors']['brand'].' '.$item[0]['processors']['series'].' '.$item[0]['processors']['product_name']; ?> Processor
    </h1>
    <table>
        <tr>
            <td><?php echo __('Brand'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['brand']); ?>
                &nbsp;
            </td>
        </tr>
        <tr><td><?php echo __('Product Name'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['product_name']); ?>
                &nbsp;
            </td>
        </tr>
        <tr><td><?php echo __('Series'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['series']); ?>
                &nbsp;
            </td>
        </tr>
        <tr><td><?php echo __('Code Name'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['code_name']); ?>
                &nbsp;
            </td>
        </tr>
        <tr><td><?php echo __('Brand'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['brand']); ?>
                &nbsp;
            </td>
        </tr>
        <tr><td><?php echo __('Launch Year'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['launch_year']); ?>
                &nbsp;
            </td>
        </tr>
        <tr><td><?php echo __('Socket'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['socket']); ?>
                &nbsp;
            </td>
        </tr>
        <tr><td><?php echo __('Device Type'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['device_type']); ?>
                &nbsp;
            </td></tr>
        <tr><td><?php echo __('Litography'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['litography']); ?> nm
                &nbsp;
            </td>
        </tr>
        <tr><td><?php echo __('Number Of Cores'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['number_of_cores']); ?>
                &nbsp;
            </td>
        </tr>
                <?php if(isset($item[0]['processors']['number_of_threads'])): ?>
        <tr> <td><?php echo __('Number Of Threads'); ?></td>
            <td>
                            <?php echo h($item[0]['processors']['number_of_threads']); ?>
                &nbsp;
            </td>
        </tr>
                <?php endif; ?>
        <tr><td><?php echo __('Cache'); ?></td>
            <td>
			<?php echo $item[0]['processors']['cache']; ?>
                &nbsp;
            </td>
        </tr>
                <?php if(!empty($item[0]['processors']['graphics'])): ?>
        <tr><td><?php echo __('Graphics'); ?></td>
            <td>
			<?php echo $item[0]['processors']['graphics']; ?>
                &nbsp;
            </td>
        </tr>
                <?php endif; ?>
        <tr><td><?php echo __('Frequency'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['frequency']/1000); ?> GHz
                &nbsp;
            </td>
        </tr>
                <?php if(isset($item[0]['processors']['turbo_frequency']) && $item[0]['processors']['turbo_frequency'] != 0): ?>
        <tr> <td><?php echo __('Turbo Frequency'); ?></td>
            <td>
                            <?php echo h($item[0]['processors']['turbo_frequency']/1000); ?> GHz
                &nbsp;
            </td>
        </tr>
                <?php endif; ?>
        <tr><td><?php echo __('Tdp'); ?></td>
            <td>
			<?php echo h($item[0]['processors']['tdp']); ?> W
                &nbsp;
            </td>
                <?php if(isset($item[0]['processors']['max_ram_memory'])): ?>
        <tr> 
            <td><?php echo __('Max Ram Memory'); ?></td>
            <td>
                            <?php echo h($item[0]['processors']['max_ram_memory']); ?> GB
                &nbsp;
            </td>
        </tr>
                <?php endif; ?>
                <?php if(isset($item[0]['processors']['max_memory_channels'])): ?>
        <tr>
            <td><?php echo __('Max Memory Channels'); ?></td>
            <td>
                            <?php echo h($item[0]['processors']['max_memory_channels']); ?>
                &nbsp;
            </td>
        </tr>
                <?php endif; ?>
                <?php if(isset($item[0]['processors']['max_memory_bandwidth'])): ?>
        <tr> 
            <td><?php echo __('Max Memory Bandwidth'); ?></td>
            <td>
                            <?php echo h($item[0]['processors']['max_memory_bandwidth']/1000); ?> GB/s
                &nbsp;
            </td>
        </tr>
                <?php endif; ?>
                <?php if(isset($item[0]['processors']['price_range'])): ?>
        <tr> 
            <td><?php echo __('Price range'); ?></td>
            <td>
                            <?php echo h($item[0]['processors']['price_range']); ?>
                &nbsp;
            </td>
        </tr> 
                <?php endif; ?>
    </table>
</div>
<div class="actions">

</div>
