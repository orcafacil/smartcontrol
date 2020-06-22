<?
    class CategoriasDAO{
        public static function registroCategorias{
            try{
                $conn = Conexao::getInstance();

                $sql = "INSERT INTO categorias(cat_grupo) 
                VALUES (:catgrupo)";

                $stmt = $conn->prepare($sql);

                $stmt->bindValue(":catgrupo", $cat_grupo->getCat_grupo());

                $stmt->execute();
            }
            catch(Exception $e){
                $e->getMessage();
            }
        }
    }
?>