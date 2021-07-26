@extends('layouts.master')

@section('container')
	<div class="row-fluid sortable">
		<div class="row-fluid">
			<div class="box span12 kontengambar">
				<div class="box-header well" style="background-color:#2F799C;">
					<h2 style="color:white;">Listing Produk</h2>
				</div>
				<div class="box-content">
					<div class="page-header wizardbackground" style="padding-bottom:10px">
						<h2 style="color:white">Kategori : Laptop</h2>
					</div>
					<div class="row-fluid pricing-table">
						
						@foreach ($listings as $item)
					        <div class="span4 plan listing-item" style="margin:5px; width:230px">
					          	<div class="plan-name-silver" style="min-height:230px">
						          	<div class="border-circle-baru">
							        	<div class="border-font" >{{ $item->condition }}</div>
							        </div>
							        <div class="border-circle-bekas hide" style="">
							        	<div class="border-font" >Bekas</div>
							        </div>
						          	<a href="{{ URL::to('p') }}/{{ $item->listing_permalink }}">
										<img style="width:160px; height:160px;" class="dashboard-avatar" alt="Usman" src="{{ '/pimage/' . $item->image->first()->image_file }}">
										<h4 style="padding-top:180px" class="listing-name" title="{{ $item->product_name }}" data-rel="tooltip">
											{{  
												$item->product_name = (strlen($item->product_name) >= 22) 
																		   ? substr($item->product_name,0,18).'...' 
																		   : $item->product_name; 
											}}
										</h4>
									</a>
						            <span><font color="#124CA2">Rp {{ number_format($item->price, 0, ',', '.') }} - <span class="label label-warning">Baru</span></font></span>
					          	</div>
					          	<ul class="detail-info-barang" style="margin-top: -132px; margin-left: 20px;">
									<li class="plan-feature" style="border: none;">
										<a style="width: 100%;" href="#" 
										   	data-id="{{ $item->id_listing }}"
										   	data-store="{{ $item->id_store }}"
										   	data-price="{{ $item->price }}" 
										   	data-cod="{{ $item->is_cod }}"
										   	data-appraisal="{{ $item->is_appraisal }}"
										   	data-rekber="{{ $item->is_rekber }}"
										   	data-dalamkota="{{ $item->is_dalam_kota }}"
										   	data-luarkota="{{ $item->is_luar_kota }}"
										   	data-qty="{{ $item->quantity }}"
										   	class="btn btn-primary btn-plan-select btn-tambah-keranjang">
												<i class="icon-white icon-shopping-cart"></i> Tambah ke Keranjang
										</a>
									</li>
								</ul>
					        </div>
					    @endforeach
				    </div>
				    <center>{{ $listings->links() }}</center>
				</div>
			</div>
			
		</div>							
	</div>
@endsection