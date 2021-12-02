@extends('layouts.app')

@section('content')
    <div id="testnetPage">
    	<section class="p-0">
	    	<img src="{{ asset('img/banner-testnet.jpg') }}" class="w-100">
	    </section>
	    <section>
	    	<div class="container text-center">
	    		<h2 class="sectionHeading underline text-uppercase">CMCchain Products</h2>
	    		<p>We bring users with the ultimate experiences and aim for mass adoption via our unique products.</p>
	    	</div>
	    </section>
	    <section class="bgGrey advantage">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6">
	    				<h6>CMCchain Mainnet</h6>
	    				<p>Our unique interoperability between all blockchains, regardless of protocol and without assimilation, enables CMCchain to be a backbone of Web 3.0.</p>
	    				<h6 class="my-4">3 Key advantages of CMCchain</h6>
	    				<div class="item">
	    					<span>1</span> Solving blockchains common barriers without trade-off for security, privacy, or speed.
	    				</div>
	    				<div class="item">
	    					<span>2</span> 10,000x cheaper fees than most market offers.
	    				</div>
	    				<div class="item">
	    					<span>3</span> CMCchain smart markup language (KSML) allows developers to build and deploy DAPPs across any blockchains regardless of their native language.
	    				</div>
	    			</div>
	    			<div class="col-md-6">
	    				<img src="{{ asset('img/img-14.png') }}" class="d-block mx-auto">
	    				<div class="text-center mt-5">
	    					<a href="#" class="btn btnOutlineBlue sm">Access to Mainnet</a>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>
	    <section>
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6">
	    				<img src="{{ asset('img/img-15.png') }}" width="450" class="d-block mx-auto">
	    			</div>
	    			<div class="col-md-6">
	    				<div class="row flex-column h-100">
	    					<div class="col">
	    						<h5 class="text-uppercase mb-5">Master Paygate Wallet</h5>
	    						<p>Master Paygate Wallet provides an easy-to-use, all-in-one portal to access all of your assets and DApps.</p>
	    						<p>Master Paygate Wallet is available as web browser extensions (Chrome and Firefox) and also mobile applications on AppStore and Playstore.</p>
	    					</div>
	    					<div class="col-auto text-center">
	    						<a href="#" class="d-inline-block me-3">
	    							<img src="{{ asset('img/appstore.jpg') }}">
	    						</a>
	    						<a href="#" class="d-inline-block">
	    							<img src="{{ asset('img/googleplay.jpg') }}">
	    						</a>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>
	    <section class="bgGrey cmcDex">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6">
	    				<h5 class="text-uppercase">CMCChain Dex</h5>
	    				<p class="fs-5">Full CEX experiences. Cross-chain . Decentralised</p>
	    				<p class="mb-4">Imagine a full featured exchange, decentralised and cross-chain! Based on the Dual-Node technology, CMCchain has the ability to revolutionize multi-chain swapping. CMCchain is the first to combine the benefits of CEXes and DEXes, making it “the best of both worlds”.</p>
	    				<p class="fs-5">Advantages CMCchain Exchange</p>
	    				<div class="whiteBox">
	    					<ul class="style-2 m-0 p-0">
	    						<li>Powerful trading tools: Stop — Market Order, Limit order (in the future)</li>
	    						<li>Low slippage</li>
	    						<li>Fast transfer speed</li>
	    						<li>Near-zero low fee</li>
	    						<li>5 seconds settlements</li>
	    					</ul>
	    				</div>
	    			</div>
	    			<div class="col-md-6">
	    				<div class="row flex-column h-100">
	    					<div class="col text-center">
	    						<img src="{{ asset('img/img-16.png') }}">
	    					</div>
	    					<div class="col-auto text-center">
	    						<a href="#" class="btn btnOutlineBlue sm">Open CMCDEX</a>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>
	    <section class="listNews">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-4">
	    				<div class="item">
	    					<div class="row flex-column">
	    						<div class="col-auto">
	    							<a href="#" class="thumb d-block">
				    					<img src="{{ asset('img/img-17.jpg') }}" class="w-100">
				    				</a>		
	    						</div>
	    						<div class="col">
	    							<div class="info">
				    					<div class="row flex-column">
				    						<div class="col">
						    					<span class="badge">Loyalty</span>
						    					<h5 class="title">CMCCHAIN MEMBERSHIP</h5>
						    					<p>CMCchain membership is our effort to push the frontier of mass adoption. An app for the general public to earn, store, spend, and invest CMC, focusing on user experience and utilities.</p>
					    					</div>
					    					<div class="col-auto">
					    						<a href="#" class="readmore">read more</a>
					    					</div>
				    					</div>
				    				</div>	
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-md-4">
	    				<div class="item">
	    					<div class="row flex-column">
	    						<div class="col-auto">
	    							<a href="#" class="thumb d-block">
				    					<img src="{{ asset('img/img-17.jpg') }}" class="w-100">
				    				</a>		
	    						</div>
	    						<div class="col">
	    							<div class="info">
				    					<div class="row flex-column">
				    						<div class="col">
						    					<span class="badge">Finance</span>
						    					<h5 class="title">DEFILY</h5>
						    					<p>Defily Finance is a A Full-Stack Cross-Chain DEFI Platform for Staking and Yield Farming. DFL is a DeFi governance token combined with Meme force (DRAGON) with a real use case, set and ready for some financial disruption.</p>
					    					</div>
					    					<div class="col-auto">
					    						<a href="#" class="readmore">read more</a>
					    					</div>
				    					</div>
				    				</div>	
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-md-4">
	    				<div class="item">
	    					<div class="row flex-column">
	    						<div class="col-auto">
	    							<a href="#" class="thumb d-block">
				    					<img src="{{ asset('img/img-17.jpg') }}" class="w-100">
				    				</a>		
	    						</div>
	    						<div class="col">
	    							<div class="info">
				    					<div class="row flex-column">
				    						<div class="col">
						    					<span class="badge">Finance</span>
						    					<h5 class="title">DEFILY</h5>
						    					<p>Defily Finance is a A Full-Stack Cross-Chain DEFI Platform for Staking and Yield Farming. DFL is a DeFi governance token combined with Meme force (DRAGON) with a real use case, set and ready for some financial disruption.</p>
					    					</div>
					    					<div class="col-auto">
					    						<a href="#" class="readmore">read more</a>
					    					</div>
				    					</div>
				    				</div>	
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-md-4">
	    				<div class="item">
	    					<div class="row flex-column">
	    						<div class="col-auto">
	    							<a href="#" class="thumb d-block">
				    					<img src="{{ asset('img/img-17.jpg') }}" class="w-100">
				    				</a>		
	    						</div>
	    						<div class="col">
	    							<div class="info">
				    					<div class="row flex-column">
				    						<div class="col">
						    					<span class="badge">Finance</span>
						    					<h5 class="title">DEFILY</h5>
						    					<p>Defily Finance is a A Full-Stack Cross-Chain DEFI Platform for Staking and Yield Farming. DFL is a DeFi governance token combined with Meme force (DRAGON) with a real use case, set and ready for some financial disruption.</p>
					    					</div>
					    					<div class="col-auto">
					    						<a href="#" class="readmore">read more</a>
					    					</div>
				    					</div>
				    				</div>	
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-md-4">
	    				<div class="item">
	    					<div class="row flex-column">
	    						<div class="col-auto">
	    							<a href="#" class="thumb d-block">
				    					<img src="{{ asset('img/img-17.jpg') }}" class="w-100">
				    				</a>		
	    						</div>
	    						<div class="col">
	    							<div class="info">
				    					<div class="row flex-column">
				    						<div class="col">
						    					<span class="badge">Finance</span>
						    					<h5 class="title">DEFILY</h5>
						    					<p>Defily Finance is a A Full-Stack Cross-Chain DEFI Platform for Staking and Yield Farming. DFL is a DeFi governance token combined with Meme force (DRAGON) with a real use case, set and ready for some financial disruption.</p>
					    					</div>
					    					<div class="col-auto">
					    						<a href="#" class="readmore">read more</a>
					    					</div>
				    					</div>
				    				</div>	
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-md-4">
	    				<div class="item">
	    					<div class="row flex-column">
	    						<div class="col-auto">
	    							<a href="#" class="thumb d-block">
				    					<img src="{{ asset('img/img-17.jpg') }}" class="w-100">
				    				</a>		
	    						</div>
	    						<div class="col">
	    							<div class="info">
				    					<div class="row flex-column">
				    						<div class="col">
						    					<span class="badge">Finance</span>
						    					<h5 class="title">DEFILY</h5>
						    					<p>Defily Finance is a A Full-Stack Cross-Chain DEFI Platform for Staking and Yield Farming. DFL is a DeFi governance token combined with Meme force (DRAGON) with a real use case, set and ready for some financial disruption.</p>
					    					</div>
					    					<div class="col-auto">
					    						<a href="#" class="readmore">read more</a>
					    					</div>
				    					</div>
				    				</div>	
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>
    </div>
@endsection

@push('script')
    
@endpush
