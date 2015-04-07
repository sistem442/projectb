<div class="processors form">
<?php echo $this->Form->create('Processor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Processor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_name');
		echo $this->Form->input('code_name');
		echo $this->Form->input('brand');
		echo $this->Form->input('socket');
		echo $this->Form->input('litography');
		echo $this->Form->input('number_of_cores');
		echo $this->Form->input('number_of_threads');
		echo $this->Form->input('cache');
		echo $this->Form->input('frequency');
		echo $this->Form->input('turbo_frequency');
		echo $this->Form->input('tdp');
		echo $this->Form->input('max_ram_memory');
		echo $this->Form->input('max_memory_channels');
		echo $this->Form->input('max_memory_bandwidth');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Processor.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Processor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Processors'), array('action' => 'index')); ?></li>
	</ul>
</div>
