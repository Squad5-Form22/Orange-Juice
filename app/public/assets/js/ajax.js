$(function(){
    $('input[type="checkbox"]').on('click', function(e) {
        let id = e.target.id;
        $.ajax({
            method: "GET",
            url: '/content/'+id,
        });
    });
    $('.card-title a').on('click', function() {
        
        let id = $(this).prev().attr('id');
        let status = $(this).prev().val();

       if(status != '1'){
            $.ajax({
                method: "GET",
                url: '/content/'+id,
            });
            location.reload();
        }
    });
})