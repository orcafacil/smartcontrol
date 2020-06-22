<?
    class Condominios{

        private $cond_nome = null;
        private $cond_cnpj = null;
        private $cond_administradora = null;
        private $cond_inicio_contrato = null;
        private $cond_termino_contrato = null;
        private $cond_ativo = null;

        /* GET */

        public function getCond_nome(){
            return $this->cond_nome;
        }

        public function getCond_cnpj(){
            return $this->cond_cnpj;
        }

        public function getCond_administradora(){
            return $this->cond_administradora;
        }

        public function getCond_inicio_contrato(){
            return $this->cond_inicio_contrato;
        }

        public function getCond_termino_contrato(){
            return $this->cond_termino_contrato;
        }

        public function getCond_ativo(){
            return $this->cond_ativo;
        }

        public function getCond_(){
            return $this->cond_;
        }

        /* SET */

        public function setCond_nome(){
            $this->cond_nome = $cond_nome;
        }

        public function setCond_cnpj(){
            $this->cond_cnpj = $cond_cnpj;
        }

        public function setCond_administradora(){
            $this->cond_administradora = $cond_administradora;
        }

        public function setCond_inicio_contrato(){
            $this->cond_inicio_contrato = $cond_inicio_contrato;
        }

        public function setCond_termino_contrato(){
            $this->cond_termino_contrato = $cond_termino_contrato;
        }

        public function setCond_ativo(){
            $this->cond_ativo = $cond_ativo;
        }
        
    }
?>