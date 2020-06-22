<?
    class EstadosDAO{
        public static function registroEstado(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO estados(est_nome) VALUES (:estnome)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":estnome", $did_nome->getEst_nome());
                
                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>