try {
    //Define a função sleep
    const sleep = (milliseconds) => {
        return new Promise(resolve => setTimeout(resolve, milliseconds))
    }
} catch (ex) {
    console.log("erro: ", ex.message)
}

function notificar(msg) {

    $(".td-boot-message").html(msg);
    $("#p-boot-message").html(msg);

    $('.container-message').addClass('active');
    sleep(100).then(() => {
        $('.div-boot').addClass('active');
        $('.div-message-balloon-mobile').addClass('active');
    });
    sleep(1000).then(() => {
        $('.div-message-balloon').addClass('active');
    });
    sleep(9000).then(() => {
        $('.div-message-balloon').removeClass('active');
        $('.div-message-balloon-mobile').removeClass('active');
    });
    sleep(10000).then(() => {
        $('.div-boot').removeClass('active');
    });
    sleep(10500).then(() => {
        $('.container-message').removeClass('active');
    });
}