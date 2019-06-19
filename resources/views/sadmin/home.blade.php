<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Super Admin Control Pannel</title>
		
		<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/dash.css">

	</head>
	
	<body>
		<div class="header">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span></span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>Settings</span>
			</div>
			<nav>
				<ul>
					<li >
						<a href="{{ route('adminrec') }}">
							<span><i class="fa fa-user"></i></span>
							<span>Manage Admin</span>
						</a>
					</li>
					<li>
                                <a href="{{ route('logout') }}"
                                
                                
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span><i class="fa fa-sign-out"></i></span>        
                                            <span>Logout</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
							
						
					</li>
					<li>
						<a href="#">
							<span><i class="fa fa-bar-chart"></i></span>
							<span>Analytics</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Payments</span>
						</a>
					</li>
				</ul>
			</nav>
        </div>

		<div class="main-content">
			<div class="title">
				<center>Welcome {{ Auth::user()->name }} to Super Admin Control panel</center>
			</div>
			
			
        </div>
        <script src="../vendor/jquery/jquery.min.js"></script>
	</body>
</html>