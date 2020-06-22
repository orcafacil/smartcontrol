<?
    class TerceirizadosCondominios{

        private $tcs_condominio = null;
        private $tcs_empresa = null;

        /* GET */

        public function getTcs_condominio(){
            return $this->tcs_condominio;
        }

        public function getTcs_empresa(){
            return $this->tcs_empresa;
        }

        /* SET */

        public function setTcs_condominio(){
            $this->tcs_condominio = $tcs_condominio;
        }

        public function setTcs_empresa(){
            $this->Tcs_empresa = $Tcs_empresa;
        }
    }
?>