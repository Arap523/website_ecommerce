<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Coffee Shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
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
								<a class="nav-link mx-2" href="#product">Products</a>
							  </li>

							  <li class="nav-item">
								<a class="nav-link mx-2 active" href="{{ url('check-out') }}">
                                    <i class="fa fa-shopping-cart"></i>
                                    @if(!empty($notif))
                                    <span class="badge badge-danger">{{ $notif }}</span>
                                    @endif
                                </a>
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
							</li>
						
						  </div>
						</div>
						</nav>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo pull-left">
							
						</div>
						<div class="btn-group pull-right">
					
						</div>
					</div>
					
					
					
                        
                        @else
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
						 </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Coffee</span> F33</h1>
									<h2>"Temukan Kopi Dengan Rasa Yang Nikmat"</h2>
									<p></p>
									<button type="button" class="btn btn-default get"><h3>Dapatkan Sekarang</h3></button>
								</div>
								<div class="col-sm-6">
									<img src="images/banner/coffee1.jpg" class="girl img-responsive" width="550px" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Coffee</span> F33</h1>
									<h2>"Tersedia Banyak Coffee Yang Patut Anda Coba!"</h2>
									<p> </p>
									<button type="button" class="btn btn-default get"><h3>Dapatkan Sekarang</h3></button>
								</div>
								<div class="col-sm-6">
									<img src="images/banner/cold-coffee.jpg" class="girl img-responsive" width="390px" alt="" />
								</div>
							</div>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section id="product">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2></h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href=""></a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="minuman.html"></a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						
						
						
					</div>
				</div>
				
				<div class="col-sm-6 padding-right">
					

					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">DRINK AND COFFEE</h2>
						@foreach($products as $product)
						<div class="col-sm-5">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{ Storage::url('public/products/').$product->gambar }}" alt="" />
											<h2>Rp. {{ number_format($product->harga)}}</h2>
											<p>{{ $product->nama_barang }}</p>
											<a href="{{ url('/pesan/'. $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									
										</div>
							
								</div>
								
							</div>
							
						</div>

						
						@endforeach
						
						

						
					</div><!--features_items-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	
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

		<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>	


   
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright 2024 Coffee Shop. All rights reserved.</p>

				</div>
			</div>
		</div>
	</footer><!--/Footer-->
	
</body>
</html>