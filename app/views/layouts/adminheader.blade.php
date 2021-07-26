<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner" style="min-height: 35px; box-shadow: 2px 2px 15px gray;">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#" style="font-size:28px; position:absolute; width:550px; padding-top:5px"> 
					<span>Admin Online Shop</span>
				</a>
				
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"  style="border:0px solid white" >
						<i class="icon-user"></i><span class="hidden-phone"> Admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="user.php">Profil</a></li>
						<li><a href="#" class="btn-setting">Akun</a></li>
						<li class="divider"></li>
						<li><a href="{{ URL::to('admin/logout') }}">Keluar</a></li>
					</ul>
				</div>
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" href="#" style="border:0px solid white; background:red" >
						<span class="hidden-phone" style="color:white;"> 3</span>
					</a>
					<a class="btn dropdown-toggle" href="#" style="border:0px solid white" >
						<i class="icon-user"></i><span class="hidden-phone"> Pesan</span>
					</a>
				</div>
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" href="#" style="border:0px solid white; background:red" >
						<span class="hidden-phone" style="color:white;"> 3</span>
					</a>
					<a class="btn dropdown-toggle" href="#" style="border:0px solid white" >
						<i class="icon-user"></i><span class="hidden-phone"> Permintaan Jasa</span>
					</a>
				</div>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" href="index.php" style="border:0px solid white" >
						<i class="icon-user"></i><span class="hidden-phone"> Dashboard</span>
					</a>
				</div>
				<!-- user dropdown ends -->
				

			</div>
		</div>
	</div>
	<!-- topbar ends -->

	<?php } ?>
	<div class="container-fluid" style="margin-top: 50px;">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet" style="padding-bottom:12px; font-weight:bold;">Aktifitas Umum</li>
						<li><a class="ajax-link" href="member.php"><i class="icon-th"></i><span class="hidden-tablet"> Data Member</span></a></li>
						<li><a class="ajax-link" href="saldo.php"><i class="icon-calendar"></i><span class="hidden-tablet"> Data Saldo</span></a></li>
						<li><a class="ajax-link" href="toko.php"><i class="icon-th"></i><span class="hidden-tablet"> Data Kategori</span></a></li>
					</ul>
				</div><!--/.well -->
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet" style="padding-bottom:12px; font-weight:bold;">Aktifitas Khusus</li>
						<li><a class="ajax-link" href="toko.php"><i class="icon-th"></i><span class="hidden-tablet"> Data Admin</span></a></li>
						<li><a class="ajax-link" href="toko.php"><i class="icon-th"></i><span class="hidden-tablet"> Data Mediator</span></a></li>
						<li><a class="ajax-link" href="toko.php"><i class="icon-th"></i><span class="hidden-tablet"> Data Ahli</span></a></li>
					</ul>
				</div><!--/.well -->
						
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } ?>

		@if(Session::has('flash_notice'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				{{ Session::get('flash_notice') }}
			</div>
		@endif

		@if (Session::has('flash_error'))
	        <div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">×</button>
				{{ Session::get('flash_error') }}
			</div>
	    @endif
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
			</div>