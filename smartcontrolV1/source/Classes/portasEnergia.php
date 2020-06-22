<?
    class PortasEnergia{

        private $pen_energia = null;
        private $pen_nome = null;
        private $pen_porta = null;

        /* GET */

        public function getPen_energia(){
            return $this->pen_energia;
        }

        public function getPen_nome(){
            return $this->pen_nome;
        }

        public function getPen_portar(){
            return $this->pen_porta;
        }

        /* SET */

        public function setPen_energia(){
            $this->pen_energia = $pen_energia;
        }

        public function setPen_nome(){
            $this->pen_nome = $pen_nome;
        }

        public function setPen_porta(){
            $this->pen_porta = $pen_porta;
        }
    }
?>