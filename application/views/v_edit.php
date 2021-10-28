<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Crud dengan CodeIgniter</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   </head>
   <body>
      <main>
         <section class="glass">
            <div class="dashboard3">
               <h3>Form Edit Data</h3>
               <div class="form">
                  <?php foreach ($user as $u) { ?>
                     <form action="<?php echo base_url() . 'crud/update'?>" method="post">
                        <table style="margin:20px auto;">
                           <tr>
                              <td>Nama</td>
                              <td>:</td>
                              <input type="hidden" name="nim" value="<?php echo $u->nim ?>">
                              <td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
                           </tr>
                           <tr>
                              <td>Kelas</td>
                              <td>:</td>
                              <td><input type="text" name="kelas" value="<?php echo $u->kelas ?>"></td>
                           </tr>
                           <tr>
                              <td>Alamat</td>
                              <td>:</td>
                              <td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
                           </tr>
                           <td><input class="submit" type="submit" value="Simpan"></td>
                        </table>
                     </form>
                  <?php } ?>
               </div>
            </div>
            <div class="layar">
               <h3>CRUD dengan CodeIgniter</h3>
            </div>
         </section>
      </main>
      <div class="circle1"></div>
      <div class="circle2"></div>
      <center>
         <h1>Crud dengan CodeIgniter</h1>
         <h3>Form Edit Data</h3>
      </center>
   </body>
</html>