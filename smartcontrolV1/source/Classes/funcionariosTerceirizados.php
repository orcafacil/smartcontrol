<?
    class FuncionariosTerceirizados{

        private $fte_empresa = null;
        private $fte_nome = null;
        private $fte_nome_meio = null;
        private $fte_ultimo_nome = null;
        private $fte_login = null;
        private $fte_senha = null;
        private $fte_rg = null;
        private $fte_cpf = null;
        private $fte_acesso = null;
        private $fte_celular = null;

        /* GET */

        public function getFte_empresa(){
            return $this->fte_empresa;
        }

        public function getFte_nome(){
            return $this->fte_nome;
        }

        public function getFte_nome_meio(){
            return $this->fte_nome_meio;
        }

        public function getFte_ulitmo_nome(){
            return $this->fte_ultimo_nome;
        }

        public function getFte_login(){
            return $this->fte_login;
        }

        public function getFte_senha(){
            return $this->fte_senha;
        }

        public function getFte_rg(){
            return $this->fte_rg;
        }

        public function getFte_cpf(){
            return $this->fte_cpf;
        }

        public function getFte_acesso(){
            return $this->fte_acesso;
        }

        public function getFte_celular(){
            return $this->fte_celular;
        }

        /* SET */

        public function setFte_id(){
            $this->fte_id = $fte_id;
        }

        public function setFte_empresa(){
            $this->fte_empresa = $fte_empresa;
        }

        public function setFte_nome(){
            $this->fte_nome = $fte_nome;
        }
        
        public function setFte_nome_meio(){
            $this->fte_nome_meio = $fte_nome_meio;
        }

        public function setFte_ultimo_nome(){
            $this->fte_ultimo_nome = $fte_ultimo_nome;
        }
        public function setFte_login(){
            $this->fte_login = $fte_login;
        }

        public function setFte_senha(){
            $this->fte_senha = $fte_senha;
        }

        public function setFte_rg(){
            $this->fte_rg = $fte_rg;
        }

        public function setFte_cpf(){
            $this->fte_cpf = $fte_cpf;
        }

        public function setFte_acesso(){
            $this->fte_acesso = $fte_acesso;
        }
        
        public function setFte_celular(){
            $this->fte_celular = $fte_celular;
        }

    }
?>