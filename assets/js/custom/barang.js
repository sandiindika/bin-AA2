$(document).ready(function(){  
    var users = {};
    var userLabels = [];    
    
    $( ".search-input" ).typeahead({
        source: function ( query, process ) {
            $.ajax({
                url:'barang_ajax.php',
                dataType:'JSON',
                data:{
                    q:query
                },
                error:function(er){
                    console.log(er.msg);
                },
                success:function(dt){
                    //alert(dt);
                    return process(dt);     
                }
            })            
        }
        ,updater: function (item) {            
            //this.$element[0].value = item;
            //this.$element[0].form.submit();
            return item;
        }
        /*
        source: function ( query, process ) {
    
            //the "process" argument is a callback, expecting an array of values (strings) to display
    
            //get the data to populate the typeahead (plus some) 
            //from your api, wherever that may be
            $.get( 'ajax_anggota.php', { q: query }, function ( data ) {
    
                /reset these containers
                users = {};
                userLabels = [];
    
                //for each item returned, if the display name is already included 
                //(e.g. multiple "John Smith" records) then add a unique value to the end
                //so that the user can tell them apart. Using underscore.js for a functional approach.  
                $.each( data, function( item, ix, list ){
                    if ( _.contains( users, item.label ) ){
                        item.label = item.label + ' #' + item.value;
                    }
                    console.log(item.label);
                    //add the label to the display array
                    userLabels.push( item.label );
    
                    //also store a mapping to get from label back to ID
                    users[ item.label ] = item.value;
                });
    
                //return the display array
                process( data );
            });
        }*/
        /*, updater: function (item) {
            //save the id value into the hidden field   
            $( "#userId" ).val( users[ item ] );
    
            //return the string you want to go into the textbox (e.g. name)
            return item;
        }*/
    }); 
})
