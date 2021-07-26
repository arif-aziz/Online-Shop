@extends('layouts.master')

@section('container')
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" style="background-color:#39C;" data-original-title>
				<h2 style="color:white;">Pengaturan User</h2>
			</div>
			<div class="box-content">
				
				<form class="form-horizontal">
					<fieldset>

						<div class="span6">
							<div class="shadow well" style="min-height: 80px; padding-top:30px">
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_full_name">Nama Lengkap </label>
								  	<div class="controls">
								  		<input class="span11" type="text" name="txt_full_name" 
								  		maxlength="30" data-rel="popover" data-content="Harus sesuai dengan data kartu identitas Anda."
								  		data-validation-uppercase-regex="^[a-zA-Z ]*" 
										data-validation-uppercase-message="Hanya karakter huruf dan spasi yang diizinkan"
								  		required aria-invalid="false">
								  	</div>
								</div>
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_birthdate">Tgl Lahir </label>
								  	<div class="controls">
								  		<input class="span6 datepicker" type="text" name="txt_birthdate"
								  		maxlength="10" data-rel="popover" data-content="Harus sesuai dengan data kartu identitas Anda."
								  		data-validation-containsnumber-regex="^(0?[1-9]|1[012])/(0?[1-9]|[12][0-9]|3[01])/(19|20)\d\d$" 
										data-validation-containsnumber-message="Gunakan format MM/DD/YYYY"
								  		required aria-invalid="false">
								  	</div>
								</div>
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_gender">Jenis Kelamin </label>
								  	<label class="radio radio-style">
								  		<input type="radio" name="opt_gender" value="1" checked="">
								  		Laki-laki
								  	</label>
								  	<label class="radio radio-style">
								  		<input type="radio" name="opt_gender" value="2">
										Perempuan
								  	</label>
								</div>
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_address" required>Alamat </label>
								  	<div class="controls">
								  		<textarea name="txt_address" cols="10" rows="5" style="width:280px"
								  		data-rel="popover" data-content="Harus sesuai dengan data kartu identitas Anda."
								  		required aria-invalid="false"></textarea>
								  	</div>
								</div>
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_provinsi">Provinsi </label>
									<div class="controls">
										<select name="reg_selc_provinsi" id="reg_selc_provinsi">
											<option value="0">Pilih Provinsi</option>
									  	</select>
									</div>
								</div>
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_kabupaten">Kabupaten / Kota </label>
									<div class="controls">
									  	<select name="reg_selc_kabupaten" id="reg_selc_kabupaten">
											<option value="0">Pilih Kabupaten</option>
									  	</select>
									</div>
								</div>
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_zip_code" required>Kode Pos </label>
								  	<div class="controls">
								  		<input class="span4" type="text" name="txt_zip_code"
								  		maxlength="5" data-rel="popover" data-content="Harus sesuai dengan data kartu identitas Anda."
								  		data-validation-callback-callback="format_number"
								  		required aria-invalid="false">
								  	</div>
								</div>
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_profile_pic">Foto Profil </label>
									<div class="controls">
								  		<div class="span3 fileupload fileupload-new" data-provides="fileupload" style="height:170px;">
										  	<div class="fileupload-new thumbnail" style="width: 110px; height: 110px; padding:0px">
										  		<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" style="width: 73px; height: 73px; padding:5px; margin-top:15px"/>
										  	</div>
										  	<div class="fileupload-preview fileupload-exists thumbnail" style="width: 110px; height: 110px; padding:0px"></div>
										  	<br/>
										  	<span class="btn btn-file" style="cursor: pointer; width: 90px; height: 19px; padding-top: 5px; padding-bottom: 2px; margin-top: -7px;">
										  		<span class="fileupload-new">Pilih Gambar</span>
										  		<span class="fileupload-exist">Ubah</span>
										  		<input type="file" name="file_profile_pic" style="margin-top: -60px; background-color: red; opacity: 0; height: 50px; width: 210px; cursor: pointer; padding: 0px; margin-left: -20px;"/>
										  	</span><br/>
										  	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="width:90px">Hapus</a>
										</div>
								  	</div>
								</div>
							</div>
						</div>
						<div class="span6 ">
							<div class="shadow well" style="overflow:none; padding-top:30px; padding-right:20px">
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_id_type">Jenis ID </label>
									<div class="controls">
										<select name="selc_id_type">
											<option>Pilih Jenis ID</option>
											<option>KTP</option>
											<option>SIM</option>
											<option>Passport</option>
									  	</select>
									</div>
								</div>
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_id_number" required>Nomor ID </label>
									<div class="controls">
										<input class="span8" type="text" name="txt_id_number"
										maxlength="25" data-rel="popover" data-content="Harus sesuai dengan data kartu identitas Anda."
										data-validation-callback-callback="format_number"
								  		required aria-invalid="false">
									</div>
								</div>
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_id_pic">Foto Kartu ID </label>
									<div class="controls">
										<div class="span12 fileupload fileupload-new" data-provides="fileupload" style="height:168px; margin-bottom:70px">
										  	<div class="fileupload-new thumbnail" style="width: 280px; height: 180px; padding:0px">
										  		<img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" style="width: 270px; height: 170px; padding:5px; "/>
										  	</div>
										  	<div class="fileupload-preview fileupload-exists thumbnail4" style="width: 280px; height: 180px; padding:0px"></div>
										  	<br/>
										  	<span class="btn btn-file" style="cursor: pointer; width: 260px; height: 19px; padding-top: 5px; padding-bottom: 2px; margin-top: -5px;">
										  		<span class="fileupload-new" style="padding: 0 80px 0 80px;">Pilih Gambar</span>
										  		<span class="fileupload-exist">Ubah Gambar</span>
										  		<input type="file" name="file_id_pic" style="margin-top: -60px; background-color: red; opacity: 0; height: 50px; width: 290px; cursor: pointer; padding: 0px; margin-left: -20px;"/>
										  	</span><br/>
										  	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload" style="width:260px; height:19px">Hapus</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="span6 ">
							<div class="shadow well" style="min-height: 80px;padding-top:26px;">
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_phone">Nomor Telepon </label>
								  	<div class="controls">
								  		<input class="span8" type="text" name="txt_phone"
								  		maxlength="12" data-rel="popover" data-content="Masukkan nomor yang aktif."
								  		data-validation-callback-callback="format_number">
								  	</div>
								</div>
								<div class="control-group" style="margin-left: -20px;">
									<label class="control-label" for="lbl_mobile">Nomor HP </label>
									<div class="controls">
										<input class="span8" type="text" name="txt_mobile"
										maxlength="12" data-rel="popover" data-content="Masukkan nomor yang aktif."
										data-validation-callback-callback="format_number">
									</div>
								</div>
							</div>
						</div>
						<div style="clear:both"></div>
						
						<center>
						  <button type="submit" class="btn btn-primary">Simpan Perubahan Profil</button>
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