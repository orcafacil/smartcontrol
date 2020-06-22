<?
    class TerceirizadosCondominiosDAO{
        public static function registroTerceirizado(){
            try{
                $conn = conexao::getInstance();

                $sql = "INSERT INTO terceirizadosCondominios (tcs_condominio, tcs_empresa) 
                VALUES (:tcscondominio, :tcsempresa)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":tcscondominio", $tcs_condominio->getTcs_condominio());
                $stmt->bindValue(":tcsempresa", $tcs_empresa->getTcs_empresa());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>