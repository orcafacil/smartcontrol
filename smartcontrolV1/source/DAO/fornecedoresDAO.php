<?
    class FornecedoresDAO{
        public static function registroFornecedor(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO fornecedores(for_empresa, for_site, for_ie, for_cnpj, for_cargo, for_logradouro, for_cep, for_numero, for_complemento, for_bairro)
                VALUES (:forempresa, :forsite, :forie, :forcnpj, :forcargo, :forlogradouro, :forcep, :fornumero, :forcomplemento, :forbairro)";

                $stmt = conn->prepare($sql);

                $stmt->bindValue(":forempresa", $for_empresa->getFor_empresa());
                $stmt->bindValue(":forsite", $for_site->getFor_site());
                $stmt->bindValue(":forie", $for_ie->getFor_ie());
                $stmt->bindValue(":forcnpj", $for_cnpj->getFor_cnpj());
                $stmt->bindValue(":forcargo", $for_cargo->getFor_cargo());
                $stmt->bindValue(":forlogradouro", $for_logradouro->getFor_logradouro());
                $stmt->bindValue(":forcep", $for_cep->getFor_cep());
                $stmt->bindValue(":fornumero", $for_numero->getFor_numero());
                $stmt->bindValue(":forcomplemento", $for_complemento->getFor_complemento());
                $stmt->bindValue(":forbairro", $for_bairro->getFor_bairro());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>