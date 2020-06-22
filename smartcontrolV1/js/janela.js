$(document).ready(function() {

    $("[rel=modal]").click(function(ev) {

        ev.preventDefault();

        var id = $(this).attr("href");

        var alturaTela = $(document).height();
        var larguraTela = $(window).width();

        $('#mascara').css({
            'width': larguraTela,
            'height': alturaTela
        });
        $('#mascara').show();

        var left = ($(window).width() / 2) - ($(id).width() / 2);
        var top = ($(window).height() / 2) - ($(id).height() / 2);

        $(id).addClass('show-up')
        $(id).show();
    });

    $('#mascara').click(function() {

        $(this).fadeOut("slow");
        $('.window').fadeOut("slow");
    });

    $('.fechar').click(function(ev) {

        ev.preventDefault();

        $('#mascara').fadeOut(50, "linear").removeClass('show-up');
        $('.window').fadeOut(50, "linear");

    });

    $("#okAlertButtom").click(function() {
        $('#trava').fadeOut(50, "linear");
        $('.window').fadeOut(50, "linear");
        var sound = document.getElementById("alertQueda");
        sound.pause();
    });

    $('[data-event="block-event"]').contextmenu(function() {
        return false
    });

});

function alert_queda_energia() {

    var sound = document.getElementById("alertQueda");
    sound.play();

    var id = '#alertaQueda';

    var alturaTela = $(document).height();
    var larguraTela = $(window).width();

    $('#trava').css({
        'width': larguraTela,
        'height': alturaTela
    });
    $('#trava').show()

    var left = ($(window).width() / 2) - ($(id).width() / 2);
    var top = ($(window).height() / 2) - ($(id).height() / 2);

    var week = ['Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado', 'Domingo']
    var month = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']
    var getDate = new Date();

    var fullDate = getDate.getDate() + ' ' + month[getDate.getMonth()] + ' ' + getDate.getFullYear() + ' ' + week[getDate.getDay()] + ' as ' + getDate.getHours() + ':' + getDate.getMinutes()
    $('#horario_do_disparo').html(fullDate)
    $(id).css({
        'left': left,
        'top': top
    });
    $(id).show();
};