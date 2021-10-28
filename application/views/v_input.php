<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Crud Dengan Code Igniter</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   </head>
   <body>
      <main>
         <section class="glass">
            <div class="dashboard2">
               <h3>Form Tambah Data Baru</h3>
               <div class="form">
                  <form action="<?php echo base_url() . 'crud/tambah_aksi';?>" method="post">
                     <table >
                        <tr>
                           <td>Nim</td>
                           <td>:</td>
                           <td><input type="text" name="nim" id=""></td>
                        </tr>
                        <tr>
                           <td>Nama</td>
                           <td>:</td>
                           <td><input type="text" name="nama" id=""></td>
                        </tr>
                        <tr>
                           <td>Kelas</td>
                           <td>:</td>
                           <td><input type="text" name="kelas" id=""></td>
                        </tr>
                        <tr>
                           <td>Alamat</td>
                           <td>:</td>
                           <td><input type="text" name="alamat" id=""></td>
                        </tr>
                        <td><input class="submit" type="submit" value="Tambah"></td>
                     </table>
                  </form>
               </div>
            </div>
            <div class="layar">
               <h3>CRUD dengan CodeIgniter</h3>
            </div>
         </section>
      </main>
      <div class="circle1"></div>
      <div class="circle2"></div>
   </body>
</html>