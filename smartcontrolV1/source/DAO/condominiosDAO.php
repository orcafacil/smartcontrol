<?
class CondominiosDAO
{
    public static function todosCondominios($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT CONDOMINIOS.con_nome, CONDOMINIOS.con_id FROM PESSOAS INNER JOIN PESSOAS_CONDOMINIOS on (PESSOAS_CONDOMINIOS.pcs_idPessoa = PESSOAS.pes_id) INNER JOIN CONDOMINIOS on (CONDOMINIOS.con_id = PESSOAS_CONDOMINIOS.pcs_idCondominio) WHERE PESSOAS_CONDOMINIOS.pcs_idPessoa = :id ORDER BY CONDOMINIOS.con_nome ASC");
            $sql->bindParam(":id", $id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function especificoEoutros($id, $condominio)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT CONDOMINIOS.con_nome, CONDOMINIOS.con_id FROM PESSOAS INNER JOIN PESSOAS_CONDOMINIOS on (PESSOAS_CONDOMINIOS.pcs_idPessoa = PESSOAS.pes_id) INNER JOIN CONDOMINIOS on (CONDOMINIOS.con_id = PESSOAS_CONDOMINIOS.pcs_idCondominio) WHERE PESSOAS_CONDOMINIOS.pcs_idPessoa = :id ORDER BY CONDOMINIOS.con_nome != :condominio");
            $sql->bindParam(":id", $id, PDO::PARAM_INT);
            $sql->bindValue(":condominio", $condominio);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
