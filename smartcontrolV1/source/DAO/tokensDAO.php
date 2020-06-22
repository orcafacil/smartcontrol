<?
    class TokensDAO{
        public static function registroToken(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO tokens (tok_pessoa, tok_primeiro_login, tok_token) 
                VALUES (:tokpessoa, :tokprimeirologin, :toktoken)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":tokpessoa", $tok_pessoa->getTok_pessoa());
                $stmt->bindValue(":tokprimeirologin", $tok_primeiro_login->getTok_primeiro_login());
                $stmt->bindValue(":toktoken", $tok_token->getTok_token());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>