<?
    class Notificacoes{

        private $tif_pessoa = null;
        private $tif_mensagem = null;
        private $tif_link_auxiliar = null;
        private $tif_data = null;
        private $tif_hora = null;

        /* GET */

        public function getTif_pessoa(){
            return $this->Tif_pessoa;
        }

        public function getTif_mensagem(){
            return $this->Tif_mensagem;
        }

        public function getTif_link_auxiliar(){
            return $this->Tif_link_auxiliar;
        }

        public function getTif_data(){
            return $this->Tif_data;
        }

        public function getTif_hora(){
            return $this->Tif_hora;
        }

        /* SET */

        public function setTif_pessoa(){
            $this->Tif_pessoa = $Tif_pessoa;
        }

        public function setTif_mensagem(){
            $this->Tif_mensagem = $Tif_mensagem;
        }

        public function setTif_link_auxiliar(){
            $this->Tif_link_auxiliar = $Tif_link_auxiliar;
        }

        public function setTif_data(){
            $this->Tif_data = $Tif_data;
        }

        public function setTif_hora(){
            $this->Tif_hora = $Tif_hora;
        }
    }
?>