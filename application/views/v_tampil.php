<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Crud dengan CodeIgniter</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"
   </head>
   <body>
      <main>
         <section class="glass">
            <div class="dashboard">
               <div class="user">
                  <img src="<?php echo base_url() ?>assets/image/halimpoto.jpg" alt="">
                  <h3>Halim Cakra Buana</h3>
                  <p>12200908</p>
               </div>
                  <nav>
                     <ul>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"> Profile</i></a>
                        <li><a href="#"><i class="fa fa-table" aria-hidden="true"> Table</i></a>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"> Dashboard</i></a>
                     </ul>
                  </nav>
                  <div class="info">
                     <div class="informasi">
                        <p>12.3A.04</p>
                        <p>Sistem Informasi</p>
                     </div>

                  </div>
               </div>
               <div class="tabel">
                  <div class="card">
                     <h1>Tabel Mahasiswa</h1>
                     <input type="text" name="" value="">
                  </div>
                  <div class="tabel_info">
                     <table>
                        <tr>
                           <th>Nim</th>
                           <th>Nama</th>
                           <th>Kelas</th>
                           <th>Alamat</th>
                           <th>Action</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($mhs as $u){
                         ?>
                         <tr>
                            <td><?php echo $u->nim ?></td>
                            <td><?php echo $u->nama ?></td>
                            <td><?php echo $u->kelas ?></td>
                            <td><?php echo $u->alamat ?></td>
                            <td>
                               <?php echo anchor('crud/edit/' . $u->nim, 'Edit'); ?>
                               <?php echo anchor('crud/hapus/' . $u->nim, 'Hapus'); ?>
                            </td>
                         </tr>
                      <?php } ?>
                     </table>
                     <div class="tambah">
                        <span><?php echo anchor('crud/tambah', 'Tambah Data'); ?></span>
                     </div>


                  </div>
               </div>

         </section>

      </main>
      <div class="circle1"></div>
      <div class="circle2"></div>
   </body>
</html>