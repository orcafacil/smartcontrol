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
class RetornaUltimasTarefas {
    public function executar() {
        try {
            $_SESSION['TAREFAS'] = TarefasDAO::retornaUltimasTarefas($_SESSION["CONDOMINIOS"][0]["con_id"]);
        } catch (Exception $ex) {
            
        }
    }
}