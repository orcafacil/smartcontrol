<?
    class PortasEnergiaDAO{
        public static function registroPortasEnergia(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO portasenergia (pen_energia, pen_nome, pen_porta) 
                VALUES (:penenergia, :pennome, :penporta)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":penenergia", $pen_energia->getPen_energia());
                $stmt->bindValue(":pennome", $pen_nome->getPen_nome());
                $stmt->bindValue(":penporta", $pen_porta->getPen_porta());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>