<div class="container">
    <div class="row">
        <div class=" col-sm-9">
            <h2><?php echo __('Articles'); ?></h2>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('title'); ?></th>
                    </tr>
                </thead>
                <tbody>
	<?php foreach ($articles as $article): ?>
                    <tr>
                        <td><?php echo h($article['Article']['title']); ?>&nbsp;</td>
                    </tr>
<?php endforeach; ?>
                </tbody>
            </table>
            <p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
            <div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
            </div>
        </div>
        <div class="col-sm-3">
    <?php echo $this->element('sidebar/right_menu'); ?>   
        </div>
    </div>
</div>
