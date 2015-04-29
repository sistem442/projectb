<table>
    <!-- IMPORTANT, class="list" have to be at tbody -->
    <tbody id="sortable_table">
        <tr id="name">
            <td class="sort" id="name"> sort by name</td>
            <td class="name" id="0">Martina Elm</td>
            <td class="name" id="1">Jonas Arnklint</td>
            <td class="name" id="2">Jonny Stromberg</td>
            <td class="name" id="3">Gustaf Lindqvist</td>
        </tr>
        <tr id="year">
            <td class="sort" id="year">sort by year</td>
            <td class="year" id="0">1986</td>
            <td class="year" id="1">1985</td>
            <td class="year" id="2">2020</td>
            <td class="year" id="3">2015</td>
        </tr>
    </tbody>
  </table>
<script type="text/javascript">
    var order = 'asc';
    var table_rows = [];
    var row_object = {};
    var unsorted_object = {};
    var sorted_id_array = [];
    var i = 1;
    $('#sortable_table').on('click','td.sort',function(){
        var i = 0;
        var sorted_array = [];
        
        //console.log(this.id);
        $('.'+this.id).each(function(index,element){
             //console.log($(this).html());
             //console.log(element);
            sorted_array[index] = $(this).html();
            unsorted_object[this.id] = $(this).html();
        });
        //console.log('array before sort: '+td_array);
        if(order == 'asc'){
                sorted_array.sort();
                order = 'desc';
        }
        else{
            sorted_array.sort();
            sorted_array.reverse();
            order = 'asc';
        }
            
//        console.log('array after sort: '+sorted_array);
//        console.log(' unsorted object: ');
//        console.log(unsorted_object);
        for (var key in unsorted_object) {
            //console.log(key);
            sorted_id_array[i] = sorted_array.indexOf(unsorted_object[key]);
            i++;
        }
       // console.log('sorted_id_array');
        //console.log(sorted_id_array);

        //get all table rows and rewrite them in order by selected row
        $('tr').each(function(index,element){
            table_rows[index] = this.id
            //console.log(table_rows);
            //for every td get contens in row-object
            $('td.'+this.id).each(function(index,element){
                row_object[this.id] = $(this).html();
                console.log('row_object');
                console.log(row_object);
                //iterate through sorted array and print object propertie
                var print = $(this);
                $.each(sorted_id_array, function( index, value ) {
                    print.html(row_object[value]);
                    //console.log( index + ": " + value );
                  });
               
                //console.log(row_object);
            });
            var j = 0;
            $('td.'+this.id).each(function(index,element){
                $(this).html(row_object[sorted_id_array[j]]);
                j++;
                //console.log(row_object);
            });
        });
    });
</script>