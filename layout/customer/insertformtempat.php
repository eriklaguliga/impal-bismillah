<?php 
  include 'config/db.php';

  $nama_tempat = $_POST['nama_tempat'];
  $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
  $tanggal_selesai = $_POST['tanggal_selesai'];


  $insertQuery = "INSERT INTO tempat (namatempat,tanggal_peminjaman,tanggal_selesai) VALUES ('$nama_tempat','$tanggal_peminjaman','$tanggal_selesai')";


  if (mysqli_query($koneksi, $insertQuery)) {
     echo "
        <script> alert('Registrasi Sukses') 
        window.location = 'customer/formpesantempat.php';
        </script>
      ";
  } else {
      echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi);
  }
  
 ?>