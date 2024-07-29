<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CBT | MADRASAH AL-MANAR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="CBT | MADRASAH AL-MANAR">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>___/img/icon.png">
</head>
<body>

<div class="" style="min-height: 50px;">
      <nav class="navbar navbar-findcond navbar-fixed-top" style="background-color: #0B6623; min-height: 70px;">
         <div class="container">
            <div class="navbar-header" style="margin-top:10px;">
               <a class="navbar-brand" style="color: #fff"><?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></a>
			</div>
         </div>
      </nav>
</div>


<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<form action="" method="post" name="fl" id="f_login" onsubmit="return login();">
	
		<div class="panel panel-default" style="margin-top: 80px">
		<p align="center" style="padding-top: 30px"><img src="../___/img/icon.png" height="150vw"/></p>
			<div class=""><h4 align="center" style="padding-top: 30px"><b>USERS LOGIN</b></h4></div>
			<div class="panel-body">
				<div id="konfirmasi"></div>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" id="username" name="username" autofocus value="" placeholder="Username" class="form-control" />
				</div> <!-- /field -->
				
				<div class="input-group top15">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="form-control"/>
				</div> <!-- /password -->
				<div class="login-actions">
					<button class="button btn btn-success col-lg-12 top15"><b>LOGIN DULU CUY !</b></button>
				</div> <!-- .actions -->
			</div>
		</div> <!-- /login-fields -->
		
		
	</form>
	</div>
</div> 


<div class="col-md-12 footer" style="background-color: #0B6623; color: #fff;">
	 <a style="color: #fff;" href="<?php echo base_url(); ?>adm"><?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi')."</a>
	 <br> Ujian Berbasis Komputer & Smartphone <br> copyright &copy" ?>
	 <a style="color: #fff;" href="<?php echo base_url()?>adm/tim">Alumni Al-Manar</a>
</div>

<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>
<script type="text/javascript">
	base_url = "<?php echo base_url(); ?>";
	uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 
</body>
</html>
