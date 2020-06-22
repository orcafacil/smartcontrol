<?
class VisitasDAO
{
    public static function primeiraVisita()
    {
        try {
            $conexao =  Conexao::Banco();

            $sql = $conexao->prepare("INSERT INTO VISITAS (vta_quantVisitas) VALUES (1)");
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetch();
    }

    public static function maxIdVisita()
    {
        try {
            $conexao = Conexao::Banco();
            
            $sql = $conexao->prepare("SELECT MAX(VISITAS.vta_id) AS id FROM VISITAS");
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetch();
    }

    public static function somaVisita($id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT (vta_quantVisitas+1) AS soma FROM VISITAS WHERE VISITAS.vta_id = :id");
            $sql->bindParam(":id", $id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetch();
    }

    public static function alteraVisita($soma, $id)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("UPDATE VISITAS SET vta_quantVisitas = :soma WHERE VISITAS.vta_id = :id");
            $sql->bindParam(':soma', $soma, PDO::PARAM_INT);
            $sql->bindParam(':id', $id, PDO::PARAM_INT);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetch();
    }
}
