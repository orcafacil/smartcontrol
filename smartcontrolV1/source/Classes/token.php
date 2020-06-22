<?
    class Tokens{

        private $tok_pessoa = null;
        private $tok_primeiro_login = null;
        private $tok_token = null;

        /* GET */

        public function getTok_pessoa(){
            return $this->tok_pessoa;
        }

        public function getTok_primeiro_login(){
            return $this->tok_primeiro_login;
        }

        public function getTok_token(){
            return $this->tok_token;
        }

        /* SET */

        public function setTok_pessoa(){
            $this->tok_pessoa = $tok_pessoa;
        }

        public function setTok_primeiro_login()[
            $this->tok_primeiro_login  = $tok_primeiro_login;
        ]

        public function setTok_token(){
            $this->tok_token = $tok_token;
        }
        
    }
?>