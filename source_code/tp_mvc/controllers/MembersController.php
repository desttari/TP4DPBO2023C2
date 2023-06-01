<?php
include_once("conf.php");
include_once("models/MembersClass.php");
include_once("models/NegaraClass.php");
include_once("views/MembersView.php");

class MembersController {
    private $members;
    private $negara;
    //konstruktor

    function __construct(){
        $this->members = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->negara = new Negara(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }
//untuk list member
    public function index() {
        $this->members->open();
        $this->members->getMembers();
        $data = array();
        while($row = $this->members->getResult()){
            array_push($data, $row);
        }
        $this->members->close();
        
        $view = new MembersView();
        $view->render($data);
    }
    
    // pilihan negara
    public function datanegara() {
        $this->negara->open();
        $this->negara->getnegara();
        $data = array();
        while($row = $this->negara->getResult()){
            array_push($data, $row);
        }
        $this->negara->close();

        $view = new MembersView();
        $view->optionForm($data);
    }
    
    // placeholder form dgn data
    public function datamember($id) {
        $this->members->open();
        $this->negara->open();
        $this->members->getMembersById($id);
        $this->negara->getnegara();
        $data = array(
            'members' => array(),
            'negara' => array(),
        );
        while($row = $this->members->getResult()){
            array_push($data['members'], $row);
        }
        while($row = $this->negara->getResult()){
            array_push($data['negara'], $row);
        }
        $this->members->close();
        $this->negara->close();
        $view = new MembersView();
        $view->renderUpdate($data);
    }

    // tambah
    function add($data){
        $this->members->open();
        $this->members->add($data);
        $this->members->close();
        
        header("location:index.php");
    }

    // edit
    function edit($id){
        $this->members->open();
        $this->members->edit($id);
        $this->members->close();
        
        header("location:index.php");
    }

    // delete
    function delete($id){
        $this->members->open();
        $this->members->delete($id);
        $this->members->close();
        
        header("location:index.php");
    }


}