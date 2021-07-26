@extends('layouts.master')

@section('container')
	<div class="row-fluid sortable">
		<div class="box span9">
			<div class="box-header well" style="background-color:#2F799C;" data-original-title>
				<h2 style="color:white;">Tambah Listing Produk</h2>
			</div>
			
			<div class="box-content" id="rootwizard" style="background-color:white;">
				<div class="page-header wizardbackground" style="padding-bottom:10px; height:87px">
					<ul class="ul-wizard">
					  	<li class="li-wizard active"><a href="#tab1" class="gallery-edit btn" data-toggle="tab" style="font-size:12px; font-weight: normal; width:150px; padding-bottom: 17px;">
					  		<h2 style="padding-bottom: 10px; color: #E6E6E6; text-shadow: 2px 2px silver;">Step 1 <i class="icon32 icon-carat-1-e icon-gray arrow" style="margin-top:0px"></i></h2> Data Produk
					  		</a>
					  	</li>
					  	<li class="li-wizard"><a href="#tab2" class="gallery-edit btn" data-toggle="tab" style="font-size:12px; font-weight: normal; width:150px; padding-bottom: 17px;">
					  		<h2 style="padding-bottom: 10px; color: #E6E6E6; text-shadow: 2px 2px silver;">Step 2 <i class="icon32 icon-carat-1-e icon-gray arrow" style="margin-top:0px"></i></h2> Detail Produk
					  		</a>
					  	</li>
					  	<li class="li-wizard"><a href="#tab3" class="gallery-edit btn" data-toggle="tab" style="font-size:12px; font-weight: normal; width:150px; padding-bottom: 17px;">
					  		<h2 style="padding-bottom: 10px; color: #E6E6E6; text-shadow: 2px 2px silver;">Step 3 </h2> Preview Produk
					  		</a>
					  	</li>
					</ul>
				</div>

				<form class="form-horizontal" method="post" action="/listing/add" enctype="multipart/form-data">
					<fieldset>
						<div class="tab-content tab-content-new">
							<div class="tab-pane active" id="tab1" >
								<div class="well">
								<div class="control-group">
								  	<label class="control-label">Transaksi</label>
								  	<label class="radio radio-style">
										<input type="radio" name="opt_product_desire" value="Sell" checked="">
										Jual
								  	</label>
								  	<label class="radio radio-style">
										<input type="radio" name="opt_product_desire" value="Wish">
										Order
								  	</label>
								  	<label class="radio radio-style">
										<input type="radio" name="opt_product_desire" value="Offer">
										Tawarkan
								  	</label>
								</div>
								<div class="control-group">
								  	<label class="control-label" for="typeahead">Nama Produk </label>
								  	<div class="controls">
										<input type="text" name="txt_product_name" id="txt_product_name" 
											class="span10" data-rel="popover" data-content="Gunakan nama produk yang mudah dikenali."
											required aria-invalid="false">
										<p class="help-block" style="padding-top:5px"><b>Permalink</b> : 
											<input name="txt_permalink" style="float: none; display: none;" id="listing-permalink" class="permalink"/>
											<span class="permalink"></span>
										</p>
								  	</div>
								</div>
								<div class="control-group">
								  	<label class="control-label">Deskripsi </label>
								  	<div class="controls" >
										<textarea class="cleditor" name="txt_description" cols="40" rows="5"></textarea>
								  	</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="fileInput">Kategori</label>
								  		<div class="controls">
								  			
											<select data-placeholder="Pilih Kategori" name="selc_category" data-rel="chosen">
												@foreach ($categories as $category)
													<option value=""></option>
													<optgroup label="{{ $category->category_name }}">
														@foreach ($sub_categories as $sub_category)
													  		<option value="{{ $sub_category->id_category }}">{{ $sub_category->category_name }}</option>
													  	@endforeach
													</optgroup>
												@endforeach
											</select>
										
								  	</div>
								</div>
								<div class="control-group">
								  	<label class="control-label">Kondisi</label>
								  	<label class="radio radio-style">
										<input type="radio" name="opt_condition" value="1" checked="">
										Baru
								  	</label>
								  	<label class="radio radio-style">
										<input type="radio" name="opt_condition" value="2">
										Bekas
								  	</label>
								</div>
								<div class="control-group">
									<label class="control-label" for="appendedPrependedInput">Harga</label>
									<div class="controls">
									  	<div class="input-prepend input-append">
											<span class="add-on">Rp</span><input id="appendedPrependedInput" name="txt_price" size="16" type="text" 
											data-rel="popover" 
											data-content="Harga barang per item." 
											data-validation-callback-callback="format_number"
											required aria-invalid="false"><span class="add-on">.00</span>
											<label class="checkbox inline">
												<input type="checkbox" name="opt_nego" value="1"> Nego
										  	</label>
									  	</div>
									</div>
								</div>
								</div>
							</div><!-- end of tab 1-->
							<div class="tab-pane" id="tab2">
								<div class="well">
								<div class="control-group">
									<label class="control-label" for="appendedPrependedInput">Harga Selanjutnya</label>
									<div class="controls" style="padding-top: 2px;">
										<div class="input-prepend input-append">
											<span class="add-on">Rp</span><input style="height:17px;padding-bottom:5px" id="appendedPrependedInput" name="txt_next_price" size="16" type="text" data-rel="popover" data-content="Harga jual yang berlaku untuk pembelian lebih dari satu item. Boleh dikosongi." data-validation-callback-callback="format_number"><span class="add-on">.00</span>
									  	</div>
									</div>
								</div>
								<div class="control-group">
								  	<label class="control-label" for="typeahead">Berat </label>
								  	<div class="controls">
										<div class="input-append">
											<input id="appendedInput" size="16" type="text" 
											data-rel="popover" data-content="Berat per item barang." name="txt_weight"><span class="add-on">kg</span>
									  	</div>
								  	</div>
								</div>
								<div class="control-group">
								  	<label class="control-label" for="typeahead">Kuantitas </label>
								  	<div class="controls">
										<input type="text" name="txt_quantity" class="span2" data-rel="popover" data-content="Jumlah dari barang yang Anda inputkan." data-validation-callback-callback="format_number">
								  	</div>
								</div>
								<div class="control-group">
								  	<label class="control-label" for="fileInput">Model Transaksi</label>
									<div class="controls">
										<label class="checkbox inline" style="padding-left: 0px;">
											<input type="checkbox" name="opt_cod" value="1"> COD
									  	</label></br>
									  	<label class="checkbox inline" style="padding-left: 0px;">
											<input type="checkbox" name="opt_appraisal" value="1"> Appraisal
									  	</label></br>
									  	<label class="checkbox inline" style="padding-left: 0px;">
											<input type="checkbox" name="opt_rekber" value="1"> Rekber
									  	</label></br>
									  	<label class="checkbox inline" style="padding-left: 0px;">
											<input type="checkbox" name="opt_dalam_kota" value="1"> Appraisal + Kirim Dalam Kota
									  	</label></br>
									  	<label class="checkbox inline" style="padding-left: 0px;">
											<input type="checkbox" name="opt_luar_kota" value="1"> Appraisal + Kirim Luar Kota
									  	</label>
									</div>
								</div>
								<div class="control-group">
								  	<label class="control-label" for="fileInput">Upload Gambar</label>

								  	<div class="controls">
								  		<div class="row-fluid">
											<div class="span3 fileupload fileupload-new" data-provides="fileupload" style="height:170px;">
											  	<div class="fileupload-new thumbnail" style="width: 110px; height: 110px; padding:0px">
											  		<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" style="width: 73px; height: 73px; padding:5px; margin-top:15px"/>
											  	</div>
											  	<div class="fileupload-preview fileupload-exists thumbnail" style="width: 110px; height: 110px; padding:0px"></div>
											  	<br/>
											  	<span class="btn btn-file" style="cursor: pointer; width: 90px; height: 19px; padding-top: 5px; padding-bottom: 2px; margin-top: -7px;">
											  		<span class="fileupload-new">Pilih Gambar</span>
											  		<span class="fileupload-exist">Ubah</span>
											  		<input type="file" name="file_item_pic1" style="margin-top: -60px; background-color: red; opacity: 0; height: 50px; width: 210px; cursor: pointer; padding: 0px; margin-left: -20px;"/>
											  	</span><br/>
											  	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="width:90px">Hapus</a>
											</div>
											<div class="span3 fileupload fileupload-new" data-provides="fileupload" style="height:170px; margin-left:-10px">
											  	<div class="fileupload-new thumbnail" style="width: 110px; height: 110px; padding:0px">
											  		<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" style="width: 73px; height: 73px; padding:5px; margin-top:15px"/>
											  	</div>
											  	<div class="fileupload-preview fileupload-exists thumbnail" style="width: 110px; height: 110px; padding:0px"></div>
											  	<br/>
											  	<span class="btn btn-file" style="cursor: pointer; width: 90px; height: 19px; padding-top: 5px; padding-bottom: 2px; margin-top: -7px;">
											  		<span class="fileupload-new">Pilih Gambar</span>
											  		<span class="fileupload-exist">Ubah</span>
											  		<input type="file" name="file_item_pic2" style="margin-top: -60px; background-color: red; opacity: 0; height: 50px; width: 210px; cursor: pointer; padding: 0px; margin-left: -20px;"/>
											  	</span><br/>
											  	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="width:90px">Hapus</a>
											</div>
											<div class="span3 fileupload fileupload-new" data-provides="fileupload" style="height:170px; margin-left:-10px;">
											  	<div class="fileupload-new thumbnail" style="width: 110px; height: 110px; padding:0px">
											  		<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" style="width: 73px; height: 73px; padding:5px; margin-top:15px"/>
											  	</div>
											  	<div class="fileupload-preview fileupload-exists thumbnail" style="width: 110px; height: 110px; padding:0px"></div>
											  	<br/>
											  	<span class="btn btn-file" style="cursor: pointer; width: 90px; height: 19px; padding-top: 5px; padding-bottom: 2px; margin-top: -7px;">
											  		<span class="fileupload-new">Pilih Gambar</span>
											  		<span class="fileupload-exist">Ubah</span>
											  		<input type="file" name="file_item_pic3" style="margin-top: -60px; background-color: red; opacity: 0; height: 50px; width: 210px; cursor: pointer; padding: 0px; margin-left: -20px;"/>
											  	</span><br/>
											  	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="width:90px">Hapus</a>
											</div>
										</div>
										<div class="row-fluid">
											<div class="span3 fileupload fileupload-new" data-provides="fileupload" style="height:170px;">
											  	<div class="fileupload-new thumbnail" style="width: 110px; height: 110px; padding:0px">
											  		<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" style="width: 73px; height: 73px; padding:5px; margin-top:15px"/>
											  	</div>
											  	<div class="fileupload-preview fileupload-exists thumbnail" style="width: 110px; height: 110px; padding:0px"></div>
											  	<br/>
											  	<span class="btn btn-file" style="cursor: pointer; width: 90px; height: 19px; padding-top: 5px; padding-bottom: 2px; margin-top: -7px;">
											  		<span class="fileupload-new">Pilih Gambar</span>
											  		<span class="fileupload-exist">Ubah</span>
											  		<input type="file" name="file_item_pic4" style="margin-top: -60px; background-color: red; opacity: 0; height: 50px; width: 210px; cursor: pointer; padding: 0px; margin-left: -20px;"/>
											  	</span><br/>
											  	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="width:90px">Hapus</a>
											</div>
											<div class="span3 fileupload fileupload-new" data-provides="fileupload" style="height:170px; margin-left:-10px">
											  	<div class="fileupload-new thumbnail" style="width: 110px; height: 110px; padding:0px">
											  		<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" style="width: 73px; height: 73px; padding:5px; margin-top:15px"/>
											  	</div>
											  	<div class="fileupload-preview fileupload-exists thumbnail" style="width: 110px; height: 110px; padding:0px"></div>
											  	<br/>
											  	<span class="btn btn-file" style="cursor: pointer; width: 90px; height: 19px; padding-top: 5px; padding-bottom: 2px; margin-top: -7px;">
											  		<span class="fileupload-new">Pilih Gambar</span>
											  		<span class="fileupload-exist">Ubah</span>
											  		<input type="file" name="file_item_pic5" style="margin-top: -60px; background-color: red; opacity: 0; height: 50px; width: 210px; cursor: pointer; padding: 0px; margin-left: -20px;"/>
											  	</span><br/>
											  	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="width:90px">Hapus</a>
											</div>
											<div class="span3 fileupload fileupload-new" data-provides="fileupload" style="height:170px; margin-left:-10px">
											  	<div class="fileupload-new thumbnail" style="width: 110px; height: 110px; padding:0px">
											  		<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" style="width: 73px; height: 73px; padding:5px; margin-top:15px"/>
											  	</div>
											  	<div class="fileupload-preview fileupload-exists thumbnail" style="width: 110px; height: 110px; padding:0px"></div>
											  	<br/>
											  	<span class="btn btn-file" style="cursor: pointer; width: 90px; height: 19px; padding-top: 5px; padding-bottom: 2px; margin-top: -7px;">
											  		<span class="fileupload-new">Pilih Gambar</span>
											  		<span class="fileupload-exist">Ubah</span>
											  		<input type="file" name="file_item_pic6" style="margin-top: -60px; background-color: red; opacity: 0; height: 50px; width: 210px; cursor: pointer; padding: 0px; margin-left: -20px;"/>
											  	</span><br/>
											  	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="width:90px">Hapus</a>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div><!-- end of tab 2-->
							<div class="tab-pane" id="tab3">
								<div class="well">
								<div class="span6 ">
									<div class="shadow well" style="min-height: 80px">
									  	<h2>Data Produk</h2>
									  	Order <strong style="color:blue">Mesin Cuci</strong> Baru
									  	<p>Harga : 20.000.000</p>
									</div>
								</div>
								<div class="span6 ">
									<div class="shadow well" style="min-height: 80px">
										<h2>Detail Produk</h2>
									  	Model Transaksi : <strong>COD, Appraisal</strong>
									</div>
								</div>
								<div style="clear:both"></div>
								<center>
									<p>Dengan menginputkan data produk di Online Shop. Saya menyetujui semua kebijakan yang berlaku.</p>
								</center>
								<center>
								  <button type="submit" class="btn btn-primary" data-validation-required-message="Form tidak boleh kosong">Simpan Data Listing</button>
								  <button type="reset" class="btn btn-danger">Batalkan Semua</button>
								</center>
							</div><!-- end of tab 3-->
							</div>
						</div><!--end of tab-content-->

						
						<ul class="pager wizard">
							<div class="tooltip-demo shadow well menuwizard">
								<li class="previous"><a href="#">Kembali</a></li>
							  	<li class="next"><a href="#">Lanjut</a></li>
							</div>
						</ul>
						
				  	</fieldset>
				</form>   

			</div>
		</div><!--/span-->

		<div class="box span3 kontengambar" >
			<div class="box-header well" style="background-color:#D62B00;">
				<h2 style="color:white;">Aturan Penjualan</h2>
			</div>
			<div class="box-content" style="background-color:white;">
				<ol>
				  <li>Lorem ipsum dolor sit amet</li>
				  <li>Consectetur adipiscing elit</li>
				  <li>Integer molestie lorem at massa</li>
				  <li>Facilisis in pretium nisl aliquet</li>
				  <li>Nulla volutpat aliquam velit</li>
				  <li>Faucibus porta lacus fringilla vel</li>
				  <li>Aenean sit amet erat nunc</li>
				  <li>Eget porttitor lorem</li>
				</ol> 
			</div>
		</div>
	</div><!--/row-->
	

@endsection

@section("script")

<script type="text/javascript" src="/js/jquery.slug.js"></script>
<script type="text/javascript" src="/js/bootstrap-fileupload.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#txt_product_name").slug({ 
				slug:'permalink', // class of input / span that contains the generated slug 
				hide: true       // hide the text input, true by default 
			}); 
			$('.fileupload').fileupload();
		});
	</script>

@endsection