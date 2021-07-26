@extends('layouts.masterlogin')

@section('container')

			<div class="row-fluid sortable">
				<div class="box span12 center">
					<div class="box-header well" style="background-color:#2F799C;" data-original-title>
						<h2 style="color:white;">Login</h2>
					</div>
					
					<div class="box-content">
						<div class="row-fluid" style="overflow:none">
							<div class="well span12 center login-box" style="overflow:none">
								<div class="alert alert-warning">
									Login dengan username &amp; password Anda atau
									<a href="/register">mendaftar akun baru</a>
								</div>
								<form class="form-horizontal" action="/login" method="post">
									<fieldset>
										<div class="input-prepend" title="Username" data-rel="tooltip">
											<span class="add-on"><i class="icon-user"></i></span>
											<input autofocus class="input-large span10" name="txt_login_username" id="username" type="text" required aria-invalid="false" />
										</div>
										<div class="clearfix"></div>

										<div class="input-prepend" title="Password" data-rel="tooltip">
											<span class="add-on"><i class="icon-lock"></i></span>
											<input class="input-large span10" name="txt_login_password" id="password" type="password" required aria-invalid="false" />
										</div>
										<div class="clearfix"></div>

										<div class="input-prepend">
											<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
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