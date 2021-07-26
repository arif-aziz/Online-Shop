@extends('layouts.master')

@section('container')
			<div class="row-fluid sortable">
				<div class="box span12">

						<div class="box-header well" style="background-color:#2F799C;">
							<h2 style="color:white;"> {{ $listing->product_name }}</h2>
						</div>

						<ul class="detail-info">
				          	<p></p>
				            <i class="icon-user"></i> oleh <a href="{{ URL::to('user') }}/{{ $listing->store->user->id_user }}">{{ $listing->store->user->username }}</a>
				             | <i class="icon-calendar"></i> {{ $listing->created_at }}
					         | <i class="icon-shopping-cart"></i> <a href="{{ URL::to($listing->store->store_permalink) }}"> {{ $listing->store->store_name }}</a>
					         | <i class="icon-list-alt"></i> Kategori : {{ $listing->category->category_name }}
					         | <i class="icon-globe"></i> {{ $nama_kota }}
					         | Kondisi : <span class="label label-warning">{{ $listing->condition }}</span><br>
				        </ul>
						<div class="box-content">
							<div class="span12">
								<div class="shadow span8" style="background-color:#ECECEC; margin-bottom:15px; border:1px solid gray">
				                    <div class="span12" id="slider">
				                        <!-- Top part of the slider -->
	                                    <div class="span12" id="carousel-bounding-box" style="">
	                                        <div id="myCarousel" class="carousel slide" style="margin-bottom:1px">
	                                                <!-- Carousel items -->
	                                                <div class="carousel-inner" style="">
<<<<<<< HEAD
	                                        		<center>
	                                                	@foreach ($listing->image as $k => $image) 
	                                                	<div class="@if ($k == 0)active@endif item" data-slide-number="{{ $k }}">
	                                                   		<img src="/pimage/{{ $image->image_file }}" style="height:400px;"/>
	                                                    </div>
	                                                	@endforeach
	                                                </center>
=======
													@foreach ($listing->image as $k => $image) 
	                                                	<div class="@if ($k == 0)active@endif item" data-slide-number="{{ $k }}">
	                                                   		<img src="/pimage/{{ $image->image_file }}" style="height:400px;"/>
	                                                    </div>
	                                                
	                                                @endforeach
>>>>>>> cd78434bbfd8e10109f007ff3ba8cc6e2ea8e7a8
	                                                </div>
	                                                <!-- Carousel nav -->
	                                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
	                                                <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
	                                        </div>
	                                    </div>
				                    </div>

				                    <div id="slider-thumbs">
				                                <div class="span12" style=" background-color:gray">
				                                        <!-- Bottom switcher of slider -->
				                                        <ul class="thumbnails" style="padding-top:1px;">
<<<<<<< HEAD
				                                        	@foreach ($listing->image as $k => $image)
				                                                <li style="margin-left: 6px; margin-right: 5px;">
				                                        	    	<a class="thumbnail" id="carousel-selector-{{$k}}">
		                                                                <img src="/pimage/{{ $image->image_file }}" />
		                                                            </a>
				                                                </li>
				                                            @endforeach
=======
																@foreach ($listing->image as $k => $image) 
				                                                <li style="margin-left: 6px; margin-right: 5px;">
				                                                        <a class="thumbnail" id="carousel-selector-{{$k}}">
				                                                                <img src="/pimage/{{ $image->image_file }}" />
				                                                        </a>
				                                                </li>
				                                                @endforeach                                                
>>>>>>> cd78434bbfd8e10109f007ff3ba8cc6e2ea8e7a8
				                                        </ul>
				                                </div>
				                        </div>

										<script>
										  jQuery(document).ready(function($) {
										 
										        $('#myCarousel').carousel({
										                interval: 5000
										        });
										 
										        // When the carousel slides, auto update the text
										        $('#myCarousel').on('slid', function (e) {
										                var id = $('.item.active').data('slide-number');
										        });

										        //Handles the carousel thumbnails
										        $('[id^=carousel-selector-]').click( function(){
										                var id_selector = $(this).attr("id");
										                var id = id_selector.substr(id_selector.length -1);
										                var id = parseInt(id);
										                $('#myCarousel').carousel(id);
<<<<<<< HEAD
										        });	
=======
										        });										        
>>>>>>> cd78434bbfd8e10109f007ff3ba8cc6e2ea8e7a8
										});
										</script>
								</div>

								<div class="span4" >
									<h2 style="color:#FF7A00">Rp {{ number_format($listing->price, 0, ',', '.') }}</h2>
									<br>
									<ul class="dashboard-list">
										<h2>Detail</h2>
										<li style="border-bottom:none; border-color:lightGrey"></li>
										<li style="border-top:none">
											<p><strong>Berat : </strong>{{ $listing->weight }} Kg<br></p>
											<p><strong>Jumlah Tersedia : </strong>{{ $listing->quantity }}<br></p>
											<p><strong>Harga Pembelian lebih dari 1 Item : </strong><br>Rp {{ $listing->next_price }} <br></p>
											<p><strong>Model Transaksi : </strong>
												@if($listing->is_cod == 1)
													<span class="label label-info">COD</span>
												@endif
												@if($listing->is_appraisal == 1)
													<span class="label label-info">Appraisal</span>
												@endif
												@if($listing->is_rekber == 1)
													<span class="label label-info">Rekber</span>
												@endif
												@if($listing->is_dalam_kota == 1)
													<span class="label label-info">Appraisal Dalam Kota</span>
												@endif
												@if($listing->is_luar_kota == 1)
													<span class="label label-info">Appraisal Luar Kota</span>
												@endif
												<br>
											</p>
										</li>
										<li style="border: none;">
	    									<a href="#" 
	    									data-id="{{ $listing->id_listing }}"
	    									data-store="{{ $listing->id_store }}"
										   	data-price="{{ $listing->price }}" 
										   	data-cod="{{ $listing->is_cod }}"
										   	data-appraisal="{{ $listing->is_appraisal }}"
										   	data-rekber="{{ $listing->is_rekber }}"
										   	data-dalamkota="{{ $listing->is_dalam_kota }}"
										   	data-luarkota="{{ $listing->is_luar_kota }}"
										   	data-qty="{{ $listing->quantity }}"
	    									class="span12 btn btn-primary btn-plan-select btn-tambah-keranjang">
	    										<i class="icon-white icon-shopping-cart"></i> Tambah ke Keranjang
	    									</a>
	    								</li>
									</ul>	

				                </div>
				            </div>
				            <div class="span12" style="margin-left:0px">
				            	<div class="shadow well">
				            		<div class="page-header">
				            			<h2>Deskripsi</h2>
				            		</div>
									<p>
										 {{ $listing->product_description }}
									</p>
								</div>

				            </div>
						</div>
				</div>							
			</div>
@endsection