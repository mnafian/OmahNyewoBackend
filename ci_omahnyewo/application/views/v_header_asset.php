<html>
<head>
<title> OmahNyewo Portal </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/css/bsdocs.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" media="screen">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/holder.js"></script>


<script src="<?php echo base_url(); ?>assets/js/jquery.easing.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mousewheel.js"></script>
</head>

<header>
    <div class="navbar navbar-inverse" role="navigation" style="background-color:#bf1e2e;border:none;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?=base_url()?>/asset/images/ic_launcher.png" style="margin-top:18px;"/></span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding:20px;">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?=base_url()?>">Beranda</a></li>
                    <li class=""><a href="index.php">Temukan</a></li>
					<li class=""><a href="<?=base_url()?>c_home_control/pasang_iklan/">Pasang Iklan</a></li>
					<li class=""><a href="index.php">Tentang Kami</a></li>
                </ul>
                <form class="navbar-form navbar-right" role="" action="core/page/ceklogin.php">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" required="">

                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">

                    </div>
                    <button type="submit" class="btn btn-info">Login</button>&nbsp;
                    <a href="index.php?page=register"><button type="button" class="btn btn-success">Daftar</button></a>
                </form>
                
            </div><!-- /.navbar-collapse -->
        </div>
    </div>
	</header>