@extends('layouts.app')

@section('content')
    <div id="aboutPage">
    	<section class="p-0">
	    	<img src="{{ asset('img/banner-about.jpg') }}" class="w-100">
	    </section>
	    <section>
	    	<div class="container">
	    		<h2 class="sectionHeading">The CMC Chain mission</h2>
	    		<div class="row">
	    			<div class="col-md-6">
	    				<p>We envision a Web where our identity and our data is our own - safely secured from any central authority.</p>
	    				<img src="{{ asset('img/img-18.png') }}" class="w-100">
	    			</div>
	    			<div class="col-md-6">
	    				<p>CMC Chain will enable a completely decentralized web where users are in control.</p>
	    				<p>CMC Chain is built to connect private and consortium chains, public and permissionless networks, oracles, and future technologies that are yet to be created. CMC Chain facilitates an internet where independent blockchains can exchange information and transactions in a trustless way via the Polkadot relay chain.</p>
	    				<p>CMC Chain makes it easier than ever to create and connect decentralized applications, services, and institutions. By empowering innovators to build better solutions, we seek to free society from its reliance on a broken web where its large institutions can’t violate our trust.</p>
	    				<a href="#" class="btn btnOutlineRed sm">Learn About the Technology</a>
	    			</div>
	    		</div>
	    	</div>
	    </section>
	    <section class="pb-0">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6">
	    				<h2 class="sectionHeading">Who's building CMC Chain?</h2>
	    				<p>CMC Chain is the flagship project by Web3 Foundation, a Swiss Foundation founded to facilitate a fully functional and user-friendly decentralized web.</p>
	    				<p>The Web3 Foundation is partnering with best-in-class entities to build CMC Chain and foster development of the services and applications that will run on it.</p>
	    				<p>Researchers from ftxfund and CMC Chain, developers from Parity Technologies, and capital partners from crypto-funds such as Polychain Capital are all working together to develop a superlative realization of Web3, with CMC Chain at its core.</p>
	    				<p>Web3 Foundation is providing grants for development of the ecosystem.</p>
	    			</div>
	    			<div class="col-md-6 align-self-end">
	    				<img src="{{ asset('img/img-19.jpg') }}" class="w-100">
	    			</div>
	    		</div>
	    	</div>
	    </section>
	    <section class="p-0 established">
	    	<img src="{{ asset('img/banner-about-2.jpg') }}" class="w-100">
	    	<div class="text">Founded by some of the blockchain <br>industry’s foremost builders</div>
	    </section>
	    <section class="founderInfo p-0">
	    	<div class="container">
				<div class="founderInfo-carousel owl-carousel owl-theme">
					<div class="item">
						<div class="inner">
							<h5>Robert Habermeier</h5>
							<p>Founder</p>
							<div>Robert Habermeier is a Thiel Fellow and co-founder of Polkadot. He has a research and development background in blockchains, distributed systems, and cryptography. A longtime member of the Rust community, he has focused on leveraging the language’s features to build highly parallel and performant solutions.</div>
						</div>
					</div>
					<div class="item">
						<div class="inner">
							<h5>Robert Habermeier</h5>
							<p>Founder</p>
							<div>Robert Habermeier is a Thiel Fellow and co-founder of Polkadot. He has a research and development background in blockchains, distributed systems, and cryptography. A longtime member of the Rust community, he has focused on leveraging the language’s features to build highly parallel and performant solutions.</div>
						</div>
					</div>
					<div class="item">
						<div class="inner">
							<h5>Robert Habermeier</h5>
							<p>Founder</p>
							<div>Robert Habermeier is a Thiel Fellow and co-founder of Polkadot. He has a research and development background in blockchains, distributed systems, and cryptography. A longtime member of the Rust community, he has focused on leveraging the language’s features to build highly parallel and performant solutions.</div>
						</div>
					</div>
				</div>
			</div>
	    </section>
	    <section class="inThePress text-center">
	    	<div class="container">
	    		<h4 class="mb-4">In the press</h4>
	    		<img src="{{ asset('img/inthepress-logo.jpg') }}">
	    	</div>
	    </section>
    </div>
@endsection
