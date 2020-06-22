<?php
class MovimentacaoDAO
{
    public static function ultimasMovimentacoes($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT MOVIMENTACAO.mov_idMaterial, MOVIMENTACAO.mov_quatidade FROM `MOVIMENTACAO` INNER JOIN MATERIAL ON (MATERIAL.mat_idProduto = MOVIMENTACAO.mov_idMaterial) WHERE MATERIAL.mat_idCondominio = :id");
            $sql->bindParam(":id",$id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
