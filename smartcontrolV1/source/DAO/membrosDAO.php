<?
    class MembrosDAO{
        public static function registroMembro(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO membros (mem_tipo, mem_rg, mem_cpf, mem_acesso) 
                VALUES (:memtipo, :memrg, :memcpf, :memacesso)";

                $stmt = conn->prepare($sql);

                $stmt->bindValue(":memtipo", $mem_tipo->getMem_tipo());
                $stmt->bindValue(":memrg", $mem_rg-getMem_rg());
                $stmt->bindValue(":memcpf", $mem_cpf->Mem_cpf());
                $stmt->bindValue(":memacesso", $mem_acesso->getMem_acesso());

                $stmt->execute();
            }
            catch(exception $e){
                $e->getMessage();
            }
        }
    }
?>