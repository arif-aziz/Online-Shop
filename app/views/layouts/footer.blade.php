		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
			<!-- content ends -->
			</div><!--/#content.span10-->
		<?php } ?>
		</div><!--/fluid-row-->
		<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
		
		<hr>

		<!-- set akun -->
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Set Akun </h3>
			</div>
			<div class="modal-body">
				
				<div id="tab" class="btn-group" data-toggle="buttons-radio">
					<a href="#prices" class="btn active" data-toggle="tab">Ubah Email</a>
				  	<a href="#features" class="btn" data-toggle="tab">Ubah Password</a>
				</div>
				 
				<div class="tab-content">
				  	<div class="tab-pane active" id="prices">
				  		<form class="form-horizontal" action='' method="POST">
		                    <fieldset>
		                    	<div class="control-group">
			                        <!-- Username -->
			                        <label class="control-label"  for="username">Email Baru</label>
			                        <div class="controls">
			                        	<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
			                        </div>
		                      	</div>
		 
		                      	<div class="control-group">
			                        <!-- Password-->
			                        <label class="control-label" for="password">Password</label>
			                        <div class="controls">
			                        	<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
			                        </div>
		                      	</div>
		 
		                      	<div class="control-group">
			                        <!-- Button -->
			                        <div class="controls">
			                        	<button class="btn btn-success">Simpan</button>
			                          	<a href="#" class="btn" data-dismiss="modal">Batal</a>
			                        </div>
		                      	</div>
		                    </fieldset>
	                  	</form>
				  	</div>
					<div class="tab-pane" id="features">
					  	<form class="form-horizontal" action='' method="POST">
		                    <fieldset>  
		                    	<div class="control-group">
			                        <!-- Username -->
			                        <label class="control-label"  for="username">Password Lama</label>
			                        <div class="controls">
			                        	<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
			                        </div>
		                      	</div>
		                      	
		                      	<div class="control-group">
			                        <!-- Username -->
			                        <label class="control-label"  for="username">Password Baru</label>
			                        <div class="controls">
			                        	<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
			                        </div>
		                      	</div>
		 
		                      	<div class="control-group">
			                        <!-- Password-->
			                        <label class="control-label" for="password">Konfirmasi Password</label>
			                        <div class="controls">
			                        	<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
			                        </div>
		                      	</div>
		 
		                      	<div class="control-group">
			                        <!-- Button -->
			                        <div class="controls">
			                        	<button class="btn btn-success">Simpan</button>
			                          	<a href="#" class="btn" data-dismiss="modal">Batal</a>
			                        </div>
		                      	</div>
		                    </fieldset>
		                </form>
					</div>
				</div>

			</div>
		</div>

		<!-- detail produk -->
		<div class="modal hide fade modal-barang" id="barang" style="top:40%;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Mobil Avansa th 2010 </h3>
			</div>

			<ul class="detail-info">
	          	<p></p>
	            <i class="icon-user"></i> oleh <a href="#">Arif Rahman Aziz</a>
	             | <i class="icon-calendar"></i> 16 September 2012
		         | <i class="icon-shopping-cart"></i> <a href="#"> Toko Onlineku</a>
		         | <i class="icon-list-alt"></i> Kategori : Mobil
		         | <i class="icon-globe"></i> Madiun
		         | Kondisi : <span class="label label-warning">Baru</span><br>
	        </ul>
			
			<div class="modal-body">
				<div class="span8" style="margin-left: 0px;">
                    <div class="span8" id="slider" style="margin-left: 0px;">
                            <!-- Top part of the slider -->
                            <div class="row" style="">
                                    <div class="span8" id="carousel-bounding-box" style="">
                                        <div id="myCarousel" class="carousel slide" style="">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner" style="">
                                                        <div class="active item" data-slide-number="0"><img src="" style="height:400px"/></div>
                                                        <div class="item" data-slide-number="1"><img src="" style="height:400px"/></div>
                                                        <div class="item" data-slide-number="2"><img src="" style="height:400px"/></div>
                                                        <div class="item" data-slide-number="3"><img src="" style="height:400px"/></div>
                                                        <div class="item" data-slide-number="4"><img src="" style="height:400px"/></div>
                                                        <div class="item" data-slide-number="5"><img src="" style="height:400px"/></div>
                                                </div>
                                                <!-- Carousel nav -->
                                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                                                <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                                        </div>
                                    </div>   
                            </div>
                    </div>

                    <div class="row hidden-phone" id="slider-thumbs">
                                <div class="span8" style="padding-left:40px; margin-left: 0px;">
                                        <!-- Bottom switcher of slider -->
                                        <ul class="thumbnails">
                                                <li>
                                                        <a class="thumbnail" id="carousel-selector-0">
                                                                <img src="" />
                                                        </a>
                                                </li>
                                                <li>
                                                        <a class="thumbnail" id="carousel-selector-1">
                                                                <img src="" />
                                                        </a>
                                                </li>
                                                <li>
                                                        <a class="thumbnail" id="carousel-selector-2">
                                                                <img src="" />
                                                        </a>
                                                </li>
                                                <li>
                                                        <a class="thumbnail" id="carousel-selector-3">
                                                                <img src="" />
                                                        </a>
                                                </li>
                                                <li>
                                                        <a class="thumbnail" id="carousel-selector-4">
                                                                <img src="" />
                                                        </a>
                                                </li>
                                                <li>
                                                        <a class="thumbnail" id="carousel-selector-5">
                                                                <img src="" />
                                                        </a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
					
				</div>

				<div class="span4" id="carousel-text" style="width: 430px;">
					<h2 style="color:#FF7A00">Rp 9.000.000</h2>
					<br>
					<ul class="dashboard-list">
						<h3>Deskripsi</h3>
						<li style="border-bottom:none; border-color:lightGrey"></li>
						<li style="border-top:none; overflow:auto; height:200px" >
							<p>
								Toko Onlineku menjual keperluan sehari-hari.as,faksjf

								Toko Onlineku menjual keperluan sehari-hari.as,faksjfToko Onlineku menjual keperluan sehari-hari.as,faksjf

							</p>
						</li>
						<br>
						<h3>Detail</h3>
						<li style="border-bottom:none; border-color:lightGrey"></li>
						<li style="border-top:none">
							<p><strong>Berat : </strong>2000 Kg<br></p>
							<p><strong>Kuantitas : </strong>3<br></p>
							<p><strong>Harga Pengiriman 1 Item Pertama : </strong>Rp 0 <br></p>
							<p><strong>Harga Pengiriman Item Selanjutnya : </strong> Rp 0 <br></p>
							<p><strong>Model Transaksi : </strong>
								<span class="label label-info">COD</span>
								<span class="label label-info">Appraisal</span>
								<span class="label label-info">Rekening Bersama</span>
								<span class="label label-info">Appraisal dan Kirim Dalam Kota</span>
								<span class="label label-info">Appraisal dan Kirim Luar Kota</span>
								<br>
							</p>
						</li>
					</ul>	

                </div>

			</div>
		</div>

		<!-- login member -->
		<div class="modal hide fade" id="loginuser" style="overflow:none; min-height:357px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
			</div>
			<div class="modal-body" style="overflow:none">
				 						
				<div class="row-fluid" style="overflow:none">
					<div class="well span12 center login-box" style="overflow:none">
						<div class="alert alert-info">
							Login dengan Username dan Password Anda.
						</div>
						<form class="form-horizontal" action="index.php" method="post">
							<fieldset>
								<div class="input-prepend" title="Username" data-rel="tooltip">
									<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="admin" />
								</div>
								<div class="clearfix"></div>

								<div class="input-prepend" title="Password" data-rel="tooltip">
									<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="admin123456" />
								</div>
								<div class="clearfix"></div>

								<div class="input-prepend">
									<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
								</div>
								<div class="clearfix"></div>

								<p class="center span5">
									<button type="submit" class="btn btn-primary">Login</button>
								</p>
							</fieldset>
						</form>
				  	</div>				  	
				</div>
				
			</div>
		</div>

		<!-- tambah ke keranjang -->
		<div class="modal hide fade" id="tambahKeranjang" style="overflow:none; min-height:265px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3 style="border-bottom: 2px solid #E6E6E6; padding-bottom: 5px;">Tambahkan ke Keranjang Belanja</h3>
			</div>
			<div class="modal-body">
				<form action="/keranjang" method="post" class="form-horizontal">
					<fieldset>
						<input class="hide listing-confirm-id" name="txt_id_listing">
						<input class="hide listing-confirm-price" name="txt_listing_price">
						<input class="hide listing-confirm-store" name="txt_store">
						<div class="control-group">
							<label class="control-label" for="selectError3">Model Transaksi</label>
							<div class="controls">
							  	<select name="selc_transaction_model" id="tipe_transaksi">
							  	</select>
							  	<p class="help-block">Selain COD, akan dikenai biaya tertentu. Lihat kebijakan transaksi.</p>
							</div>
						</div>
						<div class="control-group">
						  	<label class="control-label" for="typeahead">Jumlah Produk</label>
						  	<div class="controls">
								<select name="selc_quantity" class="listing-confirm-model" id="quantity">
							  	</select>
								<p class="help-block">Jumlah barang yang ingin Anda beli</p>
						  	</div>
						</div>
						<div class="control-group">
	                        <!-- Button -->
	                        <div class="controls">
	                        	<button type="submit" class="btn btn-success" data-validation-required-message="Form tidak boleh kosong">Tambah ke Keranjang Belanja</button>
	                          	<a href="#" class="btn" data-dismiss="modal">Batal</a>
	                        </div>
                      	</div>
					</fieldset>
				</form>
			</div>
		</div>

		<!-- check out -->
		<div class="modal hide fade" id="checkOut" style="overflow:none; min-height:265px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3 style="border-bottom: 2px solid #E6E6E6; padding-bottom: 5px;">Check Out Belanjaan</h3>
			</div>
			<div class="modal-body">
				<form action="/checkout" method="post" class="form-horizontal">
					<fieldset>
						<input class="iduser" name="txt_id_user">
						<input class="idstore" name="txt_id_store">
						<input class="total" name="txt_total">
						<input class="transaksi_model" name="txt_model">
						<input class="quantity" name="txt_qty">
						<div class="control-group">
	                        <!-- Button -->
	                        <div class="controls">
	                        	<button type="submit" class="btn btn-success">Check Out</button>
	                          	<a href="#" class="btn" data-dismiss="modal">Batal</a>
	                        </div>
                      	</div>
					</fieldset>
				</form>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="" target="_blank">Arif Rahman Aziz</a> <?php echo date('Y') ?></p>
			<p class="pull-right">Powered by: <a href="">Bootstrap &amp; Charisma</a></p>
		</footer>
		<?php } ?>

	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- transition / effect library -->
	<script src="/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->/
	<script src='/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="/js/excanvas.js"></script>
	<script src="/js/jquery.flot.min.js"></script>
	<script src="/js/jquery.flot.pie.min.js"></script>
	<script src="/js/jquery.flot.stack.js"></script>
	<script src="/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="/js/jquery.history.js"></script>
	<!-- application script for Charisma /demo -->
	<script src="/js/charisma.js"></script>
	<script src="/js/jquery.bootstrap.wizard.js"></script>
	<script src="/js/jquery.bootstrap.wizard.min.js"></script>
	
	@yield('script');

	<!-- or use local jquery -->
	<script src="/js/jqBootstrapValidation.js"></script>
	<script>
					jQuery(document).ready(function($) {
					 
					        $('#myCarousel').carousel({
					                interval: 5000
					        });
					 
					        $('#carousel-text').html($('#slide-content-0').html());
					 
					        //Handles the carousel thumbnails
					        $('[id^=carousel-selector-]').click( function(){
					                var id_selector = $(this).attr("id");
					                var id = id_selector.substr(id_selector.length -1);
					                var id = parseInt(id);
					                $('#myCarousel').carousel(id);
					        });
					 
					 
					        // When the carousel slides, auto update the text
					        $('#myCarousel').on('slid', function (e) {
					                var id = $('.item.active').data('slide-number');
					                $('#carousel-text').html($('#slide-content-'+id).html());
					        });
					});

				  	$(function () { 
				  			$("input,textarea,submit").not("[type=reset]").jqBootstrapValidation(); 
				  	} );

		            $(function() {

		                $("input,textarea,select").jqBootstrapValidation(
		                    {
		                        preventSubmit: true,
		                        submitError: function($form, event, errors) {
		                            // Here I do nothing, but you could do something like display 
		                            // the error messages to the user, log, etc.
		                        },
		                        filter: function() {
		                            return $(this).is(":visible");
		                        }
		                    }
		                );

		                $("a[data-toggle=\"tab\"]").click(function(e) {
		                    e.preventDefault();
		                    $(this).tab("show");
		                });

		            });

					function format_number($el, value, callback) {
					    callback({
					      value: value,
					      valid: /(^[0-9]+$)/.test(value),
					      message: "Hanya karakter angka yang diizinkan"
					    });
					}

					function format_password($el, value, callback) {
					    callback({
					      value: value,
					      valid: /((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]))/.test(value),
					      message: "Password Anda lemah, gunakan kombinasi huruf besar, huruf kecil, angka dan karakter."
					    });
					}

					$(document).ready(function() {
					  	$('#rootwizard').bootstrapWizard();
					});

	</script>	
	
</body>
</html>
