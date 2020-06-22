<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Oséias
 */
class Login
{
    public function executar()
    {
        try {
            $return = VisitantesDAO::retornaEmail($_POST[sha1("email")]);

            if ($return != null) {
                if ($return['email'] == true) {
                    $soma = VisitasDAO::somaVisita($return['visita']);
                    VisitasDAO::alteraVisita($soma[0], $return['visita']);
                    $_SESSION[sha1("dadosLogin")] = $_POST[sha1("email")];
                    header("Location: ./painel.php");
                }
            } else {
                VisitasDAO::primeiraVisita();
                $maxid = VisitasDAO::maxIdVisita();
                $visitante = new Visitantes();
                $visitante->setVis_email(Valida::login($_POST[sha1("email")]));
                $visitante->setVis_nome($_POST[sha1("nome")]);
                $visitante->setVis_visita($maxid[0]);
                VisitantesDAO::insert($visitante);
                $_SESSION[sha1("dadosLogin")] = $_POST[sha1("email")];
                header("Location: ./painel.php");
            }
        } catch (Exception $ex) {
        }
    }
}
