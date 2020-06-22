<?
    class ConfigCaixa{

        private $cca_pai = null;
        private $cca_distancia_cheio = null;
        private $cca_distancia_vazio = nul;

        /* GET */

        public function getCca_pai(){
            return $this->cca_pai;
        }

        public function getCca_distancia_cheio(){
            return $this->cca_distancia_cheio;
        }

        public function getCca_distancia_vazio(){
            return $this->cca_distancia_vazio;
        }

        /* SET */

        public function setCca_pai(){
            $this->cca_pai = $cca_pai;
        }

        public function setCca_distancia_cheio(){
            $this->cca_distancia_cheio = $cca_distancia_cheio;
        }

        public function setCca_distancia_vazio(){
            $this->cca_distancia_vazio = $cca_distancia_vazio;
        }
        
    }
?>