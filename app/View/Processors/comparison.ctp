<table>
    <tbody id="sortable_table">
        <tr id="product_name">
            <td class="sort" id="product_name"><></td>
            <td><?php echo __('Name'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="product_name" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['product_name']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="launch_year">
            <td class="sort" id="launch_year"><></td>
            <td><?php echo __('Launch Year'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="launch_year" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['launch_year']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="cache">
            <td class="sort" id="cache"><></td>
            <td><?php echo __('Cache'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="cache" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['cache']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="price_range">
            <td class="sort" id="price_range"><></td>
            <td><?php echo __('Price Range'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="price_range" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['price_range']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="frequency_range">
            <td class="sort" id="frequency_range"><></td>
            <td><?php echo __('Frequency Range'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="frequency_range" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['frequency_range']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="frequency">
            <td class="sort" id="frequency"><></td>
            <td><?php echo __('Frequency'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="frequency" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['frequency']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="turbo_frequency">
            <td class="sort" id="turbo_frequency"><></td>
            <td><?php echo __('Turbo Frequency'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="turbo_frequency" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['turbo_frequency']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="tdp">
            <td class="sort" id="tdp"><></td>
            <td><?php echo __('TDP'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="tdp" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['tdp']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="max_ram_memory">
            <td class="sort" id="max_ram_memory"><></td>
            <td><?php echo __('Max Memory Size'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="max_ram_memory" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['max_ram_memory']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="graphics">
            <td class="sort" id="graphics"><></td>
            <td><?php echo __('Graphics'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="graphics" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['graphics']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="device_type">
            <td class="sort" id="device_type"><></td>
            <td><?php echo __('Device Type'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="device_type" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['device_type']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="series">
            <td class="sort" id="series"><></td>
            <td><?php echo __('Series'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="series" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['series']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="code_name">
            <td class="sort" id="code_name"><></td>
            <td><?php echo __('Code Name'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="code_name" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['code_name']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="number_of_cores">
            <td class="sort" id="number_of_cores"><></td>
            <td><?php echo __('Number of Cores'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="number_of_cores" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['number_of_cores']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="number_of_threads">
            <td class="sort" id="number_of_threads"><></td>
            <td><?php echo __('Number of Threads'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="number_of_threads" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['number_of_threads']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="socket">
            <td class="sort" id="socket"><></td>
            <td><?php echo __('Socket'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="socket" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['socket']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="litography">
            <td class="sort" id="litography"><></td>
            <td><?php echo __('Litography'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="litography" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['litography']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="max_memory_channels">
            <td class="sort" id="max_memory_channels"><></td>
            <td><?php echo __('Max # of Memory Channels'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="max_memory_channels" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['max_memory_channels']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="max_memory_bandwidth">
            <td class="sort" id="max_memory_bandwidth"><></td>
            <td><?php echo __('Max Memory Bandwidth'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="max_memory_bandwidth" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['max_memory_bandwidth']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr id="brand">
            <td class="sort" id="brand"><></td>
            <td><?php echo __('Brand'); ?></td>
            <?php $i=0; ?>
            <?php foreach ($comparison_items as $key => $processor): ?>
                <td class="brand" id="<?php echo $i; $i++; ?>"><?php echo $processor['processors']['brand']; ?></td>
            <?php endforeach; ?>
        </tr>
        
    </tbody>
</table>


<script type="text/javascript">
    var order = 'asc';
    var table_rows = [];
    var row_object = {};
    var unsorted_object = {};
    var sorted_id_array = [];
    $('#sortable_table').on('click','td.sort',function(){
        var unsorted_array = [];
        //console.log(this.id);
        //get value of selected row and put it in array, append id because 
        //you need id as link between selected properti and other properies
        $('.'+this.id).each(function(index,element){
            unsorted_array[index] = $(this).html()+this.id;
        });
        console.log(unsorted_array);
        //sort array of valoes of selected property
        if(order == 'asc'){
            var sorted_array = unsorted_array.sort();
            order = 'desc';
        }
        else{
            unsorted_array.sort();
            var sorted_array = unsorted_array.reverse();
            order = 'asc';
        }
        console.log(sorted_array);
        //create array of sorted id's from arry of sorted properties
        for (var i = 0; i < sorted_array.length; i++) {
            sorted_id_array[i] = sorted_array[i][sorted_array[i].length -1];
        }
        console.log(sorted_id_array);
        //get all table rows and rewrite them in order by selected row
        $('tr').each(function(index,element){
            table_rows[index] = this.id
            //for every td get contens in row-object
            $('td.'+this.id).each(function(index,element){
                row_object[this.id] = $(this).html();
               // console.log(row_object);
                //iterate through sorted array and print object propertie
            });
            //replace html with sorted data 
            var j = 0;
            $('td.'+this.id).each(function(index,element){
                $(this).html(row_object[sorted_id_array[j]]);
                j++;
                //console.log(row_object);
            });
        });
    });
</script>