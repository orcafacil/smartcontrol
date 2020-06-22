<?
    class ConfigEnergiaDAO{
        public static function registroConfigEnergia(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO configEnergia (cen_pai, cen_porta, cen_tensao, cen_fator) 
                VALUES (:cenpai, :cenporta, :centensao, :cenfator)";

                $stmt = $conn->prepare($sql);

                $stmt->bindvalue(":cenpai", $cen_pai->getCen_pai());
                $stmt->bindValue(":cenporta", $cen_porta$->getCen_porta());
                $stmt->bindValue(":centensao", $cen_tensao->getCen_tensao());
                $stmt->bindValue(":cenfator", $cen_fator->getCen_fator());

                $stmt->execute();
            }
            catch(exception $e){
                $e->getMessage();
            }
        }
    }
?>