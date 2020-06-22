<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author Oséias
 */
    class Pessoas{

        private $pes_nome = null;
        private $pes_nome_meio = null;
        private $pes_ultimo_nome = null;
        private $pes_email = null;
        private $pes_login = null;
        private $pes_senha = null;
        private $pes_telefone = null;
        private $pes_celular = null;
        private $pes_foto = null;
        private $pes_logradouro = null;
        private $pes_cep = null;
        private $pes_numero = null;
        private $pes_complemento = null;
        private $pes_bairro = null;
        private $pes_categoria = null;
        private $pes_dt_nascimento = null;

        /* GET */

        public function getPes_nome() {
            return $this->pes_nome;
        }

        public function getPes_nome_meio() {
            return $this->pes_nome_meio;
        }
        
        public function getPes_ultimo_nome(){
            return $this->pes_ultimo_nome;
        }

        public function getPes_email(){
            return $this->pes_email;
        }

        public function getPes_login(){
            return $this->pes_login;
        }

        public function getPes_senha(){
            return $this->pes_senha;
        }

        public function getPes_telefone(){
            return $this->pes_telefone;
        }

        public function getPes_celular(){
            return $this->pes_celular;
        }

        public function getPes_foto(){
            return $this->pes_foto;
        }

        public function getPes_logradouro(){
            return $this->pes_logradouro;
        }

        public function getPes_cep(){
            return $this->pes_cep;
        }

        public function getPes_numero(){
            return $this->pes_numero;
        }

        public function getPes_complemento(){
            return $this->pes_complemento;
        }

        public function getPes_bairro(){
            return $this->pes_bairro;
        }

        public function getPes_categoria(){
            return $this->pes_categoria;
        }

        public function getPes_dt_nascimento(){
            return $this->pes_dt_nascimento;
        }

        /* SET */

        public function setPes_nome($pes_nome){
            $this->pes_nome = $pes_nome;
        }

        public function setPes_nome_meio($pes_nome_meio){
            $this->pes_nome_meio = $pes_nome_meio;
        }

        public function setPes_ultimo_nome($pes_ultimo_nome){
            $this->pes_ultimo_nome = $pes_ultimo_nome;
        }

        public function setPes_email($pes_email){
            $this->pes_email = $pes_email;
        }

        public function setPes_login($pes_login){
            $this->pes_login = $pes_login;
        }

        public function setPes_senha($pes_senha){
            $this->pes_senha = $pes_senha;
        }
        
        public function setPes_telefone($pes_telefone){
            $this->pes_telefone = $pes_telefone;
        }

        public function setPes_celular($pes_celular){
            $this->pes_celular = $pes_celular;
        }

        public function setPes_foto($pes_foto){
            $this->pes_foto = $pes_foto;
        }

        public function setPes_logradouro($pes_logradouro){
            $this->pes_logradouro = $pes_logradouro;
        }

        public function setPes_cep($pes_cep){
            $this->pes_cep = $pes_cep;
        }

        public function setPes_numero($pes_numero){
            $this->pes_numero = $pes_numero;
        }

        public function setPes_complemento($pes_complemento){
            $this->pes_complemento = $pes_complemento;
        }

        public function setPes_bairro($pes_bairro){
            $this->pes_bairro = $pes_bairro;
        }

        public function setPes_categoria($pes_categoria){
            $this->pes_categoria = $pes_categoria;
        }
    }
