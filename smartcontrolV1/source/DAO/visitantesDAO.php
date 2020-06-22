<?
class VisitantesDAO
{
    public static function insert(Visitantes $visitante)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("INSERT INTO VISITANTES (vis_nome, vis_email, vis_visita) VALUES (:nome, :email, :visitas)");
            $sql->bindValue(':nome', $visitante->getVis_nome());
            $sql->bindValue(':email', $visitante->getVis_email());
            $sql->bindValue(':visitas', $visitante->getVis_visita());
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetch();
    }

    public static function retornaEmail($email)
    {
        try {
            $conexao = Conexao::Banco();

            $sql = $conexao->prepare("SELECT VISITANTES.vis_email as email, VISITANTES.vis_visita as visita FROM VISITANTES WHERE VISITANTES.vis_email = :email");
            $sql->bindParam(":email", $email);
            $sql->execute();
        } catch (Exception $e) {
        }
        return $sql->fetch();
    }
}
