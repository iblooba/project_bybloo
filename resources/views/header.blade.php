<!-- NAVBAR -->
<div class="topBar">
	<div class="container">
		<div class="row">
			<div class="col-md-6 hidden-sm hidden-xs">

			</div>
			<div class="col-md-6 col-xs-12">
				<ul class="list-inline pull-right top-right">

				</ul>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-main navbar-default nav-V2" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand" >	Shop by bloo</div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payment</a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li><a href="{{ url('/payment')}}" class="active">หน้าจ่ายเงิน</a></li>

					</ul>
				</li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Check Status</a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li><a href="{{ url('/statusconfirm')}}" class="active">Check Status</a></li>

					</ul>
				</li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Confirm</a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li><a href="{{ url('/pageconfirm')}}" class="active">หน้า Confirm</a></li>

					</ul>
				</li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Backend</a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li><a href="{{ url('/totalincome')}}" class="active">totalincome</a></li>
						<li><a href="{{ url('/orders')}}" class="active">Orders</a></li>

					</ul>
				</li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log out</a>


					<ul class="dropdown-menu dropdown-menu-left" >
							<li>
									<a href="{{ url('/logout') }}"
											onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
											Logout
									</a>

									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
									</form>
							</li>
					</ul>

				</li>

			</ul>
		</div><!-- /.navbar-collapse -->


	</div>
</nav>
