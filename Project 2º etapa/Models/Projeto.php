<?php 


class Projeto{
private $id;
private $nome;
private $duracao;

private$con;

public function __construct($id=null, $nome=null, $duracao=null){
    $this->id = $id;
    $this->nome = $nome;
    $this->duracao = $duracao;

    $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
}

Public function all(){
    $sql = $this->con->prepare('SELECT * from ver_projeto');
    $sql->execute();
    $rows = $sql->fetchAll (PDo::FETCH_CLASS)
    return $rows;
}

public function create (){
    $sql = $this->con->prepare('insert into pojeto(nome, duracao) values (?,?)');
    $sql->execute([$this->nome, $this->duracao]);

}

Public function read(){
    $sql = $this->con->prepare('UPDATE projeto set nome =?, duracao=? where id = ?');
    $sql->execute([$this->nome, $this->duracao, $this->id]);
}
public function delete(){
    $sql = $this->con->prepare('delete from projeto where id = ?');
    sql->execute([$this->id]);
}



}
?>