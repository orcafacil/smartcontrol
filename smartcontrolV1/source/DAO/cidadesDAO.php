<?
    class CidadesDAO{
        public static function registroCidade(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO cidades(cid_nome) VALUES (:cidnome)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":cidnome", $did_nome->getCid_nome());
                
                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>