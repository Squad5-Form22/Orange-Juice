$(function(){
    $('input[type="checkbox"]').on('click', function(e) {
        let id = e.target.id;
        $.ajax({
            method: "GET",
            url: '/content/'+id,
        });
    });
})