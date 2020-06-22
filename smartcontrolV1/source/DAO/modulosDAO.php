<?
class ModulosDAO
{
    public static function retornaModulos($pes_id, $con_id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT MODULOS.mod_id, MODULOS.mod_idPlano, MODULOS.mod_bomba, MODULOS.mod_energia, MODULOS.mod_caixa_dagua, MODULOS.mod_inventario, MODULOS.mod_manutencao, MODULOS.mod_jardim, MODULOS.mod_vistoria, MODULOS.mod_fiscal, MODULOS.mod_tarefas, MODULOS.mod_reciclagem FROM MODULOS INNER JOIN PLANOS ON (PLANOS.pla_id = MODULOS.mod_idPlano) INNER JOIN PESSOAS_CONDOMINIOS ON (PESSOAS_CONDOMINIOS.pcs_id = PLANOS.pla_idPessoaCondominio) WHERE PESSOAS_CONDOMINIOS.pcs_idCondominio = :con_id AND PESSOAS_CONDOMINIOS.pcs_idPessoa = :pes_id");
            $sql->bindParam(":pes_id", $pes_id, PDO::PARAM_INT);
            $sql->bindParam(":con_id", $con_id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetch();
    }

    public static function retornaCofigMod($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT CLASSES.cla_id, CLASSES.cla_idModulo, CLASSES.cla_bomba, CLASSES.cla_energia, CLASSES.cla_caixa_dagua, CLASSES.cla_inventario, CLASSES.cla_manutencao, CLASSES.cla_jardim, CLASSES.cla_vistoria, CLASSES.cla_fiscal, CLASSES.cla_tarefas, CLASSES.cla_reciclagem FROM CLASSES INNER JOIN MODULOS ON (MODULOS.mod_id = CLASSES.cla_idModulo) WHERE MODULOS.mod_id = :id");
            $sql->bindParam(":id", $id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetch();
    }

    public static function retornaPainel($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT PORTAS_PAINEIS.ppa_nome FROM PORTAS_PAINEIS INNER JOIN MODULOS_PAINEIS ON (PORTAS_PAINEIS.ppa_id = MODULOS_PAINEIS.mdp_id) WHERE MODULOS_PAINEIS.mdp_idPlano = :id");
            $sql->bindParam(":id", $id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function retornaCaixaDagua($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT MODULOS_CAIXAS.mdc_nome FROM MODULOS_CAIXAS INNER JOIN PLANOS ON (PLANOS.pla_id = MODULOS_CAIXAS.mdc_idPlano) WHERE MODULOS_CAIXAS.mdc_idPlano = :id");
            $sql->bindParam(":id", $id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function retornaEnergia($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT PORTAS_ENERGIAS.pen_nome, MODULOS_ENERGIAS.mde_id FROM PORTAS_ENERGIAS INNER JOIN MODULOS_ENERGIAS ON (PORTAS_ENERGIAS.pen_id = MODULOS_ENERGIAS.mde_id) WHERE MODULOS_ENERGIAS.mde_idPlano = :id");
            $sql->bindParam(":id", $id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function retornaResiclaveis($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT * FROM RECICLAVEIS WHERE RECICLAVEIS.rec_idCondominio = :id");
            $sql->bindParam(":id", $id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
