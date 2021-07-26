@extends('layouts.master')

@section('container')
	<div class="row-fluid sortable">
		<div class="box span9" style="background-color:white; padding-bottom:20px">
			<div class="box-header well" style="background-color:#2F799C;" data-original-title>
				<h2 style="color:white;">Saldo</h2>
			</div>
			<div class="box-content">
				<div class="page-header wizardbackground" style="padding-bottom:10px; height:27px">
					<div id="tab" class="btn-group" data-toggle="buttons-radio" >
				  		<a href="#isi_saldo" class="btn active" data-toggle="tab">Pengisian Saldo</a>
				  		<a href="#his_saldo" class="btn" data-toggle="tab">Histori Saldo</a>
					</div>
				</div>
				 
				<div class="tab-content" style="width: 100%;">
				  	<div class="tab-pane active" id="isi_saldo">
				  		<form class="form-horizontal" action='' method="post">
		                    <fieldset>
		                      	<div class="control-group">
									<label class="control-label" for="appendedPrependedInput">Nominal Saldo </label>
									<div class="controls">
									  	<div class="input-prepend input-append">
											<span class="add-on">Rp</span><input id="appendedPrependedInput" size="16" type="text"
											data-rel="popover" 
											data-content="Jumlah pengisian saldo." 
											data-validation-callback-callback="format_number"
											required aria-invalid="false"><span class="add-on">.00</span>
										</div>
									</div>
								</div>
		 
	                      		<div class="control-group">
									<label class="control-label" for="typeahead">No. Rekening </label>
								  	<div class="controls">
										<input type="text" class="span6" 
										data-rel="popover" 
										data-content="Nomor rekening bank."
										data-validation-callback-callback="format_number"
										required aria-invalid="false">
								  	</div>
								</div>
								<div class="control-group">
								  	<label class="control-label" for="typeahead">Pemilik Rekening </label>
								  	<div class="controls">
										<input type="text" class="span8" 
										data-rel="popover" 
										data-content="Nama pemilik rekening bank."
										data-validation-uppercase-regex="^[a-zA-Z ]*"
										data-validation-uppercase-message="Hanya karakter huruf dan spasi yang diizinkan"
										required aria-invalid="false">
								  	</div>
								</div>
								<div class="control-group">
			                        <label class="control-label"  for="username">Password Akun</label>
			                        <div class="controls">
			                          	<input type="password" id="password" name="password" placeholder="" class="span6"
			                          	data-rel="popover" 
										data-content="Password akun Anda."
										required aria-invalid="false">
			                        </div>
		                      	</div>
	 
	                      		<div class="control-group">
	                        		<div class="controls">
	                          			<button class="btn btn-success" data-validation-required-message="Form tidak boleh kosong">Kirim Permintaan</button>
	                          			<a href="#" class="btn btn-danger" data-dismiss="modal">Batal</a>
	                        		</div>
	                      		</div>
		                    </fieldset>
	                  	</form>
				  	</div>
				  <div class="tab-pane" id="his_saldo">
				  		
				  			<div class="row-fluid sortable">		
								<div class="span12">
									<div class="well">
										<div class="box-content">
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
											  <thead>
												  <tr>
													  <th>Username</th>
													  <th>Date registered</th>
													  <th>Role</th>
													  <th>Status</th>
													  <th>Actions</th>
												  </tr>
											  </thead>   
											  <tbody>
								
												<tr>
													<td>Rizwan Habib</td>
													<td class="center">2012/01/21</td>
													<td class="center">Staff</td>
													<td class="center">
														<span class="label label-success">Active</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Amrin Sana</td>
													<td class="center">2012/08/23</td>
													<td class="center">Staff</td>
													<td class="center">
														<span class="label label-important">Banned</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Sana Amrin</td>
													<td class="center">2012/08/23</td>
													<td class="center">Staff</td>
													<td class="center">
														<span class="label label-important">Banned</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Ifrah Jannat</td>
													<td class="center">2012/06/01</td>
													<td class="center">Admin</td>
													<td class="center">
														<span class="label">Inactive</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Jannat Ifrah</td>
													<td class="center">2012/06/01</td>
													<td class="center">Admin</td>
													<td class="center">
														<span class="label">Inactive</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Robert</td>
													<td class="center">2012/03/01</td>
													<td class="center">Member</td>
													<td class="center">
														<span class="label label-warning">Pending</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Dave Robert</td>
													<td class="center">2012/03/01</td>
													<td class="center">Member</td>
													<td class="center">
														<span class="label label-warning">Pending</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Brown Robert</td>
													<td class="center">2012/03/01</td>
													<td class="center">Member</td>
													<td class="center">
														<span class="label label-warning">Pending</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Usman Muhammad</td>
													<td class="center">2012/01/01</td>
													<td class="center">Member</td>
													<td class="center">
														<span class="label label-success">Active</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Abdullah</td>
													<td class="center">2012/02/01</td>
													<td class="center">Staff</td>
													<td class="center">
														<span class="label label-important">Banned</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Dow John</td>
													<td class="center">2012/02/01</td>
													<td class="center">Admin</td>
													<td class="center">
														<span class="label">Inactive</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>John R</td>
													<td class="center">2012/02/01</td>
													<td class="center">Admin</td>
													<td class="center">
														<span class="label">Inactive</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Paul Wilson</td>
													<td class="center">2012/03/01</td>
													<td class="center">Member</td>
													<td class="center">
														<span class="label label-warning">Pending</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Wilson Paul</td>
													<td class="center">2012/03/01</td>
													<td class="center">Member</td>
													<td class="center">
														<span class="label label-warning">Pending</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Heera Sheikh</td>
													<td class="center">2012/01/21</td>
													<td class="center">Staff</td>
													<td class="center">
														<span class="label label-success">Active</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Sheikh Heera</td>
													<td class="center">2012/01/21</td>
													<td class="center">Staff</td>
													<td class="center">
														<span class="label label-success">Active</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Christopher</td>
													<td class="center">2012/08/23</td>
													<td class="center">Staff</td>
													<td class="center">
														<span class="label label-important">Banned</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Andro Christopher</td>
													<td class="center">2012/08/23</td>
													<td class="center">Staff</td>
													<td class="center">
														<span class="label label-important">Banned</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Jhon Doe</td>
													<td class="center">2012/06/01</td>
													<td class="center">Admin</td>
													<td class="center">
														<span class="label">Inactive</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Lorem Ipsum</td>
													<td class="center">2012/03/01</td>
													<td class="center">Member</td>
													<td class="center">
														<span class="label label-warning">Pending</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Abraham</td>
													<td class="center">2012/03/01</td>
													<td class="center">Member</td>
													<td class="center">
														<span class="label label-warning">Pending</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Brown Blue</td>
													<td class="center">2012/03/01</td>
													<td class="center">Member</td>
													<td class="center">
														<span class="label label-warning">Pending</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
												<tr>
													<td>Worth Name</td>
													<td class="center">2012/03/01</td>
													<td class="center">Member</td>
													<td class="center">
														<span class="label label-warning">Pending</span>
													</td>
													<td class="center">
														<a class="btn btn-success" href="#">
															<i class="icon-zoom-in icon-white"></i>  
															View                                            
														</a>
														<a class="btn btn-info" href="#">
															<i class="icon-edit icon-white"></i>  
															Edit                                            
														</a>
														<a class="btn btn-danger" href="#">
															<i class="icon-trash icon-white"></i> 
															Delete
														</a>
													</td>
												</tr>
											  </tbody>
										  </table>            
										</div>
									</div>
								</div><!--/span-->
							
							</div><!--/row-->


				  </div>
				</div>

			</div>
		</div><!--/span-->

		<div class="box span3 kontengambar" style="height:361px; background-color:white;">
			<div class="box-header well" style="background-color:#D62B00;">
				<h2 style="color:white;">Saldo Anda</h2>
			</div>
			<div class="box-content">
				 <ul class="dashboard-list">
					<li style="border:none"></li>
					<li >
						<p></p>
						<p><strong>Sisa Saldo : </strong> 30.000<br></p>
					</li>
					<li style="border:none"></li>
					<li >
						<p></p>
						<p><strong>Nama Bank : </strong> Mandiri<br></p>
						<p><strong>No. Rekening : </strong> 0838300443664<br></p>
						<p><strong>Pemilik Rekening : </strong>Arif Rahman Aziz</p>                                  
					</li>
				</ul>
			</div>
		</div>
	</div><!--/row-->
@endsection