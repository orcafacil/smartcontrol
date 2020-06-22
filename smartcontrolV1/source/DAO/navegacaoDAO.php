<?
    class NavegacaoDAO{
        public static function registroNavegacao(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO nevagacao (nav_pessoa, nav_mensagem, nav_ip, nav_data, nav_hora) 
                VALUES (:navpessoa, :navmensagem, :navip, :navdata, :navhora");

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":navpessoa", $nav_pessoa->getNav_pessoa());
                $stmt->bindValue(":navmensagem", $nav_mensagem->getNav_mensagem());
                $stmt->bindValue(":navip", $nav_vip->getNav_vip());
                $stmt->bindValue(":navdata", $nav_data->getNav_data());
                $stmt->bindValue(":navhora", $nav_hora->getNav_hora());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>