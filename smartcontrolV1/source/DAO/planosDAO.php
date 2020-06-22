<?
    class PlanosDAO{
        public static function registroPlano(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO planos (pla_licenca, pla_data_ultimo_sincronismo, pla_hora_ultimo_sincronismo, pla_ip, pla_ip_redelocal, pla_pessoa_condominio
                VALUES (:plalicenca, :pladataultimosincronismo, :plahoraultimosincronismo, :plaip, :plaipredelocal, :plapessoacondominio)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":plalicenca", $pla_licenca->getPla_licenca());
                $stmt->bindValue(":pladataultimosincronismo", $pla_data_ultimo_sincronismo->getPla_data_ultimo_sincronismo());
                $stmt->bindvalue(":plahoraultimosincronismo", $pla_hora_ultimo_sincronismo->getPla_hora_ultimo_sincronismo());
                $stmt->bindValue(":plaip", $pla_ip->getPla_ip());
                $stmt->bindvalue(":plaipredelocal", $pla_ip_redelocal->getPla_ip_redelocal());
                $stmt->bindValue(":plapessoacondominio", $pla_pessoa_condominio->getPla_pessoa_condominio());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>