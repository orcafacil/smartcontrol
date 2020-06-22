<?
    class Funcionarios{

        private $fun_departamento = null;
        private $fun_rg = null;
        private $fun_cpf = null;
        private $fun_acesso = null;
        private $fun_carga_horaria = null;

        /* GET */

        public function getFun_departamento(){
            return $this->fun_departamento;
        }

        public function getFun_rg(){
            return $this->fun_rg;
        }

        public function getFun_cpf(){
            return $this->fun_cpf;
        }

        public function getFun_acesso(){
            return $this->fun_acesso;
        }

        public function getFun_carga_horaria(){
            return $this->fun_carga_horaria;
        }

        /* SET */

        public function setFun_departamento(){
            $this->fun_departamento = $fun_departamento;
        }

        public function setFun_rg(){
            $this->fun_rg = $fun_rg;
        }

        public function setFun_cpf(){
            $this->fun_cpf = $fun_cpf;
        }

        public function setFun_acesso(){
            $this->fun_acesso = $fun_acesso;
        }

        public function setFun_carga_horaria(){
            $this->fun_carga_horaria = $fun_carga_horaria;
        }

    }
?>