<?
    class Navegacao{

        private $nav_pessoa - null;
        private $nav_mensagem = null;
        private $nav_ip = null;
        private $nav_data = null;
        private $nav_hora = null;

        /* GET */

        public function getNav_pessoa(){
            return $this->nav_pessoa;
        }

        public function getNav_mensagem(){
            return $this->nav_mensagem;
        }

        public function getNav_ip(){
            return $this->nav_ip;
        }

        public function getNav_data(){
            return $this->nav_data;
        }

        public function getNav_hora(){
            return $this->nav_hora;
        }

        /* GET */

        public function setNav_pessoa(){
            $this->nav_pessoa = $nav_pessoa;
        }

        public function setNav_mensagem(){
            $this->nav_mensagem = $nav_mensagem;
        }

        public function setNav_ip(){
            $this->nav_ip = $nav_ip;
        }

        public function setNav_data(){
            $this->nav_data = $nav_data;
        }

        public function setNav_hora(){
            $this->nav_hora = $nav_hora;
        }

    }
?>