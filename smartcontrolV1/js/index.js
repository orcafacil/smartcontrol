const sleep = (milliseconds) => {
    return new Promise(resolve => setTimeout(resolve, milliseconds))
}

$(function() {
    $("input").each(function() {
        if ($.trim($(this).val()) !== '') {
            if ($(this).attr('type') != 'checkbox') {
                $(this).parent().find("label").addClass("active");
                $('#access').removeAttr('disabled')
            }
        }
    })
})

$(document).on('focus', 'input', function() {
    $(this).parent().find('label').addClass('active');
});

$(document).on('blur', 'input', function() {
    if ($.trim($(this).val()) == '') {
        $(this).val('')
        $(this).removeAttr('style').parent().find("label").removeClass('active');
    } else {
        $(this).css('border-color', 'rgba(66, 91, 191, 0.5)')
    }
});

$('[name="login_demo_form"]').submit(function() {
    usuario = $("#email").val().substring(0, $("#email").val().indexOf("@"));
    dominio = $("#email").val().substring($("#email").val().indexOf("@") + 1, $("#email").val().length);

    if ((usuario.length >= 1) &&
        (dominio.length >= 3) &&
        (usuario.search("@") == -1) &&
        (dominio.search("@") == -1) &&
        (usuario.search(" ") == -1) &&
        (dominio.search(" ") == -1) &&
        (dominio.search(".") != -1) &&
        (dominio.indexOf(".") >= 1) &&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
        $('#access').addClass('loading').html('Acessando')
    } else {
        $("#email").val("");
        return false;
    }

})

// VISIBILIDADE DA SENHA
$('[data-widget="view"]').mousedown(function() {
    document.getElementById("pass").setAttribute("type", "text");
    $("#eye").toggleClass('fa-eye fa-eye-slash')
});

$('[data-widget="view"]').mouseup(function() {
    document.getElementById("pass").setAttribute("type", "password");
    $("#eye").toggleClass('fa-eye fa-eye-slash')
});

$('[data-widget="view"]').bind('touchstart', function() {
    try {
        window.navigator.vibrate(25);
    } catch (ex) {
        console.log("outer", ex.message);
    }
    document.getElementById("pass").setAttribute("type", "text");
    $("#eye").toggleClass('fa-eye fa-eye-slash')
}).bind('touchend', function() {
    document.getElementById("pass").setAttribute("type", "password");
    $("#eye").toggleClass('fa-eye fa-eye-slash')
});