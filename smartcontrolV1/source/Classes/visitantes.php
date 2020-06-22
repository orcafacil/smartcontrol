<?
    class Visitantes{

        protected $vis_nome = null;
        protected $vis_email = null;
        protected $vis_visita = null;

        /* GET */

        public function getVis_nome(){
            return $this->vis_nome;
        }

        public function getVis_email(){
            return $this->vis_email;
        }

        public function getVis_visita(){
            return $this->vis_visita;
        }

        /* SET */

        public function setVis_nome($vis_nome){
            $this->vis_nome = $vis_nome;
        }

        public function setVis_email($vis_email){
            $this->vis_email = $vis_email;
        }

        public function setVis_visita($vis_visita){
            $this->vis_visita = $vis_visita;
        }
    }
