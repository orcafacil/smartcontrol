<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PessoaDAO
 *
 * @author Oséias
 */
    class PessoasDAO{
        public static function logar(Pessoas $obj){
            try{
                $conexao = Conexao::Banco();
                $sql = $conexao->prepare("SELECT * FROM PESSOAS WHERE PESSOAS.pes_login = :pes_login  and PESSOAS.pes_senha = :pes_senha");
                $sql->bindValue(":pes_login", $obj->getPes_login());
                $sql->bindValue(":pes_senha", $obj->getPes_senha());
                $sql->execute();
            }
            catch(Exception $e){
                // $e->getMessage();
            }
            return $sql->fetch(PDO::FETCH_ASSOC);
        }
    }
?>