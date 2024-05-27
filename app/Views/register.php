<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <style>
      *{
	padding: 0;
	margin: 0;
}
body{
  background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
  background-size: cover;
}

.container{
	background: #2d3e3f;
	width: 350px;
	height: 400px;
	padding-bottom: 20px;
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
  padding: 70px 50px 20px 50px;
}


.fl{
	float: left;
  width: 110px;
  line-height: 35px;
}

.fontLabel{
  color: white;
}

.fr{
	float: right;
}

.clr{
	clear: both;
}

.box{
	width: 360px;
	height: 35px;
	margin-top: 10px;
	font-family: verdana;
	font-size: 12px;
}

.textBox{
	height: 35px;
	width: 190px;
	border: none;
  padding-left: 20px;
}

.new{
  float: left;
}

.iconBox{
	height: 35px;
	width: 40px;
	line-height: 38px;
	text-align: center;
  background: #ff6600;
}

.radio{
	color: white;
	background: #2d3e3f;
	line-height: 38px;
}

.terms{
	line-height: 35px;
	text-align: center;
	background: #2d3e3f;
	color: white;
}

.submit{
	float: right;
	border: none;
	color: white;
	width: 110px;
	height: 35px;
	background: #ff6600;
	text-transform: uppercase;
  cursor: pointer;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */

}


    </style>
    <!-- Body of Form starts -->
  	<div class="container">
      <form method="post" autocomplete="on">
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

<?php echo form_open('register/login')?>
        <!--First name-->
    		<div class="box">
          <label type="text" name="nama" class="fl fontLabel" value="<?= old('nama') ?>" placeholder="Nama"> Nama: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="nama" placeholder="Nama"
              class="textBox" autofocus="on" value="<?= old('nama') ?>" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Second name-->
    		<div class="box">
          <label for="telp" type="text" name="telp" class="fl fontLabel" value="<?= old('telp') ?>" placeholder="No telepon"> No Telp: </label>
    			<div class="fl iconBox" ><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="notelp" type="text" name="telp" value="<?= old('telp') ?>"
              placeholder="No Telepon" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Second name-->


    		<!---Phone No.------>
    		<div class="box">
          <label for="alamat" class="fl fontLabel"> Alamat </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" name="alamat" maxlength="10" value="<?= old('alamat') ?>"  placeholder="Alamat" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->
			<div class="col-sm-6 mb-3">
    <label>Role</label><br>
    <select name="role" class="form-control">
      <option value="petugas">Petugas</option>
      <option value="anggota">Anggota</option>
    </select>
    </div>

    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text"  name="email" value="<?= old('email') ?>" placeholder="Email " class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password"  name="password" value="<?= old('password') ?> placeholder="Password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password"  name="ulangi_password" value="<?= old('password') ?> placeholder="ulangi_password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->
			<div class="box">
          <label type="text" name="username" class="fl fontLabel" value="<?= old('username') ?>" placeholder="username"> username: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="username" value="<?= old('username') ?>" placeholder="username"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>

    		<!---Gender----->
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="Gender" value="Female" required> Female
    		</div>
    		<!---Gender--->


    		<!--Terms and Conditions------>
    		<!--Terms and Conditions------>



    		<!---Submit Button------>
        <div class="row">
          <div class="col-sm-6">
            <a class="btn btn-success btn-block " href="<?= base_url('register') ?>">Kembali</a>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
		  </div>
      <?php echo form_close() ?>

      <div class="social-register-links text-center mb-3">
        <p>- OR -</p>
        <a href="<?= base_url('register/login') ?>" class="btn btn-block btn-warning">
          <i class="fa fa-sign-in-alt"></i> Kembali Login
        </a>
      </div>
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>
