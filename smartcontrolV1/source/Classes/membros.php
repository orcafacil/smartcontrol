<?
    class Membros{

        private $mem_tipo = null;
        private $mem_rg = null;
        private $mem_cpf = null;
        private $mem_acesso = null:

        /* GET */

        public function getMem_tipo(){
            return $this->mem_tipo;
        }

        public function getMem_rg(){
            return $this->mem_rg;
        }

        public function getMem_cpf(){
            return $this->mem_cpf;
        }

        public function getMem_acesso(){
            return $this->mem_acesso;
        }

        /* SET */

        public function setMem_tipo(){
            $this->mem_tipo = $mem_tipo;
        }

        public function setMem_rg(){
            $this->mem_rg = $mem_rg;
        }

        public function setMem_cpf(){
            $this->mem_cpf = $mem_cpf;
        }

        public function setMem_acesso(){
            $this->mem_acesso = $mem_acesso;
        }
    }
?>