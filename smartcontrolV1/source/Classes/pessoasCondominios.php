<?
    class PessoasCondominios{

        private $pcs_condominio = null;
        private $pcs_pessoa = null;
        private $pcs_categoria = null;


        /* GET */

        public function getPcs_condominio(){
            return $this->pcs_condominio;
        }

        public function getPcs_pessoa(){
            return $this->pcs_pessoa;
        }

        public function getPcs_categoria(){
            return $this->pcs_categoria;
        }

        /* SET */

        public function setPcs_condiminio(){
            $this->pcs_condominio = $pcs_condiminio;
        }

        public function setPcs_pessoa(){
            $this->pcs_pessoa = $pcs$pessoa;
        }

        public function setPcs_categoria(){
            $this->pcs_categoria = $pcs_categoria;
        }
    }
?>