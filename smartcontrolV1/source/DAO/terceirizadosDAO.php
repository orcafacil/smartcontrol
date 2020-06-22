<?
    class TerceirizadosDAO{
        public static function registroTerceirizado(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO terceirizados (ter_empresa, ter_email, ter_segmento, ter_site, ter_cnpj, ter_ie, ter_telefone, ter_logradouro, ter_cep, ter_numero, ter_complemento, ter_bairro, ter_dt_contratacao) 
                VALUES (:terempresa, :teremail, :tersegmento, :tersite, :tercnpj, :terie, :tertelefone, :terlogradouro, :tercep, ternumero, :tercomplemento, :terbairro, :terdtcontratacao)";
                
                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":terempresa", $ter_empresa->getTer_empresa());
                $stmt->bindValue(":teremail", $ter_email->getTer_email());
                $stmt->bindValue(":tersegmento", $ter_segmento->getTer_segmento());
                $stmt->bindValue(":tersite", $ter_site->getTer_site());
                $stmt->bindValue(":tercnpj", $ter_cnpj->getTer_cnpj());
                $stmt->bindValue(":terie", $ter_ie->getTer_ie());
                $stmt->bindValue(":tertelefone", $ter_telefone->getTer_telefone());
                $stmt->bindValue(":terlogradouro", $ter_logradouro->getTer_logradouro());
                $stmt->bindValue(":tercep", $ter_cep->getTer_cep());
                $stmt->bindValue(":ternumero", $ter_numero->getTer_numero());
                $stmt->bindValue(":tercomplemento", $ter_complemento->getTer_complemento());
                $stmt->bindValue(":terbairro", $ter_bairro->getTer_bairro());
                $stmt->bindValue(":terdtcontratacao", $ter_dt_contratacao->getTer_dt_contratacao());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>