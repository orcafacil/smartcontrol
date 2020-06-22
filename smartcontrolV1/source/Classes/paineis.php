<?
    class Paineis{

        private $pai_plano = null;
        private $pai_ip_local = null;
        private $pai_ponto = null;

        /* GET */

        public function getPai_plano(){
            return $this->pai_plano;
        }

        public function getPai_ip_local(){
            return $this->pai_ip_local;
        }

        public function getPai_ponto(){
            return $this->pai_ponto;
        }

        /* SET */

        public function setPai_plano(){
            $this->pai_plano = $pai_plano;
        }

        public function setPai_ip_local(){
            $this->pai_ip_local = $pai_ip_local;
        }

        public function setPai_ponto(){
            $this->pai_ponto = $pai_ponto;
        }
    }
?>