    $('#delete_comparison_items').click(function(){
        delete window.sessionStorage.comparison_items;
        delete window.sessionStorage.num_of_comparison_items;
        $('#comparison_div').css('display','none');
        $('td.comparison').html( compare_string );
    });
    
    $('#compare').click(function(){
        var comparison_string = '';
        if(typeof window.sessionStorage.comparison_items != 'undefined'){
            var comparison_object = JSON.parse(window.sessionStorage["comparison_items"]);
            for (var index in comparison_object) {
                if (comparison_object.hasOwnProperty(index)) {
                    comparison_string += comparison_object[index]+',';
                }
            }
            comparison_string = comparison_string.substring(0, comparison_string.length - 1);
        }
        document.location = "/processors/comparison/"+comparison_string;
    });
    
    $('#main_content').on('click','#compare_all',function(){
        $(this).attr("id",'remove_all');
        $(this).html(remove_all);
        if(typeof window.sessionStorage.comparison_items != 'undefined'){
            var comparison_items = JSON.parse(window.sessionStorage["comparison_items"]);
        }
        else{
            var comparison_items = {};
        }
        
        if(typeof window.sessionStorage.num_of_comparison_items == 'undefined'){
            window.sessionStorage.num_of_comparison_items = 0
        }
        $('td.comparison').each(function(){
            if(!(this.id in comparison_items)){
                window.sessionStorage.num_of_comparison_items++;
                comparison_items[this.id] = this.id;
                $(this).html( remove_string );
                $(this).data('comparison','remove');
            }
        });
        
        window.sessionStorage.comparison_items = JSON.stringify(comparison_items);
        $('#comparison_sum').html(window.sessionStorage.num_of_comparison_items);
        $('#comparison_div').css('display','block');
    });
    
    $('#main_content').on('click','#remove_all',function(){
        $(this).html(add_all);
        $(this).attr("id",'compare_all');
        if(typeof window.sessionStorage.comparison_items != 'undefined'){
            var comparison_items = JSON.parse(window.sessionStorage["comparison_items"]);
        }
        else{
            var comparison_items = {};
        }
        $('td.comparison').each(function(){
            if((this.id in comparison_items)){
                window.sessionStorage.num_of_comparison_items--;
                delete comparison_items[this.id];
                $(this).html( compare_string );
                $(this).data('comparison','add');
            }
        });
        window.sessionStorage.comparison_items = JSON.stringify(comparison_items);
        if(window.sessionStorage.num_of_comparison_items > 0){
            $('#comparison_sum').html(window.sessionStorage.num_of_comparison_items);
        }
        else{
            $('#comparison_div').css('display','none');
        }
    });
    
    
    function compare(action,id) {
        if( action !== 'remove'){
            if(typeof window.sessionStorage.comparison_items != 'undefined'){
                var comparison_items = JSON.parse(window.sessionStorage["comparison_items"]);
                comparison_items[id] = id;
            }
            else{
                var comparison_items = {};
                comparison_items[id] = id;
            }
            
            if(typeof window.sessionStorage.num_of_comparison_items == 'undefined'){
                window.sessionStorage.num_of_comparison_items = 0
            }
            
            window.sessionStorage.comparison_items = JSON.stringify(comparison_items);
            window.sessionStorage.num_of_comparison_items++;
            
            $('#comparison_sum').html(window.sessionStorage.num_of_comparison_items);
            $('#comparison_div').css('display','block');
            return 'remove';
        }
        else{
            var comparison_items = JSON.parse(window.sessionStorage.comparison_items);
            delete comparison_items[id];
            window.sessionStorage.comparison_items = JSON.stringify(comparison_items);
            window.sessionStorage.num_of_comparison_items--;
            $('#comparison_sum').html(window.sessionStorage.num_of_comparison_items);
            if(window.sessionStorage.num_of_comparison_items == 0){
                $('#comparison_div').css('display','none');
            }
            return ('add');
        }
    }