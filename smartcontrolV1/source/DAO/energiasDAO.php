<?
class EnergiasDAO
{
    public static function retornaEnergias($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT MODULOS_ENERGIAS.mde_id , PORTAS_ENERGIAS.pen_nome FROM MODULOS_ENERGIAS INNER JOIN PLANOS ON (PLANOS.pla_id = MODULOS_ENERGIAS.mde_idPlano) INNER JOIN PESSOAS_CONDOMINIOS ON (PESSOAS_CONDOMINIOS.pcs_id = PLANOS.pla_idPessoaCondominio) INNER JOIN CONDOMINIOS ON (CONDOMINIOS.con_id = PESSOAS_CONDOMINIOS.pcs_idCondominio) INNER JOIN PORTAS_ENERGIAS ON (PORTAS_ENERGIAS.pen_id = MODULOS_ENERGIAS.mde_id) WHERE CONDOMINIOS.con_id = :id ORDER BY PORTAS_ENERGIAS.pen_nome ASC");
            $sql->bindParam(":id", $id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function retornaLeituras()
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT LEITURA_ENERGIA.len_idModuloEnergia, LEITURA_ENERGIA.len_leitura FROM LEITURA_ENERGIA INNER JOIN MODULOS_ENERGIAS ON (MODULOS_ENERGIAS.mde_id = LEITURA_ENERGIA.len_idModuloEnergia) INNER JOIN PORTAS_ENERGIAS ON (PORTAS_ENERGIAS.pen_id = LEITURA_ENERGIA.len_idPortaEnergia) INNER JOIN PLANOS ON (PLANOS.pla_id = MODULOS_ENERGIAS.mde_idPlano)");
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function retornaUltimaLeitura($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT LEITURA_ENERGIA.len_idModuloEnergia, UNIX_TIMESTAMP(timestamp(LEITURA_ENERGIA.len_data,LEITURA_ENERGIA.len_hora))*1000 AS len_datatime, LEITURA_ENERGIA.len_leitura FROM LEITURA_ENERGIA INNER JOIN MODULOS_ENERGIAS ON (MODULOS_ENERGIAS.mde_id = LEITURA_ENERGIA.len_idModuloEnergia) INNER JOIN PORTAS_ENERGIAS ON (PORTAS_ENERGIAS.pen_id = LEITURA_ENERGIA.len_idPortaEnergia) INNER JOIN PLANOS ON (PLANOS.pla_id = MODULOS_ENERGIAS.mde_idPlano) WHERE MODULOS_ENERGIAS.mde_id = :id");
            $sql->bindParam(":id", $id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
