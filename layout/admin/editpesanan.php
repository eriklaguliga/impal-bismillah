<?php 

$id = $_GET['id'];


if (isset($_POST['id_tempat'])) {
    $no_ktp = $_POST['no_ktp'];
    $namatempat = $_POST['namatempat'];

    $queryUpdate = "UPDATE tempat SET no_ktp = '$no_ktp',namatempat='$namatempat' WHERE id_tempat='$id_tempat'";
     $result_update = mysqli_query($koneksi, $queryUpdate);

     if (isset($result_update)) {
        echo '<div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil dikonfirmasi
             </div>

            </div>';
     }

     echo '<meta http-equiv="refresh" content="1;url=index.php?page=admin&menu=viewpesanan">';

} 


 ?>

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>Konfirmasi Pesanan Customer</h2>
        </div>
        <div class="body">
            <form id="form_advanced_validation" method="POST" action="">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="nama" maxlength="25" minlength="3" value="<?php echo $pecah['nama']; ?>" disabled >
                        <label class="form-label">Nama Customer</label>
                    </div>
                    <div class="help-info">Gak bisa diedit</div>
                </div>
                 <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="noktp" maxlength="25" minlength="3" value="<?php echo $pecah['no_ktp']; ?>" disabled >
                        <label class="form-label">No KTP</label>
                    </div>
                    <div class="help-info">Gak bisa diedit</div>
                </div>
                
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="status" maxlength="15" minlength="2" value="<?php echo $pecah['status']; ?>" required >
                        <label class="form-label">Status </label>
                    </div>
                    <div class="help-info">OK, Cancel, Waiting Payment</div>
                </div>
                
              
                <button class="btn btn-primary waves-effect" type="submit">Confirm</button>
            </form>
        </div>
    </div>
</div>

