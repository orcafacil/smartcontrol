<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RetornaGalpoes
 *
 * @author luiz
 */
class RetornaPainel {
    public function executar() {
        try {
            $_SESSION['PAINEIS'] = ModulosDAO::retornaPainel($_SESSION['MODULOS']['mod_idPlano']);
        } catch (Exception $ex) {
            
        }
    }
}