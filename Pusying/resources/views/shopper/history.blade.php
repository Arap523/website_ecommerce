<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | E-Coffee</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
						<div class="container-fluid">
							<a href="/"><img src="images/home/New project.png" width="100px" height="100px" alt=""/></a>
						  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						  </button>
						
						  <div class=" collapse navbar-collapse" id="navbarNavDropdown">
							<ul class="navbar-nav ms-auto ">
							  <li class="nav-item">
								<a class="nav-link mx-2 active" aria-current="page" href="/">Home</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link mx-2" href="#">Products</a>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Sign in or Sign up
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								  
								<li><a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>
								<li><a class="dropdown-item" href="{{ route('register') }}">{{ __('register') }}</a></li>
								
									</ul>
					
							 @guest
							
								
								</ul>

							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						
					</div>
					<div class="col-sm-8">
						
					</div>
					<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                        
                           
                        @else
                        <li class="nav-item">
							<li class="nav-item dropdown">
								<a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Account
								 </a>
								 <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									
									<li><a href="{{ url('logout') }}">{{ __('Logout') }}</a></li>
									<li><a href="{{ url('history') }}">{{ __('Riwayat Checkout') }}</a></li>
	
							   
									
									</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			

			
					<div class="review-payment">
						<h2>Review & Pembayaran</h2>
					</div>

					<div class="table-responsive cart_info">
						<table class="table table-condensed">
							<thead>
								<tr class="cart_menu">
									<td class="description">No</td>
									<td class="description">Tanggal Pesan</td>
									<td class="price">Status</td>
									<td class="quantity">Total Harga</td>
									<td class="total"> </td>
									<?php $no = 1; ?>
									@foreach($pesanans as $pesanan)
									<tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td>
                                    @if($pesanan->status == 1)
                                    Sudah Pesan & Belum dibayar
                                    @else
                                    Sudah dibayar 
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                               
                            </tr>
							@endforeach
							
										</table>
									</thead>
									<tbody>
										</tbody>
									</table>
								</div>
					</form>
		</div>

		
	</section> <!--/#cart_items-->

	

<footer id="footer"><!--Footer-->	
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					
					
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shop</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright 2024 Coffee Shop. All rights reserved.</p>
					
				</div>
			</div>
		</div>
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>