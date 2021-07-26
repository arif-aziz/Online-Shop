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
				<a class="brand" href="/" style="font-size:80px; opacity:0.1; position:absolute; width:550px; padding-top:0px"> 
					<span>Online Shop</span>
				</a>
				<a class="brand" href="/" style="font-size:28px; position:absolute; width:550px; padding-top:5px"> 
					<span>Online Shop</span>
				</a>
				
			@if(Auth::check())
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"  style="border:0px solid white" >
						<i class="icon-user"></i><span class="hidden-phone"> {{ Auth::user()->username }}</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{ URL::to('user') }}/{{ Auth::user()->id_user }}">Profil</a></li>
						<li><a href="#" class="btn-setting">Akun</a></li>
						<li class="divider"></li>
						<li><a href="{{ URL::to('logout') }}">Keluar</a></li>
					</ul>
				</div>
				<div class="btn-group pull-right hide" >
					<a class="btn dropdown-toggle" href="#" style="border:0px solid white; background:red" >
						<span class="hidden-phone" style="color:white;"> 3</span>
					</a>
					<a class="btn dropdown-toggle" href="#" style="border:0px solid white" >
						<i class="icon-envelope"></i><span class="hidden-phone"> Pesan</span>
					</a>
				</div>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" href="{{ URL::to('keranjang') }}" style="border:0px solid white" >
						<i class="icon-shopping-cart"></i><span class="hidden-phone"> Keranjang Belanja</span>
					</a>
				</div>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" href="/" style="border:0px solid white" >
						<i class="icon-gift"></i><span class="hidden-phone"> Beli</span>
					</a>
					<a class="btn dropdown-toggle" href="/listing" style="border:0px solid white" >
						<i class="icon-th-list"></i><span class="hidden-phone"> Listing</span>
					</a>
				</div>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" href="/dashboard" style="border:0px solid white" >
						<i class="icon-home"></i><span class="hidden-phone"> Dashboard</span>
					</a>
				</div>
				<!-- user dropdown ends -->
			@else
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"  style="border:0px solid white" >
						<i class="icon-circle-arrow-down"></i><span class="hidden-phone"> Login</span>
					</a>
					<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
						<form action="/login" method="post">
							<input autofocus style="margin-bottom: 15px;" placeholder="Username" type="text" name="txt_login_username">
							<input style="margin-bottom: 15px;" placeholder="Password" type="password" name="txt_login_password">
							<div class="input-prepend" >
								<label class="remember" style="margin-top: 0px;margin-bottom: 10px;" for="remember">
									<input type="checkbox" name="chk_remember"> Ingat saya
								</label>
							</div>
							<div class="clearfix"></div>
							<button style="width: 100%;" type="submit" class="btn btn-primary btn-block">Masuk</button>
							<label style="text-align:center; margin-top:5px">atau</label>
						</form>
						<a href="{{ URL::to('register') }}" style="width: 150px; margin-top: -15px; margin-bottom: 15px; color: white; font-weight: bold;" class="btn btn-success btn-block" type="button" id="sign-in-google">Registrasi Akun</a>
					</div>
				</div>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" href="{{ URL::to('keranjang') }}" style="border:0px solid white" >
						<i class="icon-shopping-cart"></i><span class="hidden-phone"> Keranjang Belanja</span>
					</a>
				</div>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" href="{{ URL::to('/') }}" style="border:0px solid white" >
						<i class="icon-home"></i><span class="hidden-phone"> Home</span>
					</a>
				</div>
				<!-- user dropdown ends -->
			@endif

				<div class="box-content" style="padding:0px">
					<!-- Pencarian -->
					<form class="form-horizontal" action="/searchresult" method="post">
						<fieldset style="margin-left:-160px">
									
							<div class="controls" style="padding-top:10px">
								<div class="input-append cari-background">
									<input style="padding:14.5px; width:235px;" class="search-query span2" size="16" placeholder="Cari barang / jasa disini..." type="text" name="txt_search">
									<select style="margin-left: -4px;" class="select-pencarian" name="selc_kategori">
										<option value="">Semua Kategori</option>
										<?php $categories = Category::where('category_level',1)->get(); ?>
										@foreach ($categories as $category)
											<optgroup label="{{ $category->category_name }}">
												@foreach ($category->subcat as $sub_category)
<<<<<<< HEAD
 											  		<option value="{{ $sub_category->id_category }}">{{ $sub_category->category_name }}</option>
 											  	@endforeach
=======
											  		<option value="{{ $sub_category->id_category }}">{{ $sub_category->category_name }}</option>
											  	@endforeach
>>>>>>> cd78434bbfd8e10109f007ff3ba8cc6e2ea8e7a8
											</optgroup>
										@endforeach
								  	</select>
								  	<select name="selc_kabupaten" style="margin-left: -5px; width:200px" class="select-pencarian" id="selc_kabupaten">
								  		<option value="0">Pilih Kabupaten</option>
								  	</select>
								  	<select name="selc_kecamatan" style="margin-left: -5px; width:200px" class="select-pencarian" id="selc_kecamatan">
								  		<option value="0">Pilih Kecamatan</option>
								  	</select>
								  	<button class="btn btn-cari" type="submit" style="width: 100px; margin-left: -10px; height: 49px; padding:15px; margin: 0px 0px 0px 0px;">
										<i class="icon32 icon-black icon-search" style="margin-top: -7px;"></i>
									</button>
								</div>
						  	</div>
						</fieldset>
					</form>

				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$.getJSON("/area/kota", "", function(json){
				$.each(json.area, function(k, v){
					$("#selc_kabupaten").append("<option value='" + v.id_kota + "'>" + v.nama + "</option>");
				});

			});

			$("#selc_kabupaten").on("change", function(){
				$.getJSON("/area/kecamatan/" + $(this).val(), "", function(json){

					$("#selc_kecamatan").html("").append("<option value='0'>Pilih Kecamatan</option>");
					$.each(json.area, function(k, v){
						$("#selc_kecamatan").append("<option value='" + v.id_kec + "'>" + v.nama + "</option>");
					});
				});
			});

		})
	</script>
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid" style="margin-top: 50px;">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
			@if(Auth::check())
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet" style="padding-bottom:12px; font-weight:bold;">Aktifitasku</li>
						<li><a class="ajax-link" href="{{ URL::to('transaksi') }}"><i class="icon-folder-open"></i><span class="hidden-tablet"> Transaksi</span></a></li>
						<li><a class="ajax-link" href="{{ URL::to('balance') }}"><i class="icon-calendar"></i><span class="hidden-tablet"> Saldo</span></a></li>
						<?php $store = Store::firstOrFail(); ?>
						@if(Auth::user()->id_user == $store->id_user)
						<li><a class="ajax-link" href="{{ URL::to('') }}/{{ $store->store_permalink }}"><i class="icon-briefcase"></i><span class="hidden-tablet"> Toko</span></a></li>
						@else
						<li><a class="ajax-link" href="{{ URL::to('store/add') }}"><i class="icon-briefcase"></i><span class="hidden-tablet"> Toko</span></a></li>
						@endif
					</ul>
				</div><!--/.well -->
			@endif
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet" style="padding-bottom:12px; font-weight:bold;">Kategori Umum</li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Semua Kategori</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Antik &amp; Koleksi</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Elektronika &amp; Teknologi</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Fashion</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Film, Musik &amp; Buku</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Seni &amp; Kerajinan</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Otomotif</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Alat Rumah Tangga</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Hobi &amp; Olahraga</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Lain-lain</span></a></li>
						<li class="nav-header hidden-tablet" style="padding-bottom:12px; font-weight:bold;">Kategori Spesial</li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Mobil &amp; Motor</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Rumah &amp; Tanah</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Layanan Rumah</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Teknisi</span></a></li>
						<li><a class="ajax-link" href=""><span class="hidden-tablet"> Kos &amp; Apartemen</span></a></li>
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