/* Programa de foramção - Novembro 2022 | Marcus Paulo Mazza */

$(function(){

    /*-- Navbar fixa -- */
    $(document).on('scroll', function() {
        var d = $(this).scrollTop();
        if( d > 90){
            $('.navbar-wrapper').addClass('navbar_fixed')
        } else {
            $('.navbar-wrapper').removeClass('navbar_fixed');
        }
    });
    
    /*-- navbar mobile --*/
    var tela = $(window).width();

    $('.mobile-trigger i').on('click', function(e) {
        $('.mobile-menu-wrapper').css('transform', 'translate(0%)');
        if(e.target.className != 'las la-bars'){
            $('.mobile-menu-wrapper').css('transform', 'translate(-100%)');
        }
    });

    $(window).resize(function() {
        $('.mobile-menu-wrapper').css('transform', 'translate(-100%)');
    })
    
    /*-- Validação de entrada de dados --*/
    $('form').on('submit', function(e) {
        var idForm = this.id;
        var parametro = '#' + idForm + ' input, #' + idForm + ' textarea';
        $(parametro).each(function() {
            var campo = $(this).val();  
            if(campo == "") {
                var nomeCampo = $(this).data('name');
                $('.modal-title').html('ATENÇÃO')
                $('.campo').html(nomeCampo).css('text-transform', 'capitalize');
                $('#modal_validation').modal('toggle');
                e.preventDefault();
                return false;
            }
        });
    });
    
    
    /*-- Máscara de input telefone--*/
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
      
    $('.telefone').mask(SPMaskBehavior, spOptions);


    /*-- Mostra a senha --*/
    $('input[type="password"]').on('keypress', function() {
       $(this).next().css('display', 'block');
    });
    $('input[type="password"]').on('blur', function() {
        if($(this).val() == "" ){
            $(this).next().css('display', 'none');
            $(this).next().attr('class','fas fa-eye');
            $(this).attr('type','password');
        }
    });
    $('input[type="password"]').next().on('click', function(e) {
        if(e.target.className == 'fas fa-eye') {
            $(this).attr('class','fas fa-eye-slash');
            $(this).prev().attr('type','text');
        } else {
            $(this).attr('class','fas fa-eye');
            $(this).prev().attr('type','password');
        }
    });

    /*-- Aciona o formulário de log-out --*/
    $('.log-out').on('click', function(e){
        e.preventDefault();
        $('#logout-form').submit();
    });

    /*-- Altera a seta do accordions das trilhas --*/
    $('.card-header button').on('click', function() {
        if( $(this).children().attr('class') == 'fas fa-chevron-right') {
            $(this).children().attr('class','fas fa-chevron-up');
        } else {
            $(this).children().attr('class','fas fa-chevron-right');
        }
    });


});