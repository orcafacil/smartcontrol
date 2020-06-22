<?
    class NotificacaoDAO{
        public static function registroNotificacao(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO notificacoes (tif_pessoa, tif_mensagem, tif_link_auxiliar, tif_data, tif_hora)
                VALUES (:tifpessoa, :tifmensagem, :tiflinkauxiliar, :tifdata, :tifhora)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":tifpessoa", $tif_pessoa->getTif_pessoa());
                $stmt->bindValue(":tifmensagem", $tif_mensagem->getTif_mensagem());
                $stmt->bindValue(":tiflinkauxiliar", $tif_link_auxiliar->getTif_link_auxiliar());
                $stmt->bindValue(":tifdata", $tif_data->getTif_data());
                $stmt->bindValue(":tifhora", $tif_hora->gettif_hora());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>