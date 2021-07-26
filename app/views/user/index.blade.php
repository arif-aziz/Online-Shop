@extends('layouts.master')

@section('container')
	<div class="row-fluid sortable">
		<div class="box span9" style="background-color: #E9E9E9;">
			<div class="box-header well" style="background-color:#2F799C; padding-right:0px" data-original-title>
				<h2 style="color:white;">Data User</h2>
				@if(Auth::check())
				<div class="box-icon">
					<a href="{{ URL::to('user/edit') }}/{{ $store->user->id_user }}" class="btn"><i class="icon-cog"></i></a>
				</div>
				@endif
			</div>
			<div class="box-content">
				<div class="row-fluid ">            
				  	<div class="span8">
						<li style="border:none; list-style:none; ">
							<a href="#">
								<img style="width:200px; height:200px; border:3px solid white" class="dashboard-avatar" alt="Usman" src="{{ $user->profile_image }}"></a>
								<a href="{{ URL::to('user') }}/{{ $store->user->id_user }}"> {{ $store->user->username }} </a>
							<div class="raty"></div>
							<li style="border:none; list-style:none;">
								<p></p>
								<br>
								<p></p>
								<p><strong>Tanggal Gabung : </strong> {{ $store->user->created_at }}<br></p>
								@if($store->user->status = 'Unverified')
								<p><strong>Status : </strong> <span class="label label-important">{{ $store->user->status }}</span></p>
								@else
								<p><strong>Status : </strong> <span class="label label-success">{{ $store->user->status }}</span></p>
								@endif
								<p><strong>Tipe Member : </strong> <span class="label label-warning">Gold</span></p>                                  
								<p><strong>Toko : </strong> <a href="{{ URL::to($store->store_permalink) }}"> {{ $store->store_name }}</a><br></p>
							</li>
						</li>
					</div>
				</div>
				<br>
				<div class="row-fluid ">            
					<div class="span6 ">
						<div class="shadow well">
							<li style="border:none; list-style:none; ">
								<div class="page-header" style="margin-top:0px">
									  <h3>Informasi Umum</h3>
								</div>
								<p></p>
								<p><strong class="data-user">Nama Lengkap : </strong> {{ $store->user->full_name }}<br></p>
								<p><strong class="data-user">Tgl. Lahir : </strong> {{ $store->user->birthdate }}<br></p>
								<p><strong class="data-user">Alamat : </strong> {{ $store->user->address }}<br></p>
								<p><strong class="data-user">Kodepos : </strong> {{ $store->user->zipcode }}<br></p>
								<p><strong class="data-user">Tentang Saya : </strong><br>
									{{ $store->user->bio }}
								</p>
							</li>
						</div>
					</div>
					<div class="span6 ">
						<div class="shadow well" style="min-height:197px">
							<li style="border:none; list-style:none; ">
								<div class="page-header" style="margin-top:0px">
									  <h3>Informasi Kontak</h3>
								</div>
								<p></p>
								<p><strong class="data-user">Email : </strong> {{ $store->user->email }}<br></p>
								<p><strong class="data-user">No. Telepon : </strong> {{ $store->user->phone }}<br></p>
								<p><strong class="data-user">No. Handphone : </strong> {{ $store->user->mobile }}<br></p>
							</li>
						</div>
					</div>
				</div>
				@if(Auth::check())
				<div class="row-fluid ">            
					<div class="span6 ">
						<div class="shadow well">
							<li style="border:none; list-style:none; ">
								<div class="page-header" style="margin-top:0px">
									  <h3>Informasi Identitas Pribadi</h3>
								</div>
								<p></p>
								<p><strong class="data-user">Jenis Kartu Identitas : </strong> {{ $store->user->identity_type }}<br></p>
								<p><strong class="data-user">No. Kartu Identitas : </strong> {{ $store->user->identity_id }}<br></p>
								<p><strong class="data-user">Gambar : </strong><br>
									<img style="width:300px; height:200px; border:3px solid white" alt="Usman" src="{{ $store->user->identity_image }}"></a>											
								</p>
							</li>
						</div>
					</div>

				</div>
				@endif
			</div>
		</div><!--/span-->
	</div><!--/row-->

@endsection