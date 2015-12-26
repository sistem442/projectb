<table id="comparison_table">
    <tbody id="sortable_table">
        <tr id="brand">
            <td class="sort" id="brand"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Brand'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell brand" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['brand']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="series">
            <td class="sort" id="series"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Series'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell series" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['series']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="product_name">
            <td class="sort" id="product_name">
                <div title="<?php echo __("sort"); ?>" class ="sort_arrows">
                    <div>▲</div><div>▼</div>
                </div>
            </td>
            <td class="compare-cell" ><?php echo __('Name'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell product_name " id="<?php echo $i; ?>">
                    <a href="/processors/view/<?php echo $processor['processors']['brand']; ?>/<?php echo $processor['processors']['series']; ?>/<?php echo $processor['processors']['product_name']; ?>">
                        <?php echo $processor['processors']['product_name']; ?>
                    </a>
                    <span class="remove_column" title="remove column" id="<?php echo $i; $i++; ?>">
                        <img src="/img/delete_icon.png" />
                    </span>
                </td>
            <?php endforeach; ?>
        </tr>
        <tr id="code_name">
            <td class="sort" id="code_name"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Code Name'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell code_name" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['code_name']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="launch_year">
            <td class="sort" id="launch_year"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Launch Year'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell launch_year" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['launch_year']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="cache">
            <td class="sort" id="cache"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Cache'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell cache" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['cache']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="price_range">
            <td class="sort" id="price_range"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Price Range'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell price_range" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['price_range']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="frequency_range">
            <td class="sort" id="frequency_range"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Frequency Range'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell frequency_range" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['frequency_range']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="frequency">
            <td class="sort" id="frequency"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Frequency'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell frequency" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['frequency']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="turbo_frequency">
            <td class="sort" id="turbo_frequency"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Turbo Frequency'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell turbo_frequency" id="<?php echo $i; $i++; ?>">
                    <?php 
                    if($processor['processors']['turbo_frequency'] != null)
                        echo $processor['processors']['turbo_frequency'];
                    else
                        echo '<span style="font-style:italic; font-weight:normal; color:red">none</span>';
                    ?>
                </td>
            <?php endforeach; ?>
        </tr>
        <tr id="tdp">
            <td class="sort" id="tdp"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('TDP'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell tdp" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['tdp']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="max_ram_memory">
            <td class="sort" id="max_ram_memory"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Max Memory Size'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell max_ram_memory" id="<?php echo $i; $i++; ?>">
                    <?php 
                    if($processor['processors']['max_ram_memory'] != null)
                        echo $processor['processors']['max_ram_memory'];
                    else
                        echo '<span style="font-style:italic; font-weight:normal; color:red">no data</span>';
                    ?>
                </td>
            <?php endforeach; ?>
        </tr>
        <tr id="graphics">
            <td class="sort" id="graphics"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Graphics'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell graphics" id="<?php echo $i; $i++; ?>">
                    <?php 
                    if($processor['processors']['graphics'] != null)
                        echo $processor['processors']['graphics'];
                    else
                        echo '<span style="font-style:italic; font-weight:normal; color:red">none</span>';
                    ?>
                </td>
            <?php endforeach; ?>
        </tr>
        <tr id="device_type">
            <td class="sort" id="device_type"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Device Type'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell device_type" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['device_type']; ?></td>
            <?php endforeach; ?>
        </tr>
        
        <tr id="number_of_cores">
            <td class="sort" id="number_of_cores"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Number of Cores'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell number_of_cores" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['number_of_cores']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="number_of_threads">
            <td class="sort" id="number_of_threads"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Number of Threads'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell number_of_threads" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['number_of_threads']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="socket">
            <td class="sort" id="socket"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Socket'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell socket" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['socket']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="litography">
            <td class="sort" id="litography"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Litography'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell litography" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['litography']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="max_memory_channels">
            <td class="sort" id="max_memory_channels"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Max # of Memory Channels'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell max_memory_channels" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['max_memory_channels']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="max_memory_bandwidth">
            <td class="sort" id="max_memory_bandwidth"><div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div></td>
            <td class="compare-cell" ><?php echo __('Max Memory Bandwidth'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="compare-cell max_memory_bandwidth" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['max_memory_bandwidth']; ?></td>
            <?php endforeach; ?>
        </tr>
        
        
    </tbody>
</table>

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
    var order = 'asc';
    var table_rows = [];
    var row_object = {};
    var sorted_id_array = [];
    
    $('#sortable_table').on('click',".remove_column",function(){
       $('td[id="'+this.id+'"]').remove();
    });
    
    
    $('#sortable_table').on('click','td.sort',function(){
        var unsorted_object_array = [];
        //get value of selected row and put it in array, append id because 
        //you need id as link between selected properti and other properies
        $('.'+this.id).each(function(index,element){
            var temp_object = {};
            temp_object['item_id'] = this.id;
            temp_object['item_value']= $(this).html();
            unsorted_object_array.push(temp_object); 
        });
        //sort array of valoes of selected property
        if(order == 'asc'){
            var sorted_object_array = unsorted_object_array.sort(function (a, b) {
                return a.item_value.localeCompare( b.item_value );
            });
            order = 'desc';
            //change arrows
            $('.sort').html('<div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div>');
            $('.sort').removeClass('green_arrow');
            $(this).addClass('green_arrow');
            $(this).html('▲');
        }
        else{
            unsorted_object_array.sort(function (a, b) {
                return a.item_value.localeCompare( b.item_value );
            });
            var sorted_object_array = unsorted_object_array.reverse(function (a, b) {
                return a.item_value.localeCompare( b.item_value );
            });
            order = 'asc';
            //change arrows
            $('.sort').html('<div title="<?php echo __("sort"); ?>" class ="sort_arrows"><div>▲</div><div>▼</div></div>');
            $('.sort').removeClass('green_arrow');
            $(this).addClass('green_arrow');
            $(this).html('▼');
        }
                
        //create array of sorted id's from array of sorted properties
        for (var i = 0; i < sorted_object_array.length; i++) {
            sorted_id_array[i] = sorted_object_array[i].item_id;
        }
        //get all table rows and rewrite them in order by selected row
        $('tr').each(function(index,element){
            table_rows[index] = this.id
            //for every td get contens in row-object
            $('td.'+this.id).each(function(index,element){
                row_object[this.id] = $(this).html();
                //iterate through sorted array and print object propertie
            });
            //replace html with sorted data 
            var j = 0;
            $('td.'+this.id).each(function(index,element){
                $(this).html(row_object[sorted_id_array[j]]);
                j++;
            });
        });
        unsorted_object_array = [];
    });
</script>