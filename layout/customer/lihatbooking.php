<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>List Data Booking Tempat</h2>
        </div>
        <div class="body">


             <table class="table">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Nama Tempat</th>
                         <th>Tanggal Peminjaman</th>
                         <th>Tanggal Selesai Peminjaman</th>
                     </tr>
                 </thead>
                 <tbody>
                      <?php 
                        $querySelect = "SELECT * FROM tempat INNER JOIN customer ON customer.no_ktp=tempat.no_ktp";

                        $result = mysqli_query($koneksi,$querySelect);
                        $no = 1;
                        
                        while ($pecah = mysqli_fetch_assoc($result)) {


                     ?>
                     <tr>
                         <td><?php echo $no ?></td>
                         <td><?php echo $pecah['namatempat'] ?></td>
                         <td><?php echo $pecah['tanggal_peminjaman'] ?></td>
                         <td><?php echo $pecah['tanggal_selesai'] ?></td>
                 
                     </tr>

                     <?php 
                        $no++;
                        }
                      ?>
                 </tbody>
             </table>
        </div>
    </div>
</div>