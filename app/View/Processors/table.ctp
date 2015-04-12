<div class="container">
    <div class="row">
        <div class=" col-sm-9">
            <h2><?php echo __('Processors'); ?></h2>
            <table cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('product_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('code_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('brand'); ?></th>
                            <th><?php echo $this->Paginator->sort('socket'); ?></th>
                            <th><?php echo $this->Paginator->sort('litography'); ?></th>
                            <th><?php echo $this->Paginator->sort('number_of_cores'); ?></th>
                            <th><?php echo $this->Paginator->sort('number_of_threads'); ?></th>
                            <th><?php echo $this->Paginator->sort('cache'); ?></th>
                            <th><?php echo $this->Paginator->sort('frequency'); ?></th>
                            <th><?php echo $this->Paginator->sort('turbo_frequency'); ?></th>
                            <th><?php echo $this->Paginator->sort('tdp'); ?></th>
                            <th><?php echo $this->Paginator->sort('max_ram_memory'); ?></th>
                            <th><?php echo $this->Paginator->sort('max_memory_channels'); ?></th>
                            <th><?php echo $this->Paginator->sort('max_memory_bandwidth'); ?></th>
                            <th><?php echo $this->Paginator->sort('price'); ?></th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($processors as $processor): ?>
                <tr>
                        <td><?php echo h($processor['Processor']['id']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['product_name']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['code_name']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['brand']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['socket']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['litography']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['number_of_cores']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['number_of_threads']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['cache']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['frequency']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['turbo_frequency']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['tdp']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['max_ram_memory']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['max_memory_channels']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['max_memory_bandwidth']); ?>&nbsp;</td>
                        <td><?php echo h($processor['Processor']['price']); ?>&nbsp;</td>
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
            
        </div>
    </div>
</div>

