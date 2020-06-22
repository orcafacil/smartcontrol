<?
    class ConfigPainelDAO{
        public static function registroConfigPainel(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO configPainel (cpa_pai, cpa_porta, cpa_tensao, cpa_fator)
                VALUES (:cpaipai, :cpaporta, :cpatensao, :cpafator)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":cpapai", $cpa_pai->getCpa_pai());
                $stmt->bindValue(":cpaporta", $cpa_porta->getCpa_porta());
                $stmt->bindValue(":cpatensao", $cpa_tensao->getCpa_tensao());
                $stmt->bindValue(":cpafator", $cpa_fator->getCpa_fator());

                $stmt->execute();
            }
            catch(exception $e){
                $e->getMessage();
            }
        }
    }
?>