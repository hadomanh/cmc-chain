@extends('layouts.app')

@section('content')

		<!-- Banner -->
		<section class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h1 class="sectionHeading">This is The Future Of Finance</h1>
						<h2 class="sectionSubHeading">The convergence between decentralized and traditional financial models is accelerating and we are here to power it.</h2>
						<div class="bannerLink">
							<a href="#" class="btn btnWhite text-uppercase">white paper</a>
							<a href="#" class="btn btnRed text-uppercase">smart contract</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Welcome -->
		<section class="welcome bgWhite bgArrow">
			<div class="container">
				<div class="welcomeText">
					<h2 class="sectionHeading">Welcome to CMCchain</h2>
					<p>CMCchain is The First Decentralized Interoperable and Self-Optimised Blockchain Infrastructure. We aim to push the current boundaries by solving one of the most prominent challenges facing blockchain technology — fragmentation of the blockchain ecosystems.</p>
					<p>Our goal is to create a unified platform that combines all participants' collective strengths to lay the foundation for global blockchain mass adoption.</p>
				</div>
				<img src="{{ asset('img/img-welcome.jpg') }}" alt="">
			</div>
		</section>

		<!-- What is CMC -->
		<section class="whatIsCmc bgGradBlue bgArrow p-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="sectionHeading">What is CMCchain?</h2>
						<p>CMCchain is a blockchain infrastructure that helps connect other blockchains.</p>
						<p>With our non-invasive cross-chain technology, CMCchain operates as a data conduit that allows cross-chain communications between public or private blockchains regardless of their protocols. CMCchain can transfer both assets and data without requiring any change on participating blockchains.</p>
						<p>It means developers can build cross-chain applications on CMCchain with ease. Our unified infrastructure helps solutions run on multiple platforms by enabling interoperability among them and making the implementation as straightforward as possible from the developer's perspective.</p>
					</div>
					<div class="col-md-6 text-center">
						<img src="{{ asset('img/img-cube.png') }}" alt="">
					</div>
				</div>
				<div class="row g-0 listAbility">
					<div class="col-md-3">
						<div class="item">
							<img src="{{ asset('img/icon-scalability.png') }}" alt="">
							<h5 class="title">Scalability</h5>
							<p>We scale internally and externally. DPOS consensus can afford up to 100k TPS. ESWIM and CMNR can support “routing” and “load balancing” transactions, such as smart contract deployment. Hence, we help avoid sudden congestions at any specific time or event.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="{{ asset('img/icon-interoperability.png') }}" alt="">
							<h5 class="title">Interoperability</h5>
							<p>We invented Dual-node, a non-invasive cross-chain technology. Dual-node allows Dapps to perform different actions on different blockchain networks simultaneously. We call this ability to trigger actions on one chain from another chain - true interoperability.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="{{ asset('img/icon-developability.png') }}" alt="">
							<h5 class="title">Developability</h5>
							<p>Developing Dapps on CMCchain is more convenient than ever. Our technology helps developers cater to the broadest possible user base. KSML enables cross-chain-ready smart contracts. CMNR makes Dapps deployable wherever they fit most.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="{{ asset('img/icon-adoptability.png') }}" alt="">
							<h5 class="title">Adoptability</h5>
							<p>At consumer level, non-crypto people can access multi-chain and cross-chain Dapps built by our partners with mobile-first mentality. At enterprise level, Dual-node enables hybrid solutions for businesses to easily adopt both public and private blockchain tailored to their needs.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Hosted projects -->
		<section class="hostedProjects bgLightBlue bgArrow">
			<div class="container">
				<h2 class="sectionHeading">CMCchain Foundation Hosted Projects</h2>
				<div class="listProjects">
					<div class="total">Graduated Hyperledger Projects (68)</div>
					<div class="row">
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="listProjects">
					<div class="total">Incubating Hyperledger Projects (98)</div>
					<div class="row">
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<a href="#">
									<img src="{{ asset('img/project-logo-1.png') }}" alt="">
									<div class="info">
										<div class="d-flex justify-content-between">
											<div>Hyperledger Aries</div>
											<div><i class="fas fa-star"></i>1,162</div>
										</div>
										<div class="mt-1">Hyperledger</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<h2 class="sectionHeading text-center"><a href=""><span>View</span>	the full interactive landscape</a></h2>
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
			<div class="owl-carousel owl-theme">
				<div class="item">
					<img src="{{ asset('img/project-logo-1.png') }}" alt="">
				</div>
				<div class="item">
					<img src="{{ asset('img/project-logo-1.png') }}" alt="">
				</div>
				<div class="item">
					<img src="{{ asset('img/project-logo-1.png') }}" alt="">
				</div>
				<div class="item">
					<img src="{{ asset('img/project-logo-1.png') }}" alt="">
				</div>
				<div class="item">
					<img src="{{ asset('img/project-logo-1.png') }}" alt="">
				</div>
				<div class="item">
					<img src="{{ asset('img/project-logo-1.png') }}" alt="">
				</div>
				<div class="item">
					<img src="{{ asset('img/project-logo-1.png') }}" alt="">
				</div>
			</div>
			<div class="text-center">
				<a href="" class="more">read more</a>
			</div>
		</section>

		<!-- newsletter -->
		<section class="newsletter bgGradBlue">
			<div class="container">
				<div class="row align-items-center">
		            <div class="col-auto text-end">
		                <h6 class="mb-0">Stay ahead</h6>
		                <div>weekly insights straight to your inbox</div>
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
						<img src="{{ asset('img/logo-footer.png" class') }}="footerLogo">
						<h6 class="title"><span>CMC CHAIN LTD (UK)</span></h6>
						<ul class="list-unstyled">
							<li class="mb-2"><span class="fw-medium">Address 1:</span> No. 40 Gracechurch Street, London, EC3V 0BT, USA</li>
							<li class="mb-2"><span class="fw-medium">Address 2:</span> 116 Albert (City of Ottawa, Ontario), Canada</li>
							<li><span class="fw-medium">Email:</span> support@cmcchain.io   |   <span class="fw-medium">Website:</span> www.cmcchain.io</li>
						</ul>
					</div>
					<div class="col-md-6">
						<div class="row menuFooter">
							<div class="col-md-6">
								<h6 class="title"><span>Technology</span></h6>
								<ul>
									<li><a href="">Capabilities</a></li>
									<li><a href="">Core Protocol</a></li>
									<li><a href="">Research</a></li>
									<li><a href="">CMC Nativecoin</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h6 class="title"><span>Ecosystem</span></h6>
								<ul>
									<li><a href="">Testnet</a></li>
									<li><a href="">Mainnet</a></li>
									<li><a href="">CMC Wallets</a></li>
									<li><a href="">Wowidex</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h6 class="title"><span>External Resourcus</span></h6>
								<ul>
									<li><a href="">CMC invest</a></li>
									<li><a href="">CMC foundation </a></li>
									<li><a href="">Diasplat</a></li>
									<li><a href="">Onstora</a></li>
									<li><a href="">Payment Gate </a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h6 class="title"><span>Resource</span></h6>
								<ul>
									<li><a href="">Community</a></li>
									<li><a href="">Documentations</a></li>
									<li><a href="">Brand Kit</a></li>
									<li><a href="">Blog</a></li>
									<li><a href="">White Paper</a></li>
									<li><a href="">Smart contract</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row align-items-end">
					<div class="col-md-6">
						<div class="copyright">
							<p class="mb-1">Copyright © 2021 - 2022 CMCchain.io All rights reserved</p>
							<a href="">Privacy Notice</a>   |   <a href="">Legal</a>   |   <a href="">Status</a>   |   <a href="">Cookie Preferences</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6 menuFooter">
								<h6 class="title"><span>Compay</span></h6>
								<ul>
									<li><a href="">About Us</a></li>
									<li><a href="">Board of Directors</a></li>
									<li><a href="">Technical Advisory Board</a></li>
									<li><a href="">FAQS</a></li>
									<li><a href="">Contact us</a></li>
								</ul>
							</div>
							<div class="col-md-6 social">
								<h6 class="title"><span>Social media</span></h6>
								<div class="row">
									<div class="col-md-4">
										<a href="" class="item"><i class="fa fa-instagram"></i></a>
									</div>
									<div class="col-md-4">
										<a href="" class="item"><i class="fa fa-facebook-f"></i></a>
									</div>
									<div class="col-md-4">
										<a href="" class="item"><i class="fa fa-youtube"></i></a>
									</div>
									<div class="col-md-4">
										<a href="" class="item"><i class="fa fa-linkedin"></i></a>
									</div>
									<div class="col-md-4">
										<a href="" class="item"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
@endsection
