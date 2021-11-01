<?php
class pessoa{
    private $pdo;
    public function __construct($dbname, $host, $user, $password)
    {
        try{
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $password);
        }
        catch (PDOException $e){
            echo "Erro com banco de dados".$e->getMessage();
            exit();
        }
        catch (Exception $e){
            echo "Erro genérico: ".$e->getMessage();
            exit();
        }

}
    public function buscardados(){
        $res = array();
        $res = $cmd = $this->pdo->QUERY("SELECT * FROM PESSOA ORDER BY NOME");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function cadastrar($nome, $telefone, $email){
        $cmd = $this->pdo->prepare("SELECT ID FROM PESSOA WHERE EMAIL = :e");
        $cmd->bindvalue(":e", $email);
        $cmd->execute();
        if ($cmd->rowcount() > 0){
            return false;
        }else{
            $cmd=$this->pdo->prepare("INSERT INTO PESSOA (NOME, TELEFONE, EMAIL) VALUES (:N, :T, :E)");
            $cmd->bindvalue(":N", $nome);
            $cmd->bindvalue(":T", $telefone);
            $cmd->bindvalue(":E", $email);
            $cmd->execute();
            return true;

        }

    }
    public function excluir($id){
        $cmd = $this->pdo->prepare("DELETE FROM PESSOA WHERE ID = :id");
        $cmd->bindvalue(":id", $id);
        $cmd->execute();
    }
    public function editar($id, $nome, $telefone, $email){
        $cmd = $this->pdo->prepare("UPDATE PESSOA set nome = :n, telefone = :t, email = :e WHERE id = :id");
        $cmd->bindvalue(":n", $nome);
        $cmd->bindvalue(":t", $telefone);
        $cmd->bindvalue(":e", $email);
        $cmd->bindvalue(":id", $id);
        $cmd->execute();
    } 
}
?>