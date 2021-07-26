@extends('layouts.master')

@section('container')
			<div class="row-fluid sortable">
					
				<div class="box span12" style="background-color: #E9E9E9;">
					<div class="box-header well" style="background-color:#2F799C; padding-right:0px" data-original-title>
						<h2 style="color:white;">Transaksi Belanja</h2>
					</div>

					<div class="box-content">
						<div class="row-fluid ">            
							<div class="span12 ">
								<div class="shadow well">
									<div class="box-content">

										<table class="table table-striped table-bordered bootstrap-datatable datatable">
										  	<thead>
											  	<tr>
												  <th>Nama Produk</th>
												  <th>Tanggal</th>
												  <th>Jumlah</th>
												  <th>Harga</th>
												  <th>Model Transaksi</th>
												  <th>Aksi</th>
											  	</tr>
										  	</thead>   
										  	<tbody>
											
											@foreach ($transactions as $item)
												<tr>
													<td><a href="{{ URL::to('p')}}/{{ $item->listing_permalink }}">{{ $item->name }}</a></td>
													<td>{{ $item->add_listing_date }}</td>
													<td>{{ $item->quantity }}</td>
													<td>Rp {{ number_format($item->total(), 0, ',', '.') }}</td>
													<td>{{ $item->transaction_model }}</td>
													<td class="center" style="width:85px">
														<div class="btn-group">
														  	<button class="btn btn-mini">Pilih Aksi</button>
														  	<button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">
														    	<span class="caret"></span>
														  	</button>
														  	<ul class="dropdown-menu">
														  		<li><a tabindex="-1" href="#"><i class="icon-check"></i> Check Out</a></li>
														      	<li>
														      		<a tabindex="-1" href="#"
														      		   data-quantity="{{ $item->quantity }}" 
														      		   data-price="{{ $item->price }}"
															  		   data-transaction-model="{{ $item->transaction_model }}"
															  		   data-identifier="{{ $item->identifier }}"
															  		   class="btn-edit-keranjang">
														      			<i class="icon-pencil"></i> Edit
														      		</a>
														      	</li>
															  	<li>
															  		<a tabindex="-1" href="#" 
															  		   data-name="{{ $item->name }}" 
															  		   data-identifier="{{ $item->identifier }}"
															  		   class="btn-hapus-keranjang">
															  			<i class="icon-remove"></i> Hapus
															  		</a>
															  	</li>
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

			<!-- dialog hapus keranjang -->
			<div class="modal hide fade" id="hapusKeranjang" style="overflow:none; min-height:180px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h3 style="border-bottom: 2px solid #E6E6E6; padding-bottom: 5px;">Hapus Item</h3>
				</div>
				<div class="modal-body">
					<form action="" method="post" class="form-horizontal form-delete">
						<fieldset>
							<div class="control-group">
								<p class="listing-confirm-item" style="padding-bottom:20px">
									<center></center>
								</p>
		                        <!-- Button -->
		                        <div class="controls">
		                        	<button type="submit" class="btn btn-danger">Hapus Item dari Keranjang</button>
		                          	<a href="#" class="btn" data-dismiss="modal">Batal</a>
		                        </div>
	                      	</div>
						</fieldset>
					</form>
				</div>
			</div>

			<!-- dialog edit item -->
			<div class="modal hide fade" id="editKeranjang" style="overflow:none; min-height:265px">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h3 style="border-bottom: 2px solid #E6E6E6; padding-bottom: 5px;">Edit Item Keranjang Belanja</h3>
				</div>
				<div class="modal-body">
					<form action="" method="post" class="form-horizontal form-edit">
						<fieldset>
							<input class="hide listing-confirm-id" name="txt_id_listing">
							<input class="hide listing-confirm-price" name="txt_listing_price">
							<div class="control-group">
								<label class="control-label" for="selectError3">Model Transaksi</label>
								<div class="controls">
								  	<select name="selc_transaction_model" class="listing-confirm-transaction-model">
								  		<option value="COD">COD</option>
										<option value="Appraisal">Appraisal</option>
										<option value="Rekening Bersama">Rekening Bersama</option>
										<option value="Appraisal dan Kirim Dalam Kota">Appraisal &amp; Kirim Dalam Kota</option>
										<option value="Appraisal dan Kirim Luar Kota">Appraisal &amp; Kirim Luar Kota</option>
								  	</select>
								  	<p class="help-block">Selain COD, akan dikenai biaya tertentu. Lihat kebijakan transaksi.</p>
								</div>
							</div>
							<div class="control-group">
							  	<label class="control-label" for="typeahead">Jumlah Produk</label>
							  	<div class="controls">
									<input type="text" class="span5 listing-confirm-quantity" name="txt_quantity"
										data-validation-callback-callback="format_number"
										required aria-invalid="false">
									<p class="help-block">Jumlah barang yang ingin Anda beli</p>
							  	</div>
							</div>
							<div class="control-group">
		                        <!-- Button -->
		                        <div class="controls">
		                        	<button type="submit" class="btn btn-success" data-validation-required-message="Form tidak boleh kosong">Simpan Perubahan ke Keranjang</button>
		                          	<a href="#" class="btn" data-dismiss="modal">Batal</a>
		                        </div>
	                      	</div>
						</fieldset>
					</form>
				</div>
			</div>
@endsection