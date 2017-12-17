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
                         <th>No KTP</th>
                         <th>Nama Customer</th>
                         <th>Status</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                      <?php 
                        $querySelect = "SELECT `no_ktp` , `nama`, `status` FROM `customer`";
                        $result = mysqli_query($koneksi,$querySelect);
                        $no = 1;

                        while ($pecah = mysqli_fetch_assoc($result)) {

                     ?>
                     <tr>
                         <td><?php echo $no ?></td>
                         <td><?php echo $pecah['no_ktp'] ?></td>
                         <td><?php echo $pecah['nama'] ?></td>
                         <td><?php echo $pecah['status'] ?></td>
                         <td> 
                            <a href="index.php?page=admin&menu=viewpesanan&act=edit&id=<?php echo $pecah['id_pesan']; ?> ">Edit</a>
                            <a href="index.php?page=admin&menu=viewpesanan&act=delete&id=<?php echo $pecah['id_pesan']; ?> ">Delete</a>
                         </td>
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