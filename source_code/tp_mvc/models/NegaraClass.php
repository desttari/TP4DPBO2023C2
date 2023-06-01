<?php

class Negara extends DB
{
    // ambil semua isi negara
    function getNegara()
    {
        $query = "SELECT * FROM negara";
        return $this->execute($query);
    }
    
    // ambil negara sesuai id
    function getNegaraById($id)
    {
        $query = "SELECT * FROM negara where id=$id";
        return $this->execute($query);
    }

    //tambah negara
    function add($data)
    {
        $name = $data['name'];
        $query = "insert into negara values ('','$name')";
        return $this->execute($query);
    }

    //delete negara
    function delete($id)
    {
        $query = "delete FROM negara WHERE id = '$id'";

        return $this->execute($query);
    }

    //edit negara
    function edit($id)
    {
        $name = $_POST['name'];
        $query = "update negara set name = '$name' where id = '$id'";
        return $this->execute($query);
    }

}