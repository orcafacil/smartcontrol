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
class RetornaTodasEnergias
{
    public function executar()
    {
        try {
            $energia = EnergiasDAO::retornaEnergias($_SESSION["CONDOMINIOS"][0]["con_id"]);
            $leitura = EnergiasDAO::retornaLeituras();
            $new = array();
            $json = array();
            for ($index = 0; $index < count($energia); $index++) {
                    $json[$index]["name"] = $energia[$index]['pen_nome'];
                    for($index2=0;$index2<count($leitura);$index2++){
                        if($energia[$index]['mde_id']==$leitura[$index2]['len_idModuloEnergia']){
                            $new[] = $leitura[$index2]['len_leitura'];
                        }
                    }
                    $json[$index]["data"] = $new;
                    $new = array();
            }
            $_SESSION['ENERGIAS'] = json_encode($json,JSON_NUMERIC_CHECK);
            $_SESSION['ENERGIAS_OPCAO'] = $energia;
        } catch (Exception $ex) {
        }
    }
}