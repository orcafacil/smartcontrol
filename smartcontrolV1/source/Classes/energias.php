<?
    class Energias{

        private $ene_plano = null;
        private $ene_ip_local = null;
        private $ene_ponto = null;

        /* GET */

        public function getEne_plano(){
            return $this->ene_plano;
        }

        public function getEne_ip_local(){
            return $this->ene_ip_local;
        }

        public function getEne_ponto(){
            return $this->ene_ponto;
        }

        /* SET */
        
        public function setEne_plano(){
            $this->ene_plano = $ene_plano;
        }

        public function setEne_ip_local(){
            $this->ene_ip_local = $ene_ip_local;
        }

        public function setEne_ponto(){
            $this->ene_ponto = $ene_ponto;
        }
    }
?>