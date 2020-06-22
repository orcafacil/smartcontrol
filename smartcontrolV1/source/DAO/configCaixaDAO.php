<?
class ConfigCaixaDAO{
    public static function registroCaixa(){
        try{
            $conn = Conexao::getInstance();

            $sql = "INSERT INTO configCaixa (cca_pai, cca_distancia_cheio, cca_distancia_vazio)  
            VALUES (:ccapai, :ccadistanciacheio, :ccadistanciavazio)";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(":ccapai", $cca_pai->getCca_pai());
            $stmt->bindValue(":ccadistanciacheio", $cca_distancia_cheio->getCca_distancia_cheio());
            $stmt->bindValue(":ccadistanciavazio", $cca_distancia_vazio->getCca_distancia_vazio());

            $stmt->execute();
        }
        catch(Exception $e){
            $e->getMessage();
        }
    }
}
?>