<?
    class Administradoras{

        private $adm_nivel = null;
        private $adm_inicio_mandato = null;
        private $adm_termino_mandato = null;
        private $adm_acesso = null;

        /* GET */

        public function getAdm_nivel(){
            return $this->adm_nivel;
        }

        public function getAdm_inicio_mandato(){
            return $this->adm_inicio_mandato;
        }

        public function getAdm_termino_mandato(){
            return $this->adm_termino_mandato;
        }

        public function getAdm_acesso(){
            return $this->adm_acesso;
        }

        /* SET */

        public function setAdm_nivel(){
            $this->adm_nivel = $adm_nivel;
        }

        public function setAdm_inicio_mandato(){
            $this->adm_inicio_mandato = $adm_inicio_mandato;
        }

        public function setAdm_termino_mandato(){
            $this->adm_termino_mandato = $adm_termino_mandato;
        }

        public function setAdm_acesso(){
            $this->adm_acesso = $adm_acesso;
        }
    }
?>