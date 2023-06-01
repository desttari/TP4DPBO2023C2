<?php
// view negara
  class NegaraView{
    public function render($data){
      $no = 1;
      //data negara
      $datanegara = null;
      foreach($data as $val){
        list($id,$nama) = $val;
          $datanegara .= "<tr>
                  <td>" . $id . "</td>
                  <td>" . $nama . "</td>
                  <td>
                    <a href='negara.php?id_edit=" . $id . "' class='btn btn-light''>Edit</a>
                    <a href='negara.php?id_hapus=" . $id . "' class='btn btn-light''>Hapus</a>
                  </td>
                  </tr>";
      }

      $tpl = new Template("templates/negara.html");
      $tpl->replace("DATA_TABEL", $datanegara);
      $tpl->write();
    }
    
    //data untuk diupdate
    public function renderUpdate($data){
      $no = 1;
      $datanegara = null;
      foreach($data as $val){
        list($id,$nama) = $val;
          $datanegara .= "
          <form method='post' action='negara.php'>
            <br><br><div class='card'>
                <div class='card-header bg-dark'>
                <h1 class='text-white text-center'>  Update Data Member </h1>
                </div><br>
          <input type='hidden' name='id' value='$id' class='form-control'> <br>

          <label> Nama </label>
          <input type='text' name='name' value='$nama' class='form-control'
              required placeholder='Enter Country Name'> <br>

          <button type='submit' name='update' class='btn btn-dark mb-1'>Edit</button>
          <a class='btn btn-light text-dark' type='submit' name='cancel' href='negara.php'> Cancel </a><br>
          </div>
        </form>
          ";
      }

      $tpl = new Template("templates/negaraUpdate.html");
      $tpl->replace("FORM_UPDATE", $datanegara);
      $tpl->write();
    }
  }