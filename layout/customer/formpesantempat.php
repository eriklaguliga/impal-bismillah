<?php 

if (isset($_POST['nama_tempat'])) {
  $noktp =$_SESSION['userID'];
  $nama_tempat = $_POST['nama_tempat'];
  $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
  $tanggal_selesai = $_POST['tanggal_selesai'];
  $kodeBooking = 'ASDA';
    $query = "INSERT INTO tempat (no_ktp,kode_booking,tanggal_peminjaman,tanggal_selesai,namatempat) VALUES ('$noktp','$kodeBooking','$tanggal_peminjaman','$tanggal_selesai','$nama_tempat')";

    if (mysqli_query($koneksi, $query)) {
        echo "<div class='panel panel-success'>
                 <div class='panel-heading'>         
                 Berhasil Ditambah
             </div>

            </div>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

} else {
  echo $_SESSION['userID'];
}

 ?>

<div class=" container-fluid text-center col-md-8 col-md-offset-2">
  <h2>Formulir Booking Tempat</h2>
  <form id="form_advanced_validation" class="loginform" method="POST">
             <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Nama Tempat</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-date" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="nama_tempat" id="username" required min="0" placeholder="Enter your place"/>
                </div>
              </div>
            </div>

             <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Tanggal Peminjaman</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-date" aria-hidden="true"></i></span>
                  <input type="date" class="form-control" name="tanggal_peminjaman" id="username" required min="0" placeholder="Enter your place"/>
                </div>
              </div>
            </div>

             <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Tanggal Selesai Peminjaman</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-date" aria-hidden="true"></i></span>
                  <input type="date" class="form-control" name="tanggal_selesai" id="username" required min="0" placeholder="Enter your place"/>
                </div>
              </div>
            </div>            

            <div class="form-group ">
              <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Booking">
            </div>
            
          </form>
</div>