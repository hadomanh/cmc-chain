<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Main Tag -->
	<title>HYPERAS CHAIN</title>
	<meta id="PagKeywords" name="keywords" content="HYPERAS CHAIN" />
	<meta id="PagDescription" name="description" content="" />
	<link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon" />
	<link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Facebook Tag -->
	<meta property="og:url" content=""/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="HYPERAS CHAIN"/>
	<meta property="og:description" content="HYPERAS CHAIN"/>	
	<meta property="og:image" content=""/>
	<meta property="og:site_name" content="HYPERAS CHAIN" />

	<!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fa881189ef.js" crossorigin="anonymous"></script>

	<!-- Css File -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

	<body>

		<!-- Header -->
		<header>
			<div class="top">
				<ul class="list-unstyled d-flex align-items-center justify-content-end m-0">
					<li class="link">
						<a href="#">Buy HYRA</a>
						<a href="{{ route('company.contact') }}">Support</a>
					</li>
					{{-- <li class="search">
						<i class="fas fa-search" aria-hidden="true"></i>
					</li>
					<li class="language">
						<div class="dropdown">
							<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
								English <i class="fas fa-globe"></i>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
					</li>		 --}}
				</ul>
			</div>
			<nav class="navbar navbar-expand-lg bg-light">
				<a class="navbar-brand" href="{{ route('home') }}">
					<img src="{{ asset('img/logo.png') }}" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link  {{ str_contains(Route::currentRouteName(), 'home') ? 'active' : '' }}" href="{{ route('home') }}" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle {{ str_contains(Route::currentRouteName(), 'technology.') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Technology
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="{{ route('technology.capabilities') }}">Layer-1 Capabilities</a></li>
								<li><a class="dropdown-item" href="{{ route('technology.protocol') }}">Core Protocol</a></li>
								<li><a class="dropdown-item" href="{{ route('resource.documentations')}}">Setup</a></li>
								{{-- <li><a class="dropdown-item" href="{{ route('technology.research') }}">Research</a></li> --}}
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle {{ str_contains(Route::currentRouteName(), 'ecosystem.') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Ecosystem
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="https://testnet.hyrascan.com/" target="_blank">Testnet</a></li>
								<li><a class="dropdown-item" href="javascript:void(0)">Mainnet</a></li>
								<li><a class="dropdown-item" href="https://hyrawallet.com" target="_blank">Hyra Wallet</a></li>
								<li><a class="dropdown-item" href="https://hyradex.com" target="_blank">Hyradex</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle {{ str_contains(Route::currentRouteName(), 'external.') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								External Environment
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="https://hyrainvest.com/" target="_blank">Hyra Invest</a></li>
								<!-- <li><a class="dropdown-item" href="https://cmcchain.foundation/" target="_blank">CMC Foundation</a></li> -->
								<li><a class="dropdown-item" href="https://pindias.com/" target="_blank">Pindias</a></li>
								<li><a class="dropdown-item" href="https://divega.com/" target="_blank">Divega</a></li>
								<li><a class="dropdown-item" href="https://rapitalbank.com/" target="_blank">Rapital Bank</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle {{ str_contains(Route::currentRouteName(), 'resource.') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Resources
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="{{ route('resource.community')}}">Community</a></li>
								<li><a class="dropdown-item" href="{{ route('resource.brandkit')}}">Brand Kit</a></li>
								<li><a class="dropdown-item" href="{{ route('resource.blog')}}">Blog</a></li>
								<li><a class="dropdown-item" href="{{ route('resource.whitepaper')}}">White Paper</a></li>
								{{-- <li><a class="dropdown-item" href="{{ route('resource.smartcontract')}}">Smart Contract</a></li> --}}
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Company
							</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="{{ route('company.about') }}">About Us</a></li>
								{{-- <li><a class="dropdown-item" href="{{ route('company.directors') }}">Board of Directors</a></li> --}}
								{{-- <li><a class="dropdown-item" href="{{ route('company.advisor') }}">Technical Advisory</a></li> --}}
								<li><a class="dropdown-item" href="{{ route('company.faqs') }}">FAQs</a></li>
								<li><a class="dropdown-item" href="{{ route('company.contact') }}">Contact US</a></li>
							</ul>
						</li>                                     
					</ul>
				</div>
			</nav>
		</header>

        @yield('content')

		<!-- newsletter -->
		<section class="newsletter bgGradBlue">
			<div class="container">
				<div class="row align-items-center">
		            <div class="col-md-auto col-sm text-end">
		                <h6 class="mb-0">Stay ahead</h6>
		                <div>The best crypto insights straight to your inbox</div>
		            </div>
		            <div class="col">
		                <div class="input-group input-group-lg">
		                    <input type="email" class="form-control" placeholder="Email address">
		                    <button class="btn" type="button">
		                        <i class="fab fa-telegram-plane" aria-hidden="true"></i>
		                    </button>
		                </div>
		            </div>
		        </div>
			</div>
		</section>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<img src="{{ asset('img/logo-footer.png') }}" class="footerLogo">
						<h6 class="title"><span>HYPERAS CHAIN LTD (UK)</span></h6>
						<ul class="list-unstyled">
							<li class="mb-2"><span class="fw-medium">Address:</span> No. 40 Gracechurch Street, London, EC3V 0BT, UK</li>
							<!-- <li><span class="fw-medium">Contact:</span> support@cmcchain.io</li> -->
						</ul>
					</div>
					<div class="col-md-6">
						<div class="row menuFooter">
							<div class="col-md-6">
								<h6 class="title"><span>Technology</span></h6>
								<ul>
									<li><a href="{{ route('technology.capabilities') }}">Layer-1 Capabilities</a></li>
									<li><a href="{{ route('technology.protocol') }}">Core Protocol</a></li>
									<li><a href="{{ route('resource.documentations')}}">Setup</a></li>
									{{-- <li><a href="{{ route('technology.research') }}">Research</a></li> --}}
								</ul>
							</div>
							<div class="col-md-6">
								<h6 class="title"><span>Ecosystem</span></h6>
								<ul>
									<li><a href="https://testnet.hyrascan.com/" target="_blank">Testnet</a></li>
									<li><a href="javascript:void(0)">Mainnet</a></li>
									<li><a href="https://hyrawallet.com" target="_blank">Hyra Wallet</a></li>
									<li><a href="https://hyradex.com" target="_blank">Hyradex</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h6 class="title"><span>External Environment</span></h6>
								<ul>
									<li><a href="https://hyrainvest.com/" target="_blank">Hyra Invest</a></li>
									<!-- <li><a href="https://cmcchain.foundation/" target="_blank">CMC Foundation</a></li> -->
									<li><a href="https://pindias.com/" target="_blank">Pindias</a></li>
									<li><a href="https://divega.com/" target="_blank">Divega</a></li>
									<li><a href="https://rapitalbank.com/" target="_blank">Rapital Bank</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h6 class="title"><span>Resources</span></h6>
								<ul>
									<li><a href="{{ route('resource.community')}}">Community</a></li>
									<li><a href="{{ route('resource.brandkit')}}">Brand Kit</a></li>
									<li><a href="{{ route('resource.blog')}}">Blog</a></li>
									<li><a href="{{ route('resource.whitepaper')}}">White Paper</a></li>
									{{-- <li><a href="{{ route('resource.smartcontract')}}">Smart contract</a></li> --}}
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row align-items-end">					
					<div class="col-md-6 order-md-2">
						<div class="row">
							<div class="col-md-6 menuFooter">
								<h6 class="title"><span>Compay</span></h6>
								<ul>
									<li><a href="{{ route('company.about') }}">About Us</a></li>
									{{-- <li><a href="{{ route('company.directors') }}">Board of Directors</a></li> --}}
									{{-- <li><a href="{{ route('company.advisor') }}">Technical Advisory Board</a></li> --}}
									<li><a href="{{ route('company.faqs') }}">FAQS</a></li>
									<li><a href="{{ route('company.contact') }}">Contact us</a></li>
								</ul>
							</div>
							<div class="col-md-6 social">
								<h6 class="title"><span>Social media</span></h6>
								<div class="row">
									<div class="col-4">
										<a href="javascript:void(0)" class="item"><i class="fa fa-instagram"></i></a>
									</div>
									<div class="col-4">
										<a href="javascript:void(0)" class="item"><i class="fa fa-facebook-f"></i></a>
									</div>
									<div class="col-4">
										<a href="javascript:void(0)" class="item"><i class="fa fa-youtube"></i></a>
									</div>
									<div class="col-4">
										<a href="javascript:void(0)" class="item"><i class="fa fa-linkedin"></i></a>
									</div>
									<div class="col-4">
										<a href="javascript:void(0)" class="item"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 order-md-1">
						<div class="copyright">
							<p class="mb-1">Copyright ?? 2021 - 2022 Hyperaschain.com. All rights reserved.</p>
							<a href="">Privacy Notice</a>   |   <a href="">Legal</a>   |   <a href="">Status</a>   |   <a href="">Cookie Preferences</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Js File -->
		<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<script>
			$('.pressRelease .list').owlCarousel({
				items: 10,
			   	loop: true,
			    margin: 10,
			    dots: false,
			    responsive:{
			        0:{
			            items:3
			        },
			        600:{
			            items:5
			        },
			        1000:{
			            items:10
			        }
			    }
			});
			$('.founderInfo-carousel').owlCarousel({
				items: 3,
			   	loop: true,
			   	nav: false,
			   	dots: false,
			   	responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:2
			        },
			        1000:{
			            items:5
			        }
			    }
			})
		</script>	
        @stack('script')
	</body>
</html>
