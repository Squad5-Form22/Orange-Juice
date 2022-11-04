/* Programa de foramção - Novembro 2022 */

$(function(){


    $('form').on('submit', function(e) {
        var idForm = this.id;
        var parametro = '#' + idForm + ' input, #' + idForm + ' textarea';
        $(parametro).each(function() {
            var campo = $(this).val();  
            if(campo == "") {
                var nomeCampo = $(this).data('name');
                $('.modal-title').html('ATENÇÃO!')
                $('.campo').html(nomeCampo).css('text-transform', 'capitalize');
                $('#modal_validation').modal('toggle');
                e.preventDefault();
                return false;
            }
        });
    });
    

});