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
class RetornaUltimaLeitura
{
    public function executar()
    {
        try {
            $_SESSION['ENERGIA'] = EnergiasDAO::retornaUltimaLeitura($_SESSION['id']);
            $new = array();
            $json = array();
            for ($index = 0; $index < count($_SESSION['ENERGIA']); $index++) {
                $new[] = [$_SESSION['ENERGIA'][$index]['len_datatime'],$_SESSION['ENERGIA'][$index]['len_leitura']];
            }
            $json["data"] = $new;
            $_SESSION['ENERGIA'] = json_encode($json,JSON_NUMERIC_CHECK);
        } catch (Exception $ex) {
        }
    }
}
