<?php 
require_once 'Models/Projeto.php';

class ProjetoController{
public function all(){
    $obg = new Projeto();
    $projetos = $onj->all();

    require_once 'Views/Projeto_all.php';
}
public function create (){
    $obj = new Projeto();
    if (isset($_POST['nome'])) {
        $obj->setNome($_POST['nome']);
        $obj->setDuracao($_POST['duracao'])
        $obj->create();
        $projeto = $obj->read();
    }else{
        $projeto = (object)[
            'id' => null,
            'nome' => '',
            'duracao' => ''
        ];
    }
    require_once 'Views/Projeto_Create.php'
}
public function read (){
    $obg = new Projeto();
    $obj->setId($_GET['id']);
    $projeto = $obj->read();

    require_once 'Views/Projeto_read.php'
}
public function update (){
    $obj = new Projeto();
    $obj->setId($_GET['id']);
    if(isset($_POST['nome'])){
        $obj->setNome($_POST['nome']);
        $obj->setDuracao($_POST['duracao']);
        $obj->update();
    }
    $projeto = $obj->read();

    require_once 'Views/projeto_update.php'
}

public function delete(){
    $obj-> new Projeto();
    $obj->setId($_GET['id']);
    $obj->delete();

    header("Location : ./");
}


}

?>