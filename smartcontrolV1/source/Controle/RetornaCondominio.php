<?php
include_once '../Conexao/Conexao.php';
include_once '../Controle/Rotas.php';

include_once '../Classes/pessoas.php';
include_once '../Classes/condominios.php';

include_once '../DAO/pessoasDAO.php';
include_once '../DAO/condominiosDAO.php';
include_once '../DAO/modulosDAO.php';

include_once '../Util/Valida.php';

session_start();
class RetornaCondominio
{
    public function executar()
    {
        try {
            $_SESSION['CONDOMINIOS'] = CondominiosDAO::especificoEoutros($_POST["id"], $_POST["name"]);
            $_SESSION['MODULOS'] = ModulosDAO::retornaModulos($_SESSION[sha1("dadosLogin")]['pes_id'], $_SESSION["CONDOMINIOS"][0]["con_id"]);
            $_SESSION['CLASSES'] = ModulosDAO::retornaCofigMod($_SESSION['MODULOS']['mod_id']);
        } catch (Exception $ex) {
        }
    }
}
RetornaCondominio::executar();
