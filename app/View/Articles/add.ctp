<div>
<?php echo $this->Form->create('Article'); ?>
	<fieldset>
		<legend><?php echo __('Add Article'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('status', array(
                            'options' => array('active', 'hidden')
                        ));
		echo $this->Form->input('keywords');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
