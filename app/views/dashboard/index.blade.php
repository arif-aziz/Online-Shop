@extends('layouts.master')

@section('container')

			<div class="sortable row-fluid">
				<a data-rel="tooltip" title="6 new members." class="well span4 top-block" href="#">
					<span class="icon32 icon-red icon-user"></span>
					<div>Jumlah Transaksi Penjualan</div>
					<div>0</div>
				</a>
				<a data-rel="tooltip" title="6 new members." class="well span4 top-block" href="#">
					<span class="icon32 icon-red icon-user"></span>
					<div>Jumlah Transaksi Pembelian</div>
					<div>0</div>
				</a>

				<a data-rel="tooltip" title="$34 new sales." class="well span4 top-block" href="#">
					<span class="icon32 icon-color icon-cart"></span>
					<div>Saldo</div>
					<div>Rp 13.300</div>
				</a>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span8">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Aktifitas</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="box-content">
							<ul class="dashboard-list">
								<li>
									<a href="#">
										<img class="dashboard-avatar" alt="Usman" src="http://www.gravatar.com/avatar/<?php echo md5( strtolower( trim( "usman@halalit.net" ) ) ); ?>.png?s=50"></a>
										<strong>Name:</strong> <a href="#">Usman
									</a><br>
									<strong>Since:</strong> 17/05/2012<br>
									<strong>Status:</strong> <span class="label label-success">Approved</span>                                  
								</li>
								<li>
									<a href="#">
										<img class="dashboard-avatar" alt="Sheikh Heera" src="http://www.gravatar.com/avatar/<?php echo md5( strtolower( trim( "heerasheikh@ymail.com" ) ) ); ?>.png?s=50"></a>
										<strong>Name:</strong> <a href="#">Sheikh Heera
									</a><br>
									<strong>Since:</strong> 17/05/2012<br>
									<strong>Status:</strong> <span class="label label-warning">Pending</span>                                 
								</li>
								<li>
									<a href="#">
										<img class="dashboard-avatar" alt="Abdullah" src="http://www.gravatar.com/avatar/<?php echo md5( strtolower( trim( "abdullah123456@abc.com" ) ) ); ?>.png?s=50"></a>
										<strong>Name:</strong> <a href="#">Abdullah
									</a><br>
									<strong>Since:</strong> 25/05/2012<br>
									<strong>Status:</strong> <span class="label label-important">Banned</span>                                  
								</li>
								<li>
									<a href="#">
										<img class="dashboard-avatar" alt="Saruar Ahmed" src="http://www.gravatar.com/avatar/<?php echo md5( strtolower( trim( "saruarall@gmail.com" ) ) ); ?>.png?s=50"></a>
										<strong>Name:</strong> <a href="#">Saruar Ahmed
									</a><br>
									<strong>Since:</strong> 17/05/2012<br>
									<strong>Status:</strong> <span class="label label-info">Updates</span>                                  
								</li>
							</ul>
						</div>
					</div>
				</div><!--/span-->	
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> Statistik Harian</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
							<li>
								<a href="#">
									<i class="icon-arrow-up"></i>                               
									<span class="green">92</span>
									New Comments                                    
								</a>
							</li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down"></i>
							  <span class="red">15</span>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus"></i>
							  <span class="blue">36</span>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment"></i>
							  <span class="yellow">45</span>
							  User reviews                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-up"></i>                               
							  <span class="green">112</span>
							  New Comments                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down"></i>
							  <span class="red">31</span>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus"></i>
							  <span class="blue">93</span>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment"></i>
							  <span class="yellow">254</span>
							  User reviews                                    
							</a>
						  </li>
						</ul>
					</div>
				</div><!--/span-->
			</div><!--/row-->
				  
   
@endsection
