<?
    class Modulos{

        private $mod_plano = null;
        private $mod_caixa_dagua = null;
        private $mod_bomba = null;
        private $mod_energia = null;
        private $mod_inventario = null;
        private $mod_manutencao = null;
        private $mod_jardim = null;
        private $mod_vistoria = null;
        private $mod_fiscal = null;
        private $mod_tarefas = null;
        private $mod_reciclagem = null; 

        /* GET */

        public function getMod_plano(){
            return $this->mod_plano;
        }

        public function getMod_caixa_dagua(){
            return $this->mod_caixa_dagua;
        }

        public function getMod_bomba(){
            return $this->mod_bomba;
        }

        public function getMod_energia(){
            return $this->mod_energia;
        }

        public function getMod_inventario(){
            return $this->mod_inventario;
        }

        public function getMod_manutencao(){
            return $this->mod_manutencao;
        }

        public function getMod_jardim(){
            return $this->mod_jardim;
        }

        public function getMod_vistoria(){
            return $this->mod_vistoria;
        }

        public function getMod_fiscal(){
            return $this->mod_fiscal;
        }

        public function getMod_tarefas(){
            return $this->mod_tarefas;
        }

        public function getMod_reciclagem(){
            return $this->mod_reciclagem;
        }

        /* SET */

        public function setMod_plano(){
            $this->mod_plano = $mod_plano;
        }

        public function setMod_caixa_dagua(){
            $this->mod_caixa_dagua = $mod_caixa_dagua;
        }

        public function setMod_bomba(){
            $this->mod_bomba = $mod_bomba;
        }

        public function setMod_energia(){
            $this->mod_energia = $mod_energia;
        }

        public function setMod_inventario(){
            $this->mod_inventario = $mod_inventario;
        }

        public function setMod_manutencao(){
            $this->mod_manutencao = $mod_manutencao;
        }

        public function setMod_jardim(){
            $this->mod_jardim = $mod_jardim;
        }

        public function setMod_vistoria(){
            $this->mod_vistoria = $mod_vistoria;
        }

        public function setMod_fiscal(){
            $this->mod_fiscal = $mod_fiscal;
        }

        public function setMod_tarefas(){
            $this->mod_tarefas = $mod_tarefas;
        }

        public function setMod_reciclagem(){
            $this->mod_reciclagem = $mod_reciclagem;
        }
    }
?>