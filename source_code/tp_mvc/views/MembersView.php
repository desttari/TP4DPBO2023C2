<?php
//view member 
    class MembersView{
        public function render($data){
        $no = 1;
        $dataMember = null;
        //daftar memeber
        foreach($data as $val){
            list($id,$nama,$email, $phone, $join_date,$id_negara ,$negara) = $val;
            $dataMember .= "<tr>
                    <td>" . $id . "</td>
                    <td>" . $nama . "</td>
                    <td>" . $email . "</td>
                    <td>" . $phone . "</td>
                    <td>" . $join_date . "</td>
                    <td>" . $negara . "</td>
                    <td>
                        <a href='index.php?id_edit=" . $id . "' class='btn btn-light''>Edit</a>
                        <a href='index.php?id_hapus=" . $id . "' class='btn btn-light''>Hapus</a>
                    </td>
                    </tr>";
        }
        //pass ke template, data member
        $tpl = new Template("templates/index.html");
        $tpl->replace("DATA_TABEL", $dataMember);
        $tpl->write();
    }
    
    //update member
    public function renderUpdate($data){
        $no = 1;
        $dataMember = null;
        $datanegara = null;
        $newnegara = 0;
        foreach($data['members'] as $val){
            list($id,$nama,$email, $phone,$id_negara) = $val;
            $dataMember .= "
            
            <input type='hidden' name='id' value='$id' class='form-control' > <br>
            <label> Nama </label>
            <input type='text' name='name' value='$nama' class='form-control' placeholder='Enter member name'
              required > <br>
            <label> E-mail </label>
            <input type='text' name='email' value='$email' class='form-control' placeholder='Enter member e-mail'
              required > <br>
            <label> Phone </label>
            <input type='text' name='phone' value='$phone' class='form-control' placeholder='Enter member phone number'
              required> <br>
            
            <label> Negara </label>";
            $newnegara = $id_negara;
        }

        //data negara
        foreach($data['negara'] as $val){
            list($id, $nama) = $val;
            if($id == $newnegara){
                $datanegara .= "<option selected value='".$id."'>".$nama."</option>";
            }else{
                $datanegara .= "<option value='".$id."'>".$nama."</option>";
            }
        }

        //pass data ke form update
        $tpl = new Template("templates/indexUpdate.html");
        $tpl->replace("FORM_UPDATE", $dataMember);
        $tpl->replace("OPTION", $datanegara);
        $tpl->write();
    }
    
    // ambil negara untuk di opsi
    public function optionForm($data){
        $datanegara = null;
        foreach($data as $val){
            list($id, $nama) = $val;
            $datanegara .= "<option value='".$id."'>".$nama."</option>";
        }

        $tpl = new Template("templates/indexAdd.html");
        $tpl->replace("OPTION", $datanegara);
        $tpl->write();
    }

    
}