<div class="processors view">
<h2><?php echo __('Processor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Name'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['product_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Name'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['code_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Socket'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['socket']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Litography'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['litography']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Cores'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['number_of_cores']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Threads'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['number_of_threads']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cache'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['cache']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frequency'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['frequency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turbo Frequency'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['turbo_frequency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tdp'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['tdp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Ram Memory'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['max_ram_memory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Memory Channels'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['max_memory_channels']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Memory Bandwidth'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['max_memory_bandwidth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($processor['Processor']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Processor'), array('action' => 'edit', $processor['Processor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Processor'), array('action' => 'delete', $processor['Processor']['id']), array(), __('Are you sure you want to delete # %s?', $processor['Processor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Processors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
