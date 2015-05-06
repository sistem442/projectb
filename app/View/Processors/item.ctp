<div class="processors view">
<h2><?php echo __('processors'); ?></h2>
	<dl>
                 <dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Name'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['product_name']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Series'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['series']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Name'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['code_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['brand']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Launch Year'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['launch_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Socket'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['socket']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Device Type'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['device_type']); ?>
			&nbsp;
		</dd>
               <dt><?php echo __('Litography'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['litography']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Cores'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['number_of_cores']); ?>
			&nbsp;
		</dd>
                <?php if(isset($item[0]['processors']['number_of_threads'])): ?>
                    <dt><?php echo __('Number Of Threads'); ?></dt>
                    <dd>
                            <?php echo h($item[0]['processors']['number_of_threads']); ?>
                            &nbsp;
                    </dd>
                <?php endif; ?>
		<dt><?php echo __('Cache'); ?></dt>
		<dd>
			<?php echo $item[0]['processors']['cache']; ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Graphics'); ?></dt>
		<dd>
			<?php echo $item[0]['processors']['graphics']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frequency'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['frequency']/1000); ?> GHz
			&nbsp;
		</dd>
                <?php if(isset($item[0]['processors']['turbo_frequency'])): ?>
                    <dt><?php echo __('Turbo Frequency'); ?></dt>
                    <dd>
                            <?php echo h($item[0]['processors']['turbo_frequency']/1000); ?> GHz
                            &nbsp;
                    </dd>
                <?php endif; ?>
		<dt><?php echo __('Tdp'); ?></dt>
		<dd>
			<?php echo h($item[0]['processors']['tdp']); ?> W
			&nbsp;
		</dd>
                <?php if(isset($item[0]['processors']['max_ram_memory'])): ?>
                    <dt><?php echo __('Max Ram Memory'); ?></dt>
                    <dd>
                            <?php echo h($item[0]['processors']['max_ram_memory']); ?> GB
                            &nbsp;
                    </dd>
                <?php endif; ?>
                <?php if(isset($item[0]['processors']['max_memory_channels'])): ?>
                    <dt><?php echo __('Max Memory Channels'); ?></dt>
                    <dd>
                            <?php echo h($item[0]['processors']['max_memory_channels']); ?>
                            &nbsp;
                    </dd>
                <?php endif; ?>
                <?php if(isset($item[0]['processors']['max_memory_bandwidth'])): ?>
                    <dt><?php echo __('Max Memory Bandwidth'); ?></dt>
                    <dd>
                            <?php echo h($item[0]['processors']['max_memory_bandwidth']/1000); ?> GB/s
                            &nbsp;
                    </dd>
                <?php endif; ?>
                <?php if(isset($item[0]['processors']['price_range'])): ?>
                    <dt><?php echo __('Price range'); ?></dt>
                    <dd>
                            <?php echo h($item[0]['processors']['price_range']); ?>
                            &nbsp;
                    </dd>
                <?php endif; ?>
	</dl>
</div>
<div class="actions">
	
</div>
