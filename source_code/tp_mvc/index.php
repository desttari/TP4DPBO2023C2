<?php
//ambil data refer ke fungsi
include_once("models/TemplateClass.php");
include_once("models/DBClass.php");
include_once("controllers/MembersController.php");

$members = new MembersController();

if (isset($_POST['add'])) {
    
    $members->add($_POST);
}

else if (!empty($_GET['flag'])) {
    $members->datanegara();
}

else if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $members->delete($id);
}

else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $members->datamember($id);
}

else if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $members->edit($id, $_POST);
}
 
else{
    $members->index();
}
