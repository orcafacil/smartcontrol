<?
    class Cidades{

        private $cid_estado = null;
        private $cid_nome = null;

        /* GET */

        public function getCid_estado(){
            return $this->cid_estado;
        }

        public function getCid_nome(){
            return $this->cid_nome;
        }

        /* SET */

        public function setCid_estado(){
            $this->cid_estado = $cid_estado;
        }

        public function setCid_nome(){
            $this->cid_nome = $cid_nome;
        }
    }
?>