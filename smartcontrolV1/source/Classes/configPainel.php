<?
    class ConfigPainel{

        private $cpa_pai = null;
        private $cpa_porta = null;
        private $cpa_tensao = null;
        private $cpa_fator = null;

        /* GET */

        public function getCpa_pai(){
            return $this->cpa_pai;
        }

        public function getCpa_porta(){
            return $this->cpa_porta;
        }

        public function getCpa_tensao(){
            return $this->cpa_tensao;
        }

        public function getCpa_fator(){
            return $this->cpa_fator;
        }

        /* SET */

        public function setCpa_pai(){
            $this->cpa_pai = $cpa_pai;
        }

        public function setCpa_porta(){
            $this->cpa_porta = $cpa_porta;
        }

        public function setCpa_tensao(){
            $this->cpa_tensao = $cpa_tensao;
        }

        public function setCpa_fator(){
            $this->cpa_fator = $cpa_fator;
        }
    }
?>