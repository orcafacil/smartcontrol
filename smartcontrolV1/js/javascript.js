const sleep = (milliseconds) => {
    return new Promise(resolve => setTimeout(resolve, milliseconds))
}
window.onload = function() {
    let loaderContainer = document.getElementById('loader_container');

    loaderContainer.style.visibility = 'hidden';
    loaderContainer.style.opacity = '0';
    if (!$('body').hasClass('accessibility-contrast')) {
        $('[name="theme-color"]').attr('content', '#1368a9')
    } else {
        $('[name="theme-color"]').attr('content', '#1d1f34')
    }
    $('body').removeAttr('style')
}

var d = new Date();

function vibrateClick() {
    try {
        navigator.vibrate(25);
    } catch (ex) {
        console.log("outer", ex.message);
    }
}

$('[data-widget="collapse"]').click(function() {
    vibrateClick()
    $(this).closest(".box.box-info").toggleClass('collapsed-box')
    $(this).find(".fa").toggleClass("fa-plus").toggleClass("fa-minus");
});

$('#accessibility-contrast').click(function() {
    vibrateClick()
    $('[name="theme-color"]').attr('content',
        $('[name="theme-color"]').attr('content') === '#1368a9' ? '#1d1f34' : '#1368a9')
    if ($(this).hasClass('active-nav-button')) {
        $(this).removeClass('active-nav-button')
    } else {
        $(this).addClass('active-nav-button')
    }

});

$(function() {
    $('[data-scroll="horizontal"]').mousewheel(function(event, delta) {

        this.scrollLeft -= (delta * 30);

        event.preventDefault();

    });
});

$(".js-range-slider").ionRangeSlider({
    grid: true,
    step: 1,
    values: [
        "0", "1", "2", "3", "4", "5", "6",
        "7", "8", "9", "10"
    ],
    postfix: " Dia(s)"
});

$('[data-toggle="tab"]').click(function() {
    $(this).parents('ul').find('li').removeClass('active')
    $(this).parent().addClass('active')
})

$(".btn-inventario").click(function() {
    $(this).parents('.flex-all-center').find('p').removeClass('title-arrow-bottom')
    $(this).parent().find('p').addClass('title-arrow-bottom')
    $("#container-content-inventory").find('.slider-nav').removeAttr('style')
    var id = $(this).attr('data-id')
    $(id).css("display", "block")
});

function upImgProd() {
    console.log('oi')
}
$("[data-click='user-task']").click(function() {
    $("[data-click='user-task']").each(function() {
        $(this).removeClass('active')
    })
    $(this).addClass('active')
    $("#user-name-task").html($(this).find('.direct-chat-name').html())
    $('#modulo-filtro').trigger('reset')
});

$('[data-id="#teste1"]').click(function() {
    $('#form_add_product').trigger("reset")
    $("#newImg").attr("src", " ")
    $("#no_foto").removeAttr('style')
    $('#form_in_product').trigger("reset")
    $('#form_out_product').trigger("reset")
});

$('[data-id="#teste2"]').click(function() {
    $('#form_find_product').trigger("reset")
    $('#form_in_product').trigger("reset")
    $('#form_out_product').trigger("reset")
});

$('[data-id="#teste3"]').click(function() {
    $('#form_find_product').trigger("reset")
    $('#form_add_product').trigger("reset")
    $("#newImg").attr("src", " ")
    $("#no_foto").removeAttr('style')
    $('#form_out_product').trigger("reset")
});

$('[data-id="#teste4"]').click(function() {
    $('#form_find_product').trigger("reset")
    $('#form_in_product').trigger("reset")
    $('#form_add_product').trigger("reset")
    $("#newImg").attr("src", " ")
    $("#no_foto").removeAttr('style')
});

function readURLIMG(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#newImg').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#fotoProd").change(function() {
    $("#no_foto").css('display', 'none')
    readURLIMG(this);
});

$(document).on('click', '.close-buttom', function() {
    vibrateClick()
    $('.window-detai-inventory').removeClass('active')
    $('.table').find('.fa-eye-slash').removeClass('fa-eye-slash').addClass('fa-eye')
})

$(document).on('click', '[name="fa-eye"]', function() {
    if (!$(this).parent().find('.window-detai-inventory').hasClass('active')) {
        $(this).parents('.table').find('.fa-eye-slash').removeClass('fa-eye-slash').addClass('fa-eye')
        $(this).parents('.table').find('.window-detai-inventory').removeClass('active')
        $(this).find('i').toggleClass('fa-eye fa-eye-slash')
        $(this).parent().find('.window-detai-inventory').addClass('active')
        eye = false
    } else {
        $(this).find('i').toggleClass('fa-eye fa-eye-slash')
        $(this).parent().find('.window-detai-inventory').removeClass('active')
    }

});
var eye = true;

$(document).click(function(e) {
    var target = $(e.target);
    if (eye == true) {
        if (!target.is(".window-detai-inventory") && target.closest(".window-detai-inventory").length === 0) {
            $('.window-detai-inventory').removeClass('active')
            $('.table').find('.fa-eye-slash').removeClass('fa-eye-slash').addClass('fa-eye')
        }
    } else {
        eye = true
        vibrateClick()
    }
});

$('.menu-item').click(function() {
    vibrateClick();
});

$(document).ready(function() {
    var urlInventory = new URL(window.location.href);
    var idInventory = urlInventory.searchParams.get("id")
    if (idInventory !== null) {
        $("#" + idInventory).parents('tr').find('[name="fa-eye"]').trigger("click");
        $("body, html").animate({
            scrollTop: $("#scroll-table").offset().top
        }, 'slow');
        $("#scroll-table").animate({
            scrollTop: $("#" + idInventory).offset().top
        }, 'slow');
    }

})

$(document).on('click', '[name="clickslide"]', function() {
    vibrateClick()
    $()
    $(this).parent().find('[name="slideUD"]').css({
        'height': $(this).parents('.draggable').outerHeight() + 'px',
        'width': $(this).parents('.draggable').outerWidth() + 'px'
    }).toggle("slide", { direction: "down" }, 500);
})

$(document).on('click', '[name="clickslideInside"]', function() {
    vibrateClick()
    $(this).parents('[name="slideUD"]').toggle("slide", { direction: "down" }, 500);
})

$(document).on('click', '#clickslideaviso', function() {
    vibrateClick()
    $(this).toggleClass('active-nav-button')
    $(".back-shadow").slideToggle()
    $('#slideUDaviso>div').css('height', ($(window).height() - 38) + 'px')
    $('.content-wrapper').toggleClass('overflow-hidden')
    $("#slideUDaviso").slideToggle()
})


$(document).ready(function() {
    try {
        var url = new URL(window.location.href);
        var bytes = url.searchParams.get("6dd08706")
        bytes = CryptoJS.enc.Hex.parse(bytes)
        var originalText = bytes.toString(CryptoJS.enc.Utf8);
        console.log(originalText)
        $('[data-url-get="6dd08706"]').html(originalText)
    } catch (ex) {

    }
})

$(document).on('click', '.current_next', function() {
    $(this).toggleClass('current_next current');
    $(this).siblings().toggleClass('current_next current');

    $('.tabs_item').toggleClass("toggle-slider");
});

$("#viewerDashboard").change(function() {
    vibrateClick()
    $(".mascara").addClass('show-up')
    $(".window").show()
    $(this).val("Spazio Mondrian")
})

function enddemo() {
    vibrateClick()
    $(".mascara").addClass('show-up')
    $(".window").show()
}

function backdemo() {
    vibrateClick()
    $(".mascara").removeClass('show-up')
    $(".window").hide()
}