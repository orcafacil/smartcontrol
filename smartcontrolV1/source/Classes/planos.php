<?
    class planos{

        private $pla_licenca = null;
        private $pla_data_ultimo_sincronismo = null;
        private $pla_hora_ultimo_sinconismo = null;
        private $pla_ip = null;
        private $pla_ip_redelocal = null;
        private $pla_pessoa_condominio = null;

        /* GET */

        public function getPla_licenca(){
            return $this->Pla_licenca;
        }

        public function getPla_data_ultimo_sincronismo(){
            return $this->Pla_data_ultimo_sincronismo;
        }

        public function getPla_hora_ultimo_sincronismo(){
            return $this->Pla_hora_ultimo_sincronismo;
        }

        public function getPla_ip(){
            return $this->Pla_ip;
        }

        public function getPla_ip_redelocal(){
            return $this->Pla_ip_redelocal;
        }

        public function getPla_pessoa_condominio(){
            return $this->Pla_pessoa_condominio;
        }

        /* SET */

        public function setPla_licenca(){
            $this->Pla_licenca = $Pla_licenca;
        }

        public function setPla_data_ultimo_sincronismo(){
            $this->Pla_ = $Pla_data_ultimo_sincronismo;
        }

        public function setPla_hora_ultimo_sincronismo(){
            $this->Pla_hora_ultimo_sincronismo = $Pla_hora_ultimo_sincronismo;
        }

        public function setPla_ip(){
            $this->Pla_ip = $Pla_ip;
        }

        public function setPla_ip_redelocal(){
            $this->Pla_ip_redelocal = $Pla_ip_redelocal;
        }

        public function setPla_pessoa_condominio(){
            $this->Pla_pessoa_condominio = $Pla_pessoa_condominio;
        }

    }
?>