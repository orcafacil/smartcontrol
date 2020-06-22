<?
    class FuncionariosTerceirizadosDAO{
        public static function registroFuncionarioTerceirizado(){
            try{
                $conn = conexao::getInstance();

                $sql = "INSERT INTO funcionariosTerceirizados (fte_empresa, fte_nome, fte_nome_meio, fte_ultimo_nome, fte_login, fte_senha, fte_rg, fte_cpf, fte_acesso, fte_celular)
                VALUES (:fteempresa, :ftenome, :ftenomemeio, :fteultimonome, :ftelogin, :ftesenha, :fterg, :ftecpf, :fteacesso, :ftecelular)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":fteempresa", $fte_empresa->getFte_empresa());
                $stmt->bindValue(":ftenome", $fte_nome->getFte_nome());
                $stmt->bindValue(":ftenomemeio", $fte_nome_meio->getFte_nome_meio());
                $stmt->bindValue(":fteultimonome", $fte_ultimo_nome->getFte_ultimo_nome());
                $stmt->bindValue(":ftelogin", $fte_login->getFte_login());
                $stmt->bindValue(":ftesenha", $fte_senha->getFte_senha());
                $stmt->bindValue(":fterg", $fte_senha->getFte_senha());
                $stmt->bindValue(":ftecpf", $fte_cpf->getFte_cpf());
                $stmt->bindValue(":fteacesso", $fte_acesso->getFte_acesso());
                $stmt->bindValue(":ftecelular", $fte_celular->getFte_celular());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>