<?php
@session_start();
if (isset($_SESSION[sha1("dadosLogin")]) == true || isset($_SESSION[sha1("opcaoClasse")]) ==  true) {
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Language type -->
    <meta charset="UTF-8">
    <!-- Description -->
    <meta name="description" content="Controle e Monitoramento Inteligente. Faça um Teste Grátis! Entre com seu nome e endereço de email, Login do painel">
    <!-- Keywords for search -->
    <meta name="keywords" content="IOT, IoT, Monitoramento, Condomínios">
    <!-- Author of the page -->
    <meta name="author" content="Oséias Domingos Gomes">
    <!-- Responsive Support -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- IExplorer Support -->
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Chome Mobile -->
    <meta data-widget="color" name="theme-color" content="#ffffff">
    <!-- Apple Moblile -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta data-widget="color" name="apple-mobile-web-app-status-bar-style" content="#ffffff">
    <!-- Windows Phone -->
    <meta data-widget="color" name="msapplication-navbutton-color" content="#ffffff">
    <!-- Index -->
    <meta name="robots" content="index, follow">
    <!-- Page title -->
    <title>Smart Control Pro - Inteligência em Controles - Demonstração</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon image_src" href="img/2ba3a0d7878316de5aaa6eed7faed9e4ba4e9f09.png">
    <link rel="shortcut icon" href="img/2ba3a0d7878316de5aaa6eed7faed9e4ba4e9f09.png" type="image/x-icon">
    <link href="img/2ba3a0d7878316de5aaa6eed7faed9e4ba4e9f09.png" rel="apple-touch-icon">
    <link href="img/2ba3a0d7878316de5aaa6eed7faed9e4ba4e9f09.png" rel="apple-touch-icon" sizes="76x76">
    <link href="img/2ba3a0d7878316de5aaa6eed7faed9e4ba4e9f09.png" rel="apple-touch-icon" sizes="120x120">
    <link href="img/2ba3a0d7878316de5aaa6eed7faed9e4ba4e9f09.png" rel="apple-touch-icon" sizes="152x152">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/d003247249.js"></script>
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="css/index.css" rel="stylesheet">
</head>

<body onselectstart="return false">
    <div id="msgGET" class="p-relative text-info text-center fix-bottom p-3 bg-light rounded-pill shadow-lg mt-5 ml-5 mr-5 font-weight-light" style="display: none"></div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 bg-white m-md-0 m-auto overflow-auto cornerstone">
        <div class="py-3 m-auto">
            <div class="mx-sm-5 mx-3 px-xl-4">
                <img draggable="false" src="img/875f616bef87b7b48be47ae10de1d3cf4281eff0.png" class="w-100">
            </div>
            <div>
                <h5 class="text-center m-0 mb-2">Controle e Monitoramento Inteligente</h5>
                <h6 class="text-center">Realize o login</h6>
            </div>
        </div>
        <div class="mx-xl-4 py-3">
            <div class="w-100 s-plr-5 s-mtb-5 h-90">
                <div class="">
                    <h2 class="text-center mb-5"><small class="font-weight-bold">Login do Painel</small></h2>

                    <form name="login_demo_form" class="form-action-login" action="Rotas.php" method="post">
                        <div class="my-sm-5 mt-3 mb-5">
                            <input id="nome" tabindex="1" required type="text" class="style-login" name="<?php echo sha1('nome') ?>">
                            <label for="nome" class="status">Digite seu nome</label>
                        </div>
                        <div class="mb-3">
                            <input id="email" tabindex="2" required type="email" class="style-login" name="<?php echo sha1("email") ?>">
                            <label for="email" class="status">Entre com seu email</label>
                        </div>
                        <div class="mb-3">
                            <label class="container-input">
                                <input id="termos" required tabindex="3" type="checkbox"> Eu aceito os <a class="target_blank" href="#" target="_blank">Termos e Politicas de Privacidade</a> do site.
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="text-center">
                            <button tabindex="4" id="access" type="submit" style="width: 145px !important;" name="<?php echo sha1("opcaoClasse") ?>" value="Login" class="button text-white no-focus">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="w-70 h-100 bg-img p-md-abolute w-lg-100">
    </div> -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>
    <script src="js/index.js" type="text/javascript"></script>
    <script src="js/notificacoes.js" type="text/javascript"></script>


    <script>
        <?php if (isset($_GET[sha1("out")])) { ?>
            $("#msgGET").html('<?php echo base64_decode($_GET[sha1("out")]) ?>').show("fade", 500, callback);
        <?php } ?>
        <?php if (isset($_GET[sha1("msg")])) { ?>
            $("#msgGET").html('<?php echo base64_decode($_GET[sha1("msg")]) ?>').show("fade", 500, callback);
        <?php } ?>

        function callback() {
            setTimeout(function() {
                $("#msgGET").removeAttr("style").fadeOut();
            }, 3000);
        };
    </script>
</body>

</html>