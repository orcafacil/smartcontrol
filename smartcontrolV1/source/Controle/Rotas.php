<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rotas
 *
 * @author Oséias
 */
class Rotas
{
    public static function Encaminhar()
    {
        try {
            $class = $_SESSION[sha1("acaoClasse")];
            include $_SESSION[sha1("acaoClasse")] . ".php";
            $acao = new $class;
            $acao->executar();
            unset($_SESSION[sha1("acaoClasse")]);
        } catch (Exception $e) {
            $_SESSION['erro'] = $e;
            header("Location:index.php");
        }
    }
}
