<?php
include_once("conf.php");
include_once("models/NegaraClass.php");
include_once("views/NegaraView.php");

class NegaraController {
    private $negara;

    function __construct(){
        $this->negara = new negara(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    //  data negara
    public function index() {
        $this->negara->open();
        $this->negara->getnegara();
        $data = array();
        while($row = $this->negara->getResult()){
            array_push($data, $row);
        }

        $this->negara->close();

        $view = new NegaraView();
        $view->render($data);
    }
    

    // data negara dr form
    public function dataform($id) {
        $this->negara->open();
        $this->negara->getNegaraById($id);
        $data = array();
        while($row = $this->negara->getResult()){
            array_push($data, $row);
        }
        $this->negara->close();
        $view = new NegaraView();
        $view->renderUpdate($data);
    }

    // tambah data
    function add($data){
        $this->negara->open();
        $this->negara->add($data);
        $this->negara->close();
        
        header("location:negara.php");
    }

    // edit
    function edit($id){
        $this->negara->open();
        $this->negara->edit($id);
        $this->negara->close();
        
        header("location:negara.php");
    }

    // delete
    function delete($id){
        $this->negara->open();
        $this->negara->delete($id);
        $this->negara->close();
        
        header("location:negara.php");
    }


}