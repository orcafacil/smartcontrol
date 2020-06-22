<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Oséias
 */
class Conexao
{
    public static function Banco()
    {
        try {
            // $pdo = new PDO("mysql:host=localhost;dbname=xnora386_smartcontrol.pro", "xnora386_smart", "smart2020control.pro", array(
                $pdo = new PDO("mysql:host=orcafacil.com.br:3306;dbname=xnora386_smartcontrol.pro", "xnora386_smart", "smart2020control.pro", array(
                //$pdo = new PDO("mysql:host=localhost;dbname=smartcontrol_pro", "root", "", array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'set lc_time_names="pt_BR"'
            ));
            //$pdo = new PDO("mysql:host=localhost;dbname=seo", "phpmyadmin", "1313");
            $pdo->query('SET NAMES utf8');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $pdo;
    }
}
