<?php

class Members extends DB
{
    // ambil data member dan negara
    function getMembers()
    {
        $query = "SELECT members.id, members.name, members.email, members.phone, members.join_date, negara.id, negara.name FROM members INNER JOIN negara ON members.id_negara = negara.id";
        return $this->execute($query);
    }
    
    // cari member sesuai id
    function getMembersById($id)
    {
        $query = "SELECT * FROM Members where id=$id";
        return $this->execute($query);
    }

    // add memeber
    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $id_negara = $data['id_negara'];
        $query = "INSERT INTO members (name, email, phone, id_negara) VALUES ('$name', '$email', '$phone', '$id_negara')";
        return $this->execute($query);
    }

    //delete member
    function delete($id)
    {
        $query = "delete FROM Members WHERE id = '$id'";
        return $this->execute($query);
    }

    //edit memeber
    function edit($id)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $id_negara = $_POST['id_negara'];
        $query = "update Members set name = '$name', email = '$email', phone='$phone', id_negara = '$id_negara' where id = '$id'";
        return $this->execute($query);
    }

}