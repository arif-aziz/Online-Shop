<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner" style="height: 10px;">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/" style="font-size:80px; opacity:0.1; position:absolute; width:850px; padding-top:0px"> 
					<span>Admin Online Shop</span>
				</a>
				<a class="brand" href="/" style="font-size:28px; position:absolute; width:550px; padding-top:5px"> 
					<span>Admin Online Shop</span>
				</a>
				
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid" style="margin-top: 50px;">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10 center">
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