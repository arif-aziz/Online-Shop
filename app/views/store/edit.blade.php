@extends('layouts.master')

@section('container')
	
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" style="background-color:#2F799C;" data-original-title>
				<h2 style="color:white;">Pengaturan Toko</h2>
			</div>
			<div class="box-content">
				
				<form class="form-horizontal" action="/store/add" method="post">
					<fieldset>

						<div class="span6 ">
							<div class="shadow well" style="min-height: 80px; padding-top:30px">
							  	<div class="control-group" style="margin-left: -50px;">
								  	<label class="control-label" for="typeahead">Nama Toko </label>
								  	<div class="controls">
										<input type="text" class="span11" name="txt_store_name" id="txt_store_name"
									  		data-rel="popover" data-content="Gunakan nama toko yang menarik." 
									  		required aria-invalid="false">
									  	<p class="help-block" style="padding-top:5px"><b>Permalink</b> : 
											<input name="txt_permalink" style="float: none; display: none;" id="listing-permalink" class="permalink"/>
											<span class="permalink"></span>
										</p>
								  	</div>
								</div>
								<div class="control-group" style="margin-left: -50px;">
								  	<label class="control-label" for="typeahead">Tagline Toko </label>
								  	<div class="controls">
										<input type="text" class="span11" name="txt_store_tagline" 
											data-validation-uppercase-regex="^[a-z0-9_-]{3,15}$" 
											data-validation-uppercase-message="Hanya karakter huruf kecil, spasi, tanda ( _ ) dan tanda ( - ) yang diizinkan."
								  			data-rel="popover" data-content="Gunakan tagline yang menarik bagi toko Anda.">
								  	</div>
								</div>
								<div class="control-group" style="margin-left: -50px;">
								  	<label class="control-label" for="typeahead">Deskripsi </label>
								  	<div class="controls">
										<textarea class="autogrow" cols="500" rows="8" style="width:305px"
										data-rel="popover" data-content="Deskripsikan segala sesuatu tentang toko Anda."></textarea>
								  	</div>
								</div>
							</div>
						</div>
						<div class="span6 ">
							<div class="shadow well" style="min-height: 80px; padding-top:30px">
								<div class="control-group" >
									<label class="control-label" for="lbl_provinsi">Provinsi </label>
									<div class="controls">
										<select name="reg_selc_provinsi" id="reg_selc_provinsi">
											<option value="0">Pilih Provinsi</option>
									  	</select>
									</div>
								</div>
								<div class="control-group" >
									<label class="control-label" for="lbl_kabupaten">Kabupaten / Kota </label>
									<div class="controls">
									  	<select name="reg_selc_kabupaten" id="reg_selc_kabupaten">
											<option value="0">Pilih Kabupaten</option>
									  	</select>
									</div>
								</div>
								<div class="control-group">
								  	<label class="control-label" for="fileInput" style="margin-top:15px">Upload Header Toko</label>
								  	<div class="controls">
								  		<div class="span12 fileupload fileupload-new" data-provides="fileupload" style="height:168px;">
										  	<div class="fileupload-new thumbnail" style="width: 280px; height: 110px; padding:0px">
										  		<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" style="width: 270px; height: 100px; padding:5px; "/>
										  	</div>
										  	<div class="fileupload-preview fileupload-exists thumbnail3" style="width: 280px; height: 115px; padding:0px"></div>
										  	<br/>
										  	<span class="btn btn-file" style="cursor: pointer; width: 260px; height: 19px; padding-top: 5px; padding-bottom: 2px; margin-top: -5px;">
										  		<span class="fileupload-new" style="padding: 0 80px 0 80px;">Pilih Gambar</span>
										  		<span class="fileupload-exist">Ubah Gambar</span>
										  		<input type="file" name="file_header" style="margin-top: -60px; background-color: red; opacity: 0; height: 50px; width: 290px; cursor: pointer; padding: 0px; margin-left: -20px;"/>
										  	</span><br/>
										  	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="width:260px; height:19px">Hapus</a>
										</div>
								  	</div>
								</div>
							</div>
						</div>
						<div style="clear:both"></div>
						
						<center>
						  <button type="submit" class="btn btn-primary" data-validation-required-message="Form tidak boleh kosong">Simpan Data Toko</button>
						  <button type="reset" class="btn btn-danger">Batalkan Semua</button>
						</center>
						
				  	</fieldset>
				</form>   

			</div>
		</div><!--/span-->
	</div><!--/row-->

	<script type="text/javascript">
		$(document).ready(function(){
			$.getJSON("/area/provinsi", "", function(json){
				$.each(json.area, function(k, v){
					$("#reg_selc_provinsi").append("<option value='" + v.id_prov + "'>" + v.nama + "</option>");
				});

			});

			$("#reg_selc_provinsi").on("change", function(){
				$.getJSON("/area/allkota/" + $(this).val(), "", function(json){

					$("#reg_selc_kabupaten").html("").append("<option value='0'>Pilih Kabupaten</option>");
					$.each(json.area, function(k, v){
						$("#reg_selc_kabupaten").append("<option value='" + v.id_kota + "'>" + v.nama + "</option>");
					});
				});
			});

		})
	</script>
@endsection

@section("script")

<script type="text/javascript" src="/js/jquery.slug.js"></script>
<script type="text/javascript" src="/js/bootstrap-fileupload.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#txt_store_name").slug({ 
				slug:'permalink', // class of input / span that contains the generated slug 
				hide: true       // hide the text input, true by default 
			}); 
			$('.fileupload').fileupload();
		});
	</script>

@endsection