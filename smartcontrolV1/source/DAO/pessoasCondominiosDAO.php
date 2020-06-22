<?
    class PessoasCondominiosDAO{
        public static function registroPessoasCondominios(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO pessoasCondominios (pcs_condominio, pcs_pessoa, pcs_categoria) 
                VALUES (:pcscondominio, :pcspessoa, :pessoacategoria)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":pcscondominio", $pcs_condominio->getPcs_condominio());
                $stmt->bindValue(":pcspessoa", $pcs_pessoa->getPcs_pessoa());
                $stmt->bindValue(":pcscondominio", $pcs_condominio->getPcs_condominio());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>