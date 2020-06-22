<?php
class TarefasDAO
{
    public static function retornaUltimasTarefas($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT PESSOAS.pes_nome, PESSOAS.pes_foto, PESSOAS.pes_ultimoNome,FUNCIONARIOS.fun_departamento, TAREFAS.ter_descricao, DATE_FORMAT(MAX(TAREFAS_CRONO.cro_data),'%d/%m') AS cro_data, TIME_FORMAT(MAX(TAREFAS_CRONO.cro_hora),'%H:%i') AS cro_hora FROM PESSOAS INNER JOIN TAREFAS ON (TAREFAS.tar_idPessoa = PESSOAS.pes_id) INNER JOIN FUNCIONARIOS ON (FUNCIONARIOS.fun_id = PESSOAS.pes_id) INNER JOIN TAREFAS_CRONO ON (TAREFAS_CRONO.cro_idTarefa = TAREFAS.tar_id) INNER JOIN CONDOMINIOS ON (CONDOMINIOS.con_id = TAREFAS.tar_idCondominio) WHERE CONDOMINIOS.con_id = :id GROUP BY PESSOAS.pes_id");
            $sql->bindParam(":id",$id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
