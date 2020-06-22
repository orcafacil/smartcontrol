var side, eventt, x, y;

interact('.draggable_main')
    .draggable({
        // enable inertial throwing
        inertia: true,
        // keep the element within the area of it's parent
        modifiers: [
            interact.modifiers.restrictRect({
                restriction: "parent",
                endOnly: true
            })
        ],
        // enable autoScroll
        autoScroll: false,

        onstart: function() {
            try {
                navigator.vibrate(25);
            } catch (ex) {
                console.log("outer", ex.message);
            }
        },
        // call this function on every dragmove event
        onmove: dragMoveListener,
        // call this function on every dragend event
        onend: function() {
            if ($(".draggable_main").hasClass("left")) {
                $(".draggable_main").removeClass("left").addClass(side);
                $('.div-message-balloon-mobile').removeClass("left").addClass(side);
            } else {
                $(".draggable_main").addClass(side);
                $('.div-message-balloon-mobile').addClass(side);
            }

            eventt.style.webkitTransform =
                eventt.style.transform =
                'translate( 0, ' + y + 'px)'

            // update the posiion attributes
            eventt.setAttribute('data-x', 0)
            eventt.setAttribute('data-y', y)
        }
    })

function dragMoveListener(event) {
    var target = event.target
    eventt = target;
    x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
    y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy

    // translate the element
    target.style.webkitTransform =
        target.style.transform =
        'translate(' + x + 'px, ' + y + 'px)'

    // update the posiion attributes
    target.setAttribute('data-x', x)
    target.setAttribute('data-y', y)
    if (x > 165) {
        side = "";
    }
    if (x < -165) {
        side = "left";
    }

}

// this is used later in the resizing and gesture demos
window.dragMoveListener = dragMoveListener

function widget_fab() {
    try {
        navigator.vibrate(25);
    } catch (ex) {
        console.log("outer", ex.message);
    }
}

$(document).ready(function() {
    if ($("#menu-open").prop("checked") == true) {
        $("#container_drag").css({
            'transform': 'translate(0px)',
            'margin': 'auto',
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'bottom': '0',
            'right': '0',
            'width': 'fit',
            'height': 'fit',
            'font-size': '24px',
            'z-index': '9001',
            'touch-action': 'none'
        }).removeClass("draggable_main");
        $('.fab-mascara').addClass('active')
    }
});

interact('.draggable_main').on('tap', function(event) {
    widget_fab()
    $("#menu-open").trigger('click')
    y = $("#container_drag").attr("data-y");
    if ($("#menu-open").prop("checked") == true) {
        $("#container_drag").css({
            'transform': 'translate(0px)',
            'margin': 'auto',
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'bottom': '0',
            'right': '0',
            'width': 'fit',
            'height': 'fit',
            'font-size': '24px',
            'z-index': '9001',
            'touch-action': 'none'
        }).removeClass("draggable_main");
        $('.fab-mascara').addClass('active')
    }
})

$(document).on('click', '[data-widget="close-option"]', function() {
    widget_fab()
    $("#menu-open").trigger('click')
    $("#container_drag").removeAttr("style");
    $("#container_drag").css({ 'transform': 'translate(0, ' + y + 'px)' });
    $("#container_drag").addClass("draggable_main");
    $('.fab-mascara').removeClass('active')
});

$(document).on('click', '[data-widget="sub-list-one"]', function() {
    widget_fab()
    $(this).addClass('menu-item-no-child').removeAttr('data-widget')
    $('.menu-item').each(function() {
        if (!$(this).hasClass('menu-item-no-child')) {
            $(this).css('opacity', '0')
        }
    });
});

$(document).on('click', '[data-widget="back-list"]', function() {
    widget_fab()
    $(this).parents('a').removeClass("menu-item-no-child").attr('data-widget', 'sub-list-one').removeAttr('style')
    $('.menu-item').each(function() {
        if (!$(this).hasClass('menu-item-no-child')) {
            $(this).removeAttr('style')
        }
    });
});

$(document).on('click', '[data-widget="sub-list-back"]', function() {
    widget_fab()
    $(this).parents('a').removeClass("menu-item-no-child").attr('data-widget', 'sub-list-one').removeAttr('style')
    $('.menu-item').each(function() {
        if (!$(this).hasClass('menu-item-no-child')) {
            $(this).removeAttr('style')
        }
    });
    $("#menu-open").trigger('click')
    $("#container_drag").removeAttr("style");
    $("#container_drag").css({ 'transform': 'translate(0, ' + y + 'px)' });
    $("#container_drag").addClass("draggable_main");
    $('.fab-mascara').removeClass('active')

});

// Tarjas
var put = 0;
var eventt;
try {
    interact('.draggable')
        .draggable({
            // enable inertial throwing
            inertia: false,
            // keep the element within the area of it's parent
            modifiers: [
                interact.modifiers.snap({
                    targets: [
                        interact.createSnapGrid({
                            x: 3
                        })
                    ],
                    range: Infinity,
                    relativePoints: [{
                        x: 0
                    }]
                }),
                interact.modifiers.restrictRect({
                    restriction: "parent",
                    elementRect: {
                        top: 0,
                        left: 0,
                        bottom: 1,
                        right: 1
                    },
                    endOnly: true
                })
            ],
            // enable autoScroll
            autoScroll: false,

            // call this function on every dragmove event
            onmove: dragMoveListener,
            // call this function on every dragend event
            onend: function(event) {
                putvalor(eventt);
            }
        })

    function dragMoveListener(event) {
        var target = event.target
        eventt = event.target
            // keep the dragged position in the data-x/data-y attributes
        var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx

        // translate the element
        target.style.webkitTransform =
            target.style.transform =
            'translate(' + x + 'px)'

        $(target).parent().find(".right").removeClass("button-show");
        $(target).parent().find(".left").removeClass("button-show");
        // update the posiion attributes
        target.setAttribute('data-x', x)
        if (x > 100) {
            put = 100;
        }
        if (x < -100) {
            put = -100;
        }
    }

    // this is used later in the resizing and gesture demos
    window.dragMoveListener = dragMoveListener


    function putvalor(event) {
        if (put >= 100) {
            event.style.webkitTransform =
                event.style.transform =
                'translate( 80px)';
            $(event).parent().find(".left").css('height', $(event).outerHeight() + 'px').addClass("button-show");
            $(event).parent().find(".right").removeClass("button-show");
            vibrateClick()
        }
        if (put <= -100) {
            event.style.webkitTransform =
                event.style.transform =
                'translate( -80px)';
            $(event).parent().find(".right").css('height', $(event).outerHeight() + 'px').addClass("button-show");
            $(event).parent().find(".left").removeClass("button-show");
            vibrateClick()
        }
        if (put == 0) {
            event.style.webkitTransform =
                event.style.transform =
                'translate(0px)';
            $(event).parent().find(".right").removeClass("button-show");
            $(event).parent().find(".left").removeClass("button-show");
        }
        put = 0;
    }
} catch (ex) {
    console.log("outer", ex.message);
}

try {
    interact('.message_draggable')
        .draggable({
            // enable inertial throwing
            inertia: false,
            // keep the element within the area of it's parent
            modifiers: [
                interact.modifiers.snap({
                    targets: [
                        interact.createSnapGrid({
                            x: 3
                        })
                    ],
                    range: Infinity,
                    relativePoints: [{
                        x: 0
                    }]
                }),
                interact.modifiers.restrictRect({
                    restriction: "parent",
                    elementRect: {
                        top: 0,
                        left: 0,
                        bottom: 1,
                        right: 1
                    },
                    endOnly: true
                })
            ],
            // enable autoScroll
            autoScroll: false,

            // call this function on every dragmove event
            onmove: dragMoveListener,
            // call this function on every dragend event
            onend: function(event) {
                putvalor(eventt);
            }
        })

    function dragMoveListener(event) {
        var target = event.target
        eventt = event.target
            // keep the dragged position in the data-x/data-y attributes
        var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx

        // translate the element
        target.style.webkitTransform =
            target.style.transform =
            'translate(' + x + 'px)'

        $(target).parent().find(".right").removeClass("button-show");
        $(target).parent().find(".left").removeClass("button-show");
        // update the posiion attributes
        target.setAttribute('data-x', x)
        if (x > 100) {
            put = 100;
        }
        if (x < -100) {
            put = -100;
        }
    }

    // this is used later in the resizing and gesture demos
    window.dragMoveListener = dragMoveListener


    function putvalor(event) {
        if (put >= 100) {
            event.style.webkitTransform =
                event.style.transform =
                'translate( 80px)';
            $(event).parent().find(".left").css('height', $(event).outerHeight() + 'px').addClass("button-show");
            $(event).parent().find(".right").removeClass("button-show");
            vibrateClick()
        }
        if (put <= -100) {
            event.style.webkitTransform =
                event.style.transform =
                'translate( -80px)';
            $(event).parent().find(".right").css('height', $(event).outerHeight() + 'px').addClass("button-show");
            $(event).parent().find(".left").removeClass("button-show");
            vibrateClick()
        }
        if (put == 0) {
            event.style.webkitTransform =
                event.style.transform =
                'translate(0px)';
            $(event).parent().find(".right").removeClass("button-show");
            $(event).parent().find(".left").removeClass("button-show");
        }
        put = 0;
    }
} catch (ex) {
    console.log("outer", ex.message);
}