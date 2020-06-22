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
class RetornaInventario
{
    public function executar()
    {
        try {
            $_SESSION['INVENTARIO'] = ProdutosDAO::produtosQuantidades($_SESSION["CONDOMINIOS"][0]["con_id"]);
            $array = MovimentacaoDAO::ultimasMovimentacoes($_SESSION["CONDOMINIOS"][0]["con_id"]);
            $new = array();
            for ($index = 0; $index < count($_SESSION['INVENTARIO']); $index++) {
                for($index2=0 ;$index2<count($array);$index2++){
                    if($_SESSION['INVENTARIO'][$index]['pro_id']==$array[$index2]['mov_idMaterial']){
                        $new[$index2] = $array[$index2]['mov_quatidade'];
                    }
                } 
                array_push($_SESSION['INVENTARIO'][$index],$new);
                $new = array();
            }
        } catch (Exception $ex) {
        }
    }
}
