<?
    class PortasPainelDAO{
        public static function registroPortasPainel(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO portasPainel (ppa_painel, ppa_nome, ppa_porta) 
                VALUES (:ppapainel, :ppanome, :ppaporta)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":ppapainel", $ppa_painel->getPpa_painel());
                $stmt->bindValue(":ppanome", $ppa_nome->getPpa_nome());
                $stmt->bindvalue(":ppaporta", $ppa_porta->getPpa_porta());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>