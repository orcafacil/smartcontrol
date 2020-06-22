<?

    class AdministradoresDAO{
        public static function registroAdministradora(){
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO administradores(adm_nivel, adm_inicio_mandato, adm_termino_mandato, adm_acesso) VALUES (:admnivel, :adminiciomandato, :admterminomandato, :admacesso)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":admnivel", $adm_nivel->getAdm_nivel());
                $stmt->bindValue(":adminiciomandato", $adm_inicio_mandato->getAdm_inicio_mandato());
                $stmt->bindValue(":admterminomandato", $adm_termino_mandato->getAdm_termino_mandato());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }

    }

?>