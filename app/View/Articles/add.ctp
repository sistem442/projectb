<?php     
    echo $this->Html->script('ckeditor/ckeditor');
?>
<div>
<?php echo $this->Form->create('Article'); ?>
	<fieldset>
		<legend><?php echo __('Add Article'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body',array('class'=>'ckeditor'));
		echo $this->Form->input('status', array(
                            'options' => array('active', 'hidden')
                        ));
		echo $this->Form->input('keywords');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<script>
    CKEDITOR.replace( 'editor1' );
</script>