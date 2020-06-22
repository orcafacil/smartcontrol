<?
    class PortasPainel{

        private $ppa_painel = null;
        private $ppa_nome = null;
        private $ppa_porta = null;

        /* GET */

        public function getPpa_painel(){
            return $this->ppa_painel;
        }

        public function getPpa_nome(){
            return $this->ppa_nome;
        }

        public function getPpa_porta(){
            return $this->ppa_porta;
        }

        /* SET */

        public function setPpa_painel(){
            $this->ppa_painel = $ppa_painel;
        }

        public function setPpa_nome(){
            $this->ppa_nome = $ppa_nome;
        }

        public function setPpa_porta(){
            $this->ppa_porta = $ppa_porta;
        }
        
    }
?>