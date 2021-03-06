@extends('layouts.app')

@section('content')

		<!-- Banner -->
		<section class="banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12">
						<h1 class="sectionHeading">This is The Future Of Finance</h1>
						<h2 class="sectionSubHeading">The convergence between decentralized and traditional financial models is accelerating and we are here to power it.</h2>
						<div class="bannerLink">
							<a href="#" class="btn btnOutlineRed text-uppercase">white paper</a>
							<a href="{{ route('technology.capabilities') }}" class="btn btnRed text-uppercase">smart contract</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Welcome -->
		<section class="welcome bgWhite bgArrow">
			<div class="container">
				<div class="welcomeText">
					<h2 class="sectionHeading">Welcome to HYPERAS chain</h2>
					<p>HYPERAS chain is the first decentralized interoperable and self-optimised blockchain infrastructure. We aim to push the current boundaries by solving one of the most prominent challenges facing blockchain technology - fragmentation of the blockchain ecosystems.</p>
					<p>Our goal is to create a unified platform that combines all participants collective strengths to lay the foundation for global blockchain mass adoption.</p>

				</div>
				<img src="{{ asset('img/img-welcome.jpg') }}" alt="">
			</div>
		</section>

		<!-- What is CMC -->
		<section class="whatIsCmc bgGradBlue bgArrow">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="sectionHeading">What is HYPERAS chain?</h2>
						
						<p>HYPERAS chain is a blockchain infrastructure that helps connect other blockchains.</p>
						<p>With our non-invasive cross-chain technology HYPERAS chain operates as a data conduit that allows cross-chain communications between public or private blockchains regardless of their protocols. HYPERAS chain can transfer both assets and data without requiring any change on participating blockchains.</p>
						<p>This allows developers to build cross-chain applications on HYPERAS chain with ease. Our unified infrastructure helps solutions run on multiple platforms by enabling interoperability among them and making the implementation as straightforward as possible from the developer's perspective.</p>

					</div>
					<div class="col-md-6 text-center d-none d-md-block">
						<img src="{{ asset('img/img-cube.png') }}" alt="">
					</div>
				</div>
				<div class="row g-0 listAbility">
					<div class="col-lg-3 col-md-6">
						<div class="item">
							<img src="{{ asset('img/icon-scalability.png') }}" alt="">
							<h5 class="title">Scalability</h5>
							<p>We scale internally and externally. DPOS consensus can afford up to 100k TPS. ESWIM and CMNR can support ???routing??? and ???load balancing??? transactions, such as smart contract deployment. Hence, we help avoid sudden congestions at any specific time or event.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="item">
							<img src="{{ asset('img/icon-interoperability.png') }}" alt="">
							<h5 class="title">Interoperability</h5>
							<p>We invented Dual-node, a non-invasive cross-chain technology. Dual-node allows Dapps to perform different actions on different blockchain networks simultaneously. We call this ability to trigger actions on one chain from another chain - true interoperability.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="item">
							<img src="{{ asset('img/icon-developability.png') }}" alt="">
							<h5 class="title">Developability</h5>
							<p>Developing dApps on HYPERAS chain is more convenient than ever. Our technology helps developers cater to the broadest possible user base. KSML enables cross-chain-ready smart contracts. CMNR makes dApps deployable wherever they fit best.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="item">
							<img src="{{ asset('img/icon-adoptability.png') }}" alt="">
							<h5 class="title">Adoptability</h5>
							<p>At consumer level non-crypto people can access multi-chain and cross-chain dApps built by our partners with mobile-first mentality. At enterprise level Dual-node enables hybrid solutions for businesses to easily adopt both public and private blockchains tailored to their needs.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Hosted projects -->
		<section class="hostedProjects bgLightBlue bgArrow">
			<div class="container">
				<h2 class="sectionHeading">HYPERAS chain Foundation Hosted Projects</h2>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="item projectFinished">
							<div class="thumb">
								<img src="{{ asset('img/real-estate-thumb.jpg') }}" alt="">
							</div>
							<div class="bgGradPurple assetCall d-flex flex-column align-items-center justify-content-center">
								<div class="fw-medium">Property cover</div>
								<div class="fw-bold text-uppercase">CAPITAL CALL SUCCESS</div>
							</div>
							<div class="assetOverview">
								<div class="assetName">Blue Angel Building</div>
								<div class="assetStatus">PROJECT FINISHED</div>
								<div class="assetInfo">
									<div class="d-flex justify-content-between mb-2">
										<div class="text">
											<img src="{{ asset('img/icon-clock.png') }}" class="icon"> Investment time
										</div>
										<div class="value fw-bold">6 months</div>
									</div>
									<div class="d-flex justify-content-between">
										<div class="text">
											<img src="{{ asset('img/icon-usd.png') }}" class="icon"> Expected profit
										</div>
										<div class="value fw-bold">15%</div>
									</div>
									<hr class="my-2">
									<div class="d-flex justify-content-between investor mb-1">
										<div>32 Investor</div>
										<div class="value fw-bold">1,000/1,000</div>
									</div>
									<div class="progress">
										<div class="progress-bar bgGradPurple" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<a href="#" class="d-flex justify-content-between align-items-center address">
										<div>
											<img src="{{ asset('img/icon-location-2.png') }}" class="icon"> 1250 Bel air RD, Los Angrles, CA
										</div>
										<i class="fas fa-arrow-right more"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="item projectCalling">
							<div class="thumb">
								<img src="{{ asset('img/real-estate-thumb.jpg') }}" alt="">
							</div>
							<div class="bgGradPurple assetCall d-flex flex-column align-items-center justify-content-center">
								<div class="fw-bold text-uppercase">CAPITAL CALL SUCCESS</div>
							</div>
							<div class="assetOverview">
								<div class="assetName">Blue Angel Building</div>
								<div class="assetStatus">PROJECT FINISHED</div>
								<div class="assetInfo">
									<div class="d-flex justify-content-between mb-2">
										<div class="text">
											<img src="{{ asset('img/icon-clock.png') }}" class="icon"> Investment time
										</div>
										<div class="value fw-bold">6 months</div>
									</div>
									<div class="d-flex justify-content-between">
										<div class="text">
											<img src="{{ asset('img/icon-usd.png') }}" class="icon"> Expected profit
										</div>
										<div class="value fw-bold">15%</div>
									</div>
									<hr class="my-2">
									<div class="d-flex justify-content-between investor mb-1">
										<div>32 Investor</div>
										<div class="value fw-bold">1,000/1,000</div>
									</div>
									<div class="progress">
										<div class="progress-bar bgGradPurple" role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<a href="#" class="d-flex justify-content-between align-items-center address">
										<div>
											<img src="{{ asset('img/icon-location-2.png') }}" class="icon"> 1250 Bel air RD, Los Angrles, CA
										</div>
										<i class="fas fa-arrow-right more"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="item projectComing">
							<div class="thumb">
								<img src="{{ asset('img/real-estate-thumb.jpg') }}" alt="">
								<div class="time">03:16:59:48</div>
							</div>
							<div class="bgGradPurple assetCall d-flex flex-column align-items-center justify-content-center">
								<div class="fw-bold text-uppercase">1,000 portion</div>
							</div>
							<div class="assetOverview">
								<div class="assetName">Muse Building</div>
								<div class="assetStatus">COMING UP</div>
								<div class="assetInfo">
									<div class="d-flex justify-content-between mb-2">
										<div class="text">
											<img src="{{ asset('img/icon-clock.png') }}" class="icon"> Investment time
										</div>
										<div class="value fw-bold">6 months</div>
									</div>
									<div class="d-flex justify-content-between">
										<div class="text">
											<img src="{{ asset('img/icon-usd.png') }}" class="icon"> Expected profit
										</div>
										<div class="value fw-bold">15%</div>
									</div>
									<hr class="my-2">
									<div class="d-flex justify-content-between investor mb-1">
										<div>0</div>
										<div class="value fw-bold">1,000/1,000</div>
									</div>
									<div class="progress">
										<div class="progress-bar bgGradPurple" role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<a href="#" class="d-flex justify-content-between align-items-center address">
										<div>
											<img src="{{ asset('img/icon-location-2.png') }}" class="icon"> 1250 Bel air RD, Los Angrles, CA
										</div>
										<i class="fas fa-arrow-right more"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="item projectComing">
							<div class="thumb">
								<img src="{{ asset('img/real-estate-thumb.jpg') }}" alt="">
								<div class="time">coming up</div>
							</div>
							<div class="bgGradPurple assetCall d-flex flex-column align-items-center justify-content-center">
								<div class="fw-bold text-uppercase">1,000 portion</div>
							</div>
							<div class="assetOverview">
								<div class="assetName">Muse Building</div>
								<div class="assetStatus">updating</div>
								<div class="assetInfo">
									<div class="d-flex justify-content-between mb-2">
										<div class="text">
											<img src="{{ asset('img/icon-clock.png') }}" class="icon"> Investment time
										</div>
										<div class="value fw-bold">6 months</div>
									</div>
									<div class="d-flex justify-content-between">
										<div class="text">
											<img src="{{ asset('img/icon-usd.png') }}" class="icon"> Expected profit
										</div>
										<div class="value fw-bold">15%</div>
									</div>
									<hr class="my-2">
									<div class="d-flex justify-content-between investor mb-1">
										<div>0 Investor</div>
										<div class="value fw-bold">1,000/1,000</div>
									</div>
									<div class="progress">
										<div class="progress-bar bgGradPurple" role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<hr>
									<a href="#" class="d-flex justify-content-between align-items-center address">
										<div>
											<img src="{{ asset('img/icon-location-2.png') }}" class="icon"> 1250 Bel air RD, Los Angrles, CA
										</div>
										<i class="fas fa-arrow-right more"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- investors -->
		<section class="investors bgWhite bgArrow">
			<div class="container">
				<h2 class="sectionHeading">Investors & Partners</h2>
				<div class="text-center">
					<img src="{{ asset('img/img-investors.png') }}" alt="">
				</div>
			</div>
		</section>

		<!-- press release -->
		<section class="pressRelease bgLightBlue">
			<div class="container">
				<h2 class="sectionHeading">Press Release</h2>
			</div>
			<div class="owl-carousel owl-theme list">
				<div class="item">
					<img src="{{ asset('img/project-logo-1.png') }}" alt="">
				</div>
			</div>
			{{-- <div class="text-center">
				<a href="javascript:void(0)" class="more">read more</a>
			</div> --}}
		</section>
		
@endsection
