<?php
class ProdutosDAO
{
    public static function produtosQuantidades($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT PRODUTOS.pro_id, PRODUTOS.pro_descricao, MATERIAL.mat_id, MATERIAL.mat_quantidadeMinima FROM PRODUTOS INNER JOIN MATERIAL ON (MATERIAL.mat_idProduto = PRODUTOS.pro_id) WHERE MATERIAL.mat_idCondominio = :id");
            $sql->bindParam(":id",$id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
