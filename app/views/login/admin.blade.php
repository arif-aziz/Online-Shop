@extends('layouts.adminmasterlogin')

@section('container')

			<div class="row-fluid sortable">
				<div class="box span12 center">
					<div class="box-header well" style="background-color:#2F799C;" data-original-title>
						<h2 style="color:white;">Admin Login</h2>
					</div>
					
					<div class="box-content">
						<div class="row-fluid" style="overflow:none">
							<div class="well span12 center login-box" style="overflow:none">
								<div class="alert alert-warning">
									Login dengan username &amp; password Anda. Pastikan akun Anda telah terdaftar dalam tim Online Shop.
								</div>
								<form class="form-horizontal" action="/admin/login" method="post">
									<fieldset>
										<div class="input-prepend" title="Username" data-rel="tooltip">
											<span class="add-on"><i class="icon-user"></i></span>
											<input autofocus class="input-large span10" name="txt_login_username" id="username" type="text" required aria-invalid="false" />
										</div>

										<div class="input-prepend" title="TypeUser" data-rel="tooltip">
											<select name="selc_user_type" id="selc_user_type" style="width:100px; height:27px">
												<option value="Admin">Admin</option>
												<option value="Mediator">Mediator</option>
												<option value="Ahli">Ahli</option>
										  	</select>
										</div>
										<div class="clearfix"></div>

										<div class="input-prepend" title="Password" data-rel="tooltip" style="width: 310px;"> 
											<span class="add-on"><i class="icon-lock"></i></span>
											<input class="input-large span10" name="txt_login_password" id="password" type="password" required aria-invalid="false" />
										</div>
										<div class="clearfix"></div>


										<p class="center span3">
											<button type="submit" class="btn btn-primary" data-validation-required-message="Form tidak boleh kosong">Masuk</button>
										</p>
									</fieldset>
								</form>
						  	</div>				  	
						</div>   

					</div>
				</div><!--/span-->
			</div><!--/row-->	
			
@endsection