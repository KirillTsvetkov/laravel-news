$("[name='js-select_city']").on("change", function (e) {
    let city_id = $(this).val();
    
    window.location.href = window.location.origin + '/city/' + city_id ;

});