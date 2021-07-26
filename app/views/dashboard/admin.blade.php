@extends('layouts.adminmaster')

@section('container')
	<div class="sortable row-fluid">
		<a data-rel="tooltip" title="6 new members." class="well span6 top-block" href="#">
			<span class="icon32 icon-red icon-user"></span>
			<div>Permintaan Verifikasi Member</div>
			<div>0</div>
		</a>

		<a data-rel="tooltip" title="$34 new sales." class="well span6 top-block" href="#">
			<span class="icon32 icon-color icon-cart"></span>
			<div>Permintaan Saldo</div>
			<div>1</div>
		</a>
	</div>
	
	<div class="row-fluid sortable">
								
		<div class="box span8">
			<div class="box-header well" data-original-title>
				<h2><i class="icon-user"></i> Member Activity</h2>
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
						<li>
							<a href="#">
								<img class="dashboard-avatar" alt="Abdullah" src="http://www.gravatar.com/avatar/<?php echo md5( strtolower( trim( "abdullah123456@abc.com" ) ) ); ?>.png?s=50"></a>
								<strong>Name:</strong> <a href="#">Abdullah
							</a><br>
							<strong>Since:</strong> 25/05/2012<br>
							<strong>Status:</strong> <span class="label label-important">Banned</span>                                  
						</li>
					</ul>
				</div>
			</div>
		</div><!--/span-->
				
		<div class="box span4">
			<div class="box-header well" data-original-title>
				<h2><i class="icon-list-alt"></i> Realtime Traffic</h2>
				<div class="box-icon">
					<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div id="realtimechart" style="height:190px;"></div>
					<p class="clearfix">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
					<p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
			</div>
		</div><!--/span-->
	</div><!--/row-->   
@endsection
