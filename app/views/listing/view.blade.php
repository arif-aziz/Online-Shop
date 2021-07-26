@extends('layouts.master')

@section('container')

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" style="background-color:#2F799C; padding-right:0px" data-original-title>
						<h2 style="color:white;">Daftar Listing Produk</h2>
						@if(Auth::check())
						<div class="box-icon">
							<a href="{{ URL::to('listing/add') }}" class="btn"><i class="icon-pencil"></i></a>
						</div>
						@endif
					</div>
					
					<div class="box-content">
						   
						<div class="row-fluid ">            
							<div class="span12 ">
								<div class="shadow well">
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
								<div class="shadow well">
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
														@foreach ($listings as $item)
														<tr>
															<td><a href="{{ URL::to('p')}}/{{ $item->listing_permalink }}" class="">{{ $item->product_name }}</a></td>
															<td class="center">{{ $item->created_at }}</td>
															<td class="center">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
															<td class="center">{{ $item->quantity }}</td>
															<td class="center">
																<div class="btn-group">
																  <button class="btn btn-mini">Aksi</button>
																  <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">
																    <span class="caret"></span>
																  </button>
																  <ul class="dropdown-menu">
																      <li><a tabindex="-1" href="#"><i class="icon-pencil"></i> Edit</a></li>
																	  <li><a tabindex="-1" href="#"><i class="icon-trash"></i> Hapus</a></li>
																  </ul>
																</div>
															</td>
														</tr>
														@endforeach
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