<?php
//ambil data refer ke fungsi

include_once("models/TemplateClass.php");
include_once("models/DBClass.php");
include_once("controllers/NegaraController.php");

$negara = new NegaraController();

if (isset($_POST['add'])) {
    
    $negara->add($_POST);
}

else if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $negara->delete($id);
}

else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $negara->dataform($id);
}

else if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $negara->edit($id, $_POST);
}

else{
    $negara->index();
}

