<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="style.css">
   </head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #4070f4;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
    </style>
   <div class="wrapper">
    <h2>Login</h2>
    <?php echo form_open('login/cekLogin') ?>
    <div class="login-box">
<div class="card card-outline card-primary ">
    <div class="card-header text-center">
      <a href="<?= base_url('Auth') ?>" class="h2"><?= $judul ?></a>
    </div>
    <div class="card-body">
    <?php 
      
      $errors = session()->getFlashdata('errors');
      if (!empty ($errors)) { ?>
       <div class="alert alert-danger" role="alert">
        <h4>Periksa Entry Form</h4>
        <ul>
          <?php foreach ($errors as $key => $error) { ?>
            <li><?= esc($error) ?></li>
          <?php } ?>
        </ul>
       </div>
      <?php } ?>
      <?php
      if(session()->getFlashdata('pesan')){
        echo' <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>';
        echo session()->getFlashdata('pesan');
        echo '</h5></div>';
      }
      ?>
     
        </div>
      <?php echo form_close() ?>
      <?php echo form_open('Auth/Daftar')?>
    <div class="row">
    <div class="col-sm-6">
    
        <div class="form-group mb-3">
          <input type="text" name="nama" class="form-control" value="<?= old('nama') ?>" placeholder="Nama">
        </div>
    </div>
    <div class="col-sm-6">
    
        <div class="form-group mb-3">
        <input type="text" name="telp" class="form-control" value="<?= old('telp') ?>" placeholder="No telepon">
        </div>
    </div>
    <div class="col-sm-6">
    <label>Jenis Kelamin</label><br>
    <select name="jk" class="form-control">
      <option value="laki-laki" place>laki-laki</option>
      <option value="perempuan">perempuan</option>
    </select>
    </div>
    
    <div class="col-sm-6">
    
        <div class="form-group mb-3">
        <input type="text" name="alamat" class="form-control" value="<?= old('alamat') ?>" placeholder="Alamat">
        </div>
    </div>
    <div class="col-sm-6 mb-3">
    <label>Role</label><br>
    <select name="role" class="form-control">
      <option value="petugas">Petugas</option>
      <option value="anggota">Anggota</option>
    </select>
    </div>
    
    <div class="col-sm-6">
    
        <div class="form-group mb-3">
        <input type="text" name="email" class="form-control" value="<?= old('email') ?>" placeholder="Email">
        </div>
    </div>
    <div class="col-sm-6">
    
        <div class="form-group mb-3 m">
        <input type="text" name="username" class="form-control"value="<?= old('username') ?>" placeholder="username">
        </div>
    
    </div>
    <div class="col-sm-6">
   
        <div class="form-group mb-4">
          <input type="password" class="form-control" name="password" value="<?= old('password') ?>" placeholder="password">
        </div>
    </div>
    <div class="col-sm-12">
    
        <div class="form-group mb-3">
          <input type="password" class="form-control" name="ulangi_password" value="<?= old('password') ?>"placeholder="ulangi password">
        </div>
     </div>
    

    </div>
        <div class="row">
          <div class="col-sm-6">
            <a class="btn btn-success btn-block " href="<?= base_url('Auth') ?>">Kembali</a>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          
          <!-- /.col -->
        </div>
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="<?= base_url('Auth/LoginAnggota') ?>" class="btn btn-block btn-warning">
          <i class="fa fa-sign-in-alt"></i> Kembali Login
        </a>
      </div>
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
    <?php echo form_close() ?>
  </div>
</div>
</body>
</html>



