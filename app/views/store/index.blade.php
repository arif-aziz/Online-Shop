@extends('layouts.master')

@section('container')
	<div class="span8" style="width:74.45744680199999%; margin-left:0px; margin-top: 11px; border:none;">
		<div id="tab" class="btn-group" data-toggle="buttons-radio">
			  <a href="#toko" class="btn active" data-toggle="tab"><i class="icon icon-darkgray icon-cart" style="margin-top: 1px; margin-right: 5px;"></i>{{ $store->store_name }}</a>
			  <a href="#testimoni" class="btn" data-toggle="tab"><i class="icon icon-darkgray icon-comment" style="margin-top: 1px; margin-right: 5px;"></i>Testimoni</a>
		</div>

		<div class="tab-content" style="margin-top: 0px;">
		  	<div class="tab-pane active" id="toko">
		  		
			  	<div class="box span12">
					<div class="box-content">
						<div class="row-fluid">
							<div class="span12">
								<div class="tooltip-demo well banner-background" style="border-radius: 0px; webkit-border-radius: 0px;">
									<div class="div-banner"></div>
									<div class="span4 banner-text-background" style="margin-left: 3px; width:711px">
										<h1 class="banner-text">{{ $store->store_name }}</h1>
										<h4 class="banner-text-h4">{{ $store->store_tagline }}</h4>
										@if(Auth::check())
										<a href="{{ URL::to($store->store_permalink) }}/{{ 'edit' }}/{{ $store->id_store }}" type="submit" class="btn btn-default btn-atur-toko">
											<i class="icon icon-red icon-gear" style="margin-top: 1px; margin-right: 5px;"></i> 
											Pengaturan Toko
										</a>
										@endif
									</div>
									<p class="muted" style="margin-bottom: 0;">	
										<img class="img-banner-toko" src="{{ $store->banner }}"></img>
									</p>
								</div>                                  
						  	</div>
					  	</div>
				  	
				  		<div class="row-fluid pricing-table">
							@foreach ($store->listing as $item)
						        <div class="span4 plan listing-item" style="margin:5px; width:230px">
						          	<div class="plan-name-silver" style="min-height:230px">
							          	<div class="border-circle-baru">
								        	<div class="border-font" >Dijual</div>
								        </div>
								        <div class="border-circle-bekas hide" style="">
								        	<div class="border-font" >Bekas</div>
								        </div>
							          	<a href="{{ URL::to('p') }}/{{ $item->listing_permalink }}">
											<img style="width:160px; height:160px;" class="dashboard-avatar" alt="Usman" src="img/banner/lee.jpg">
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
					    <center>{{ $listing->links() }}</center>
				    </div>
				</div><!--/span-->
			</div>

		  	<div class="tab-pane" id="testimoni">
		  		<div class="box span12 " style="background-color: #E9E9E9;">
					<div class="box-header well" style="background-color:#2F799C;">
						<h2 style="color:white;">Testimoni</h2>
					</div>
					<div class="box-content">
						<div class="well" style="overflow:none">
							<div class="row" style="margin-left: 0px;">
							
							  	<div class="span12">
								    <div class="row" style="margin:5px">
								      	<div class="span12">
								        	<h4><strong><a href="#">Judul Testimoni</a></strong></h4>
								      	</div>
								    </div>
								    <div class="row" style="margin:5px">
								      	<div class="span12">      
								        	<p>
								        		Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.
								        	</p>
								      	</div>
								    </div>
								    <div class="row" style="margin:5px">
								      	<div class="span12">
								        	<p></p>
								        	<p>
								        		<i class="icon-user"></i> oleh <a href="#">Judika</a> 
								          		| <i class="icon-calendar"></i> Sept 16th, 2012
								        	</p>
								      	</div>
								    </div>
							  	</div>

							</div>
						</div>
						
						<div class="well" style="overflow:none">
							<div class="row" style="margin-left: 0px;">
							  	<div class="span12">
								    <div class="row" style="margin:5px">
								      	<div class="span12">
								        	<h4><strong><a href="#">Judul Testimoni</a></strong></h4>
								      	</div>
								    </div>
								    <div class="row" style="margin:5px">
								      	<div class="span12">      
								        	<p>
								        		Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.
								        	</p>
								      	</div>
								    </div>
								    <div class="row" style="margin:5px">
								      	<div class="span12">
								        	<p></p>
								        	<p>
								        		<i class="icon-user"></i> oleh <a href="#">Judika</a> 
								          		| <i class="icon-calendar"></i> Sept 16th, 2012
								        	</p>
								      	</div>
								    </div>
							  	</div>
							</div>
						</div>
					</div>
				</div>
		  	</div>
		</div>
	</div>

	<div class="box span3" style="background-color: #E9E9E9;">
		<div class="box-header well" style="background-color:#D62B00;" data-original-title>
			<h2 style="color:white;">Tentang Toko</h2>
		</div>
		<div class="box-content" style="background-color:white;">
			<ul class="dashboard-list">
				<h3><i class="icon icon-red icon-user" style="margin-top: 1px; margin-right: 5px;"></i>Pemilik</h3>
				<li style="border-bottom:none; border-color:lightGrey"></li>
				<li  style="border:none">
					<a href="#">
						<img class="dashboard-avatar" alt="Usman" src="img/banner/lee.jpg"></a>
						<a href="{{ URL::to('user') }}/{{ $store->user->id_user }}"> {{ $store->user->username }} </a>
					<div class="raty"></div>
				</li>
				<li style="border:none"></li>
				<li style="border-bottom:none; border-top:none">
					<p></p>
					<p><strong>Tanggal Gabung : </strong> {{ $store->user->created_at }}<br></p>
					@if($store->user->status = 'Unverified')
					<p><strong>Status : </strong> <span class="label label-important">{{ $store->user->status }}</span></p>
					@else
					<p><strong>Status : </strong> <span class="label label-success">{{ $store->user->status }}</span></p>
					@endif
					<p><strong>Tipe Member : </strong> <span class="label label-warning">Gold</span></p>
					<p><strong>No. Telepon : </strong> {{ $store->user->phone }}<br></p>
					<p><strong>No. Handphone : </strong> {{ $store->user->mobile }}<br></p>
				</li>
				<li style="border:none"></li>
				<li style="border:none"></li>
				<h3><i class="icon icon-red icon-cart" style="margin-top: 1px; margin-right: 5px;"></i>Detail Toko</h3>
				<li style="border-bottom:none; border-color:lightGrey"></li>
				<li style="border-bottom:none; border-top:none">
					<p><strong>Lokasi : </strong> {{ $area->nama }}<br></p>
					<p>
						<p>{{ $store->store_description }}</p>
					</p>
				</li>
			</ul>	
		</div>
	</div><!--/span-->
@endsection
