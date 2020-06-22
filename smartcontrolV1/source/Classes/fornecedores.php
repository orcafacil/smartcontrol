<?
    class Fornecedores{

        private $for_empresa = null;
        private $for_site = null;
        private $for_ie = null;
        private $for_cnpj = null;
        private $for_cargo = null;
        private $for_logradouro = null;
        private $for_cep = null;
        private $for_numero = null;
        private $for_complemento = null;
        private $for_bairro = null;

        /* GET */

        public function getFor_emmpresa(){
            return $this->for_empresa;
        }

        public function getFor_site(){
            return $this->for_site;
        }

        public function getFor_ie(){
            return $this->for_ie;
        }

        public function getFor_cnpj(){
            return $this->for_cnpj;
        }

        public function getFor_cargo(){
            return $this->for_cargo;
        }

        public function getFor_logradouro(){
            return $this->for_logradouro;
        }

        public function getFor_cep(){
            return $this->for_cep;
        }

        public function getFor_numero(){
            return $this->for_numero;
        }

        public function getFor_complemento(){
            return $this->for_complemento;
        }

        public function getFor_bairro(){
            return $this->for_bairro;
        }

        /* SET */

        public function setFor_empresa(){
            $this->for_empresa = $for_empresa;
        }

        public function setFor_site(){
            $this->for_site = $for_site;
        }

        public function setFor_ie(){
            $this->for_ie = $for_ie;
        }

        public function setFor_cnpj(){
            $this->for_cnpj = $for_cnpj;
        }

        public function setFor_cargo(){
            $this->for_cargo = $for_cargo;
        }

        public function setFor_logradouro(){
            $this->for_logradouro = $for_logradouro;
        }

        public function setFor_cep(){
            $this->for_cep = $for_cep;
        }

        public function setFor_numero(){
            $this->for_numero = $for_numero;
        }

        public function setFor_complemento(){
            $this->for_complemento = $for_complemento;
        }

        public function setFor_bairro(){
            $this->for_bairro = $for_bairro;
        }

    }
?>