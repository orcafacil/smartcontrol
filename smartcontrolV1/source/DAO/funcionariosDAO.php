<?
    class FuncionariosDAO{
        public static function registroFuncionario(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO funcionarios (fun_departamento, fun_rg, fun_cpf, fun_acesso, fun_carga_horaria) 
                VALUES (:fundepartamento, :funrg, :funcpf, :funacesso, :funcargahoraria)";

                $stmt->bindValue(":fundepartamento", $fun_departamento->getFun_departamento());
                $stmt->bindValue(":funrg", $fun_rg->getFun_rg());
                $stmt->bindValue(":funcpf", $fun_cpf->getFun_cpf());
                $stmt->bindValue(":funacesso", $fun_acesso->getFun_acesso());
                $stmt->bindValue(":funcargahoraria", $fun_carga_horaria->getFun_carga_horaria());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>