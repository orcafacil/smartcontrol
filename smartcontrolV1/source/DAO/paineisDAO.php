<?
    class PaineisDAO{
        public static function registroPaineis(){
            try{
                $conn = conexao::getInstance();

                $sql = "INSERT INTO paineis (pai_plano, pai_ip_local, pai_ponto) 
                VALUES (:paiplano, :paiiplocal,:paiponto)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":paiplano", $pai_plano->getPai_plano());

            }
        }
    }
?>