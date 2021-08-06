function add(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    id = e.target.id; 
    console.log(id);   
    $.post('/addFavorite', { id: id})
    .done(function( data ) {
        console.log(data);
    });
 }


 function remove(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    id = e.target.id; 
    console.log(id);   
    $.post('/removeFavorite', { id: id})
    .done(function( data ) {
        console.log(data);
    });
 }