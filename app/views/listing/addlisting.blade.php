@extends('layouts.master')

@section('container')

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" style="background-color:#39C; padding-right:0px" data-original-title>
						<h2 style="color:white;">Daftar Listing Produk</h2>
						<div class="box-icon">
							<a href="form-listing.php" class="btn"><i class="icon-pencil"></i></a>
						</div>
					</div>
					
					<div class="box-content">
						   
						<div class="row-fluid ">            
							  <div class="span12 ">
								<div class="well">
									<li style="border:none; list-style:none; ">
										<div class="page-header" style="margin-top:0px">
											<h3>Informasi</h3>
										</div>
										<p></p>
									</li>
								</div>
							  </div>
						</div>
						<div class="row-fluid ">            
							  <div class="span12 ">
								<div class="well">
									<div class="box-content">
												<table class="table table-striped table-bordered bootstrap-datatable datatable">
												  <thead>
													  <tr>
														  <th>Nama</th>
														  <th>Tanggal</th>
														  <th>Harga</th>
														  <th>Jumlah</th>
														  <th>Aksi</th>
													  </tr>
												  </thead>   
												  <tbody>
									
													<tr>
														<td><a href="#" class="btn-detail-barang">Mobil Avansa</a></td>
														<td class="center">21 Januari 2012</td>
														<td class="center">Rp 9.000.000</td>
														<td class="center">3</td>
														<td class="center">
															<div class="btn-group">
															  <button class="btn btn-mini">Aksi</button>
															  <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">
															    <span class="caret"></span>
															  </button>
															  <ul class="dropdown-menu">
															      <li><a tabindex="-1" href="#"><i class="icon-edit"></i> Edit</a></li>
																  <li><a tabindex="-1" href="#"><i class="icon-trash"></i> Hapus</a></li>
															  </ul>
															</div>
														</td>
													</tr>
												  </tbody>
											  </table>            
											</div>	
								</div>
							  </div>

						</div>

					</div>
				</div><!--/span-->
			</div><!--/row-->

@endsection