<?
    class CaixasDagua{

        private $cai_plano = null;
        private $cai_ip_local = null;
        private $cai_ponto = null;
        private $cai_nome = null;

        /* GET */

        public function getCai_plano(){
            return $this->cai_plano;
        }

        public function getCai_ip_local(){
            return $this->cai_ip_local;
        }

        public function getCai_ponto(){
            return $this->cai_ponto;
        }

        public function getCai_nome(){
            return $this->cai_nome;
        }

        /* SET */

        public function setCai_plano(){
            $this->cai_plano = $cai_plano;
        }

        public function setCai_ip_local(){
            $this->cai_ip_local = $cai_ip_local;
        }

        public function setCai_ponto(){
            $this->cai_ponto = $cai_ponto;
        }

        public function setCai_nome(){
            $this->cai_nome = $cai_nome;
        }
    }
?>