<?
    class CaixasDaguaDAO{
        public static function registroCaixaDagua(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO caixasdagua (cai_plano, cai_ip_local, cai_ponto, cai_nome) 
                VALUES (:caiplano, :caiiplocal,:caiponto, :cainome)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":caiplano", $cai_plano->getCai_plano());
                $stmt->bindValue(":caiiplocal", $cai_ip_local->getCai_ip_local());
                $stmt->bindValue(":caiponto", $cai_ponto->getCai_ponto());
                $stmt->bindValue(":cainome", $cai_nome->getCai_nome());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>