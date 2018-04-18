<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.css">
	  <link rel="stylesheet" href="<?php echo base_url()?>css/dataTables.bootstrap.min.css">
	  <link rel="stylesheet" href="<?php echo base_url()?>css/site.css">
      <script src="<?php echo base_url()?>js/jquery.min.js"></script>
      <script src="<?php echo base_url()?>js/bootstrap.js"></script> 
      <script src="<?php echo base_url()?>js/jquery.dataTables.min.js"></script> 
  	  <script src="<?php echo base_url()?>js/dataTables.bootstrap.min.js"></script> 
	<title>Welcome to CodeIgniter</title>


</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-envelope"></span></a>
        	<span class="counter">3</span>
	  		<ul class="dropdown-menu">
	    		<li><a href="#">HTML</a></li>
	    		<li><a href="#">CSS</a></li>
	    		<li><a href="#">JavaScript</a></li>
	  		</ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li class="dropdown">
        	<a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown" aria-expanded="false" style="padding-top:10px;padding-bottom:5px;">
        		<div class="peer mR-10"><img class="avatar" src="<?php echo base_url() ?>image/img_avatar.png" alt=""></div>
        	</a>
        	<ul class="dropdown-menu fsz-sm">
        		<li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a></li><li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a></li><li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li><li role="separator" class="divider"></li><li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
        	</ul>
        </li>
        <!-- <li> <img src="<?php //echo base_url() ?>image/img_avatar.png" alt="Avatar" class="avatar mR-10"></li> -->
      </ul>

    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4></h4>
    	
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="<?php echo base_url()?>welcome/index.asp">Home</a></li>
        <li><a href="<?php echo base_url()?>buku/index.asp">Buku</a></li>
        <li><a href="<?php echo base_url()?>anggota/index.asp">Anggota</a></li>
        <li><a href="<?php echo base_url()?>peminjaman/index.asp">Peminjaman</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
    	<div class="loading_new">
    	</div>
    		
      <div class="row" style="padding-left: 15px;">
        	<?php echo $partial_view; ?>
      </div>
    </div>

  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
<style type="text/css">
.counter {
      background-color: #ff3c7e;
      border-radius: 40px;
      color: #fff;
      font-size: 9px;
      line-height: 1;
      padding: 3px 5.5px;
      position: absolute;
      right: 8px;
      top: 8px;
    }

.loading_new{
	position: fixed;
	display: none;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('../image/loading.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
    }
.avatar {
	/*top: 18px;*/
    display: block;
    /*height: auto;*/
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    text-align: center;
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

.mR-10 {

    margin-right: 10px !important;

}
</style>