<?
    class BairrosDAO{
        public static function registroBairro(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO bairros(bai_cidade, bai_nome) VALUES (:baicidade, :bainome)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":baicidade", $bai_cidade->getBai_cidade());
                $stmt->bindValue(":bainome", $bai_nome->getBai_nome());
                
                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>