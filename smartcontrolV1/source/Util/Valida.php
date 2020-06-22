<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Valida
 *
 * @author Oséias
 */
class Valida
{
    public static function login($string)
    {
        $string = strtolower($string);
        $string = strip_tags($string);
        $string = htmlspecialchars($string);
        $string = trim($string);
        $string = stripslashes($string);
        $string = addslashes($string);
        $string = str_replace("<script", " ", $string);
        $string = str_replace("</script", " ", $string);
        $string = str_replace("delete", " ", $string);
        $string = str_replace("drop", " ", $string);
        $string = str_replace("table", " ", $string);
        $string = str_replace("database", " ", $string);
        $string = str_replace("truncate", " ", $string);
        return $string;
    }
}
