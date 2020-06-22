<?
    class Visitas{

        private $vta_id = null;
        private $vta_quantVisitas = null;

        /* GET */

        public function getVta_id(){
            return $this->vta_id;
        }

        public function getVta_quantVisitas(){
            return $this->vta_quantVisitas;
        }

        /* SET */

        public function setVta_id($vta_id){
            $this->vta_id = $vta_id;
        }

        public function setVta_quantVisitas($vta_quantVisitas){
            $this->vta_quantVisitas = $vta_quantVisitas;
        }
    }
