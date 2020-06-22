<?
    class ConfigEnergia{

        private $cen_pai = null;
        private $cen_porta = null;
        private $cen_tensao = null;
        private $cen_fator = null;

        /* GET */

        public function getCen_pai(){
            return $this->cen_pai;
        }

        public function getCen_porta(){
            return $this->cen_porta;
        }

        public function getCen_tensao(){
            return $this->cen_tensao;
        }

        public function getCen_fator(){
            return $this->cen_fator;
        }

        /* SET */

        public function setCen_pai(){
            $this->cen_pai = $cen_pai;
        }

        public function setCen_porta(){
            $this->cen_porta = $cen_porta;
        }

        public function setCen_tensao(){
            $this->cen_tensao = $cen_tensao;
        }

        public function setCen_fator(){
            $this->cen_fator = $cen_fator;
        }

    }
?>