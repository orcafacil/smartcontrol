<?php
include_once './source/Conexao/Conexao.php';
include_once './source/Controle/Rotas.php';

include_once './source/Classes/visitantes.php';
include_once './source/Classes/visitas.php';

include_once './source/DAO/visitantesDAO.php';
include_once './source/DAO/visitasDAO.php';

include_once './source/Util/Valida.php';


session_start();
if(isset($_POST[sha1("opcaoClasse")])){
    $_SESSION[sha1("acaoClasse")] = $_POST[sha1("opcaoClasse")];
    Rotas::Encaminhar();
}