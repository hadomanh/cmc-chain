@extends('layouts.app')

@section('content')
    <div id="comPage">
    	<section class="p-0">
    		<img src="{{ asset('img/banner-community.jpg') }}" class="w-100">
    	</section>
    	<section>
    		<div class="container">
    			<div class="mw-700 text-center">
    				<h2 class="sectionHeading underline text-uppercase">Join the HYPERAS chain community</h2>
    				<p>HYPERAS chain is a 100% open source project created to enable a decentralized web and better society. Anyone can contribute!</p>
    			</div>
    		</div>
    	</section>
    	<section class="bg-grey">
    		<div class="container">
    			<div class="listCommunity">
	    			<div class="row">
	    				<div class="col-lg-4 col-md-6">
	    					<div class="item d-flex align-items-center">
	    						<div class="icon"><i class="fab fa-twitter"></i></div>
	    						<div>
	    							<h6 class="name">Twitter</h6>
	    							<div>Follow @ HYPERAS chain</div>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="col-lg-4 col-md-6">
	    					<div class="item d-flex align-items-center">
	    						<div class="icon"><i class="far fa-envelope"></i></div>
	    						<div>
	    							<h6 class="name">Mailing List</h6>
	    							<div>Don't miss updates</div>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="col-lg-4 col-md-6">
	    					<div class="item d-flex align-items-center">
	    						<div class="icon"><i class="fab fa-reddit-alien"></i></div>
	    						<div>
	    							<h6 class="name">Reddit</h6>
	    							<div>Discuss HYPERAS chain news</div>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="col-lg-4 col-md-6">
	    					<div class="item d-flex align-items-center">
	    						<div class="icon"><i class="fab fa-discord"></i></div>
	    						<div>
	    							<h6 class="name">Discord</h6>
	    							<div>Discord with the community</div>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="col-lg-4 col-md-6">
	    					<div class="item d-flex align-items-center">
	    						<div class="icon"><i class="fab fa-github"></i></div>
	    						<div>
	    							<h6 class="name">Github</h6>
	    							<div>Contribute to the codebase</div>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="col-lg-4 col-md-6">
	    					<div class="item d-flex align-items-center">
	    						<div class="icon"><i class="far fa-life-ring"></i></div>
	    						<div>
	    							<h6 class="name">Element Chat</h6>
	    							<div>Get support</div>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="col-lg-4 col-md-6">
	    					<div class="item d-flex align-items-center">
	    						<div class="icon"><i class="far fa-file-alt"></i></div>
	    						<div>
	    							<h6 class="name">Documentation</h6>
	    							<div>Read and contribute to docs</div>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="col-lg-4 col-md-6">
	    					<div class="item d-flex align-items-center">
	    						<div class="icon"><i class="fab fa-youtube"></i></div>
	    						<div>
	    							<h6 class="name">Youtube</h6>
	    							<div>Watch conference videos</div>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="col-lg-4 col-md-6">
	    					<div class="item d-flex align-items-center">
	    						<div class="icon"><i class="fab fa-facebook"></i></div>
	    						<div>
	    							<h6 class="name">Facebook</h6>
	    							<div>Follow @ HYPERAS chain</div>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
    			</div>
    			<h2 class="sectionHeading underline text-uppercase">Run a node and interact with the HYPERAS chain testnet</h2>
    			<div class="row">
    				<div class="col-md-6">
    					<p>If you'd like to play with HYPERAS chain, you'll need to install and run the Parity HYPERAS chain client. Get the client at <a href="#" class="btn btnOutlineBlue xs">Parity’s HYPERAS chain repo</a></p>
    					<p>Alexander is the current default public testnet for HYPERAS chain. By default, any node running on the Alexander testnet will appear on the <a href="#" class="btn btnOutlineBlue xs">telemetry.HYPERAS chain.io</a></p>
    					<p>The testnet allows you to create accounts, propose governance referenda, stake testnet DOT to become a validator or nominate other accounts as validators with your testnet DOT.</p>	
    				</div>
    				<div class="col-md-6">
    					<p>Connect your running node to the main <a href="#" class="btn btnOutlineBlue xs">HYPERAS chain user interface</a> to play around.</p>
    					<p>Get testnet DOT to stake by following these instructions on the <a href="#" class="btn btnOutlineBlue xs">HYPERAS chain Wiki</a></p>
    					<p>If you don’t want to run a node, you can still interact with the network by using <a href="#" class="btn btnOutlineBlue xs">the explorer</a></p>
    					<p>Before interacting with the testnet, please read this <a href="#" class="btn btnOutlineBlue xs">legal notice</a></p>
    				</div>
    			</div>
    		</div>
    	</section>
    	<section class="bgGradBlue text-center">
    		<div class="container">
    			<h2 class="sectionHeading underline text-uppercase">Getting Involved</h2>
    			<div>From running a validator on HYPERAS chain, to applying for a Web3 Foundation</div>
				<div>Grant or joining the HYPERAS chain Ambassador Program — there are many ways to engage with the HYPERAS chain community.</div>
    		</div>
    	</section>
    	<section>
    		<div class="container">
    			<h2 class="sectionHeading underline text-uppercase">Become a validator</h2>
    			<div class="row mb-4">
    				<div class="col-md-6">
    					<h5>1. Set up your machine</h5>
    					<p>In addition to any usual CLI parameters that you run HYPERAS chain with you'll also need:</p>
    					<ul class="style-1">
    						<li><span class="colorpink">A validator - </span> This tells your node to try to validate when it sees itself as a listed authority on the network</li>
							<li><span class="colorpink">A key < SEED > - </span> This provides your node with a secret key that lets it know whether it's a listed authority on the network and if it is lets it sign statements to authorise the creation of new blocks</li>
    					</ul>
    				</div>
    				<div class="col-md-6">
    					<h5>2. Apply to validate</h5>
    					<p>New validators will be chosen every 24 hours on mainnet. You’ll need to create separate accounts for Controller, Session and Stash keys on the HYPERAS chain UI (https://cmcchain.org/apps/#/accounts/create). These accounts will be used to represent and control the validator node you just set up.</p>
    					<p>Next you will also need to get some CMC from the faucet or by asking on Element. Assuming you have more CMC than the lowest staked validator or there is an open validator slot you can register to be staked. A step-by-step guide demonstrating how to set up your accounts and bond your CMC is available on the wiki.</p>
    				</div>	
    			</div>
    			<div class="text-center">
    				<h5>Want to become a validator?</h5>
    				{{-- <div class="my-4"><a href="#" class="btn btnOutlineRed sm">LEARN MORE <span class="ms-2">⟶</span></a></div> --}}
    				<p>You can see validator stats on <a href="#" class="colorpink"><ins>Telemetry</ins></a>.</p>
    			</div>
    		</div>
    	</section>
    	<section class="bgGrey">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-6">
    					<h2 class="sectionHeading text-uppercase">Get a grant to build the HYPERAS chain ecosystem</h2>
    					<p>HYPERAS chain is a brand new network with a burgeoning ecosystem. The Web3 Foundation is sponsoring community development of software services, including:</p>
    					<ul class="style-1">
    						<li>Development and deployment tooling (e.g. IDEs, HYPERAS chain development kits)</li>
    						<li>HYPERAS chain Runtime Modules (e.g. interoperability, governance)</li>
    						<li>Second layer protocols (e.g. dedicated HYPERAS chain, state channels)</li>
    						<li>Monitoring (e.g. explorers)</li>
    						<li>Protocol integrations (e.g. bridges to other blockchains, distributed file storage)</li>
    					</ul>
    					<div class="d-flex">
							<div class="mx-auto">
								<a href="#" class="btn btnOutlineRed sm">See Grants and Bounties <span class="ms-2">⟶</span></a>
							</div>
						</div>
    				</div>
    				<div class="col-md-6">
    					<h2 class="sectionHeading text-uppercase">Become a HYPERAS chain Ambassador</h2>
    					<p>Check out the post and apply to join the vibrant HYPERAS chain community.</p>
						<div class="d-flex">
							<div class="mx-auto">
								<a href="#" class="btn btnOutlineRed sm">Apply to Become an Ambassador <span class="ms-2">⟶</span></a>
							</div>
						</div>
						
    				</div>
    			</div>
    		</div>
    	</section>
    	{{-- <section class="event">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-6">
    					<h2 class="sectionHeading text-uppercase">Upcoming events</h2>
    					<p>Want to host a HYPERAS chain meetup in your city? Check out the resources and guides for hosting your own HYPERAS chain meetup.</p>
    					<a href="#" class="btn btnOutlineRed sm">See Grants and Bounties</a>
    				</div>
    			</div>
    		</div>
    	</section>
    	<section>
    		<div class="container text-center">
    			<h2 class="sectionHeading">Get your questions answered</h2>
    			<div class="mb-3"><a href="#" class="btn btnOutlineRed sm">Join the HYPERAS chain Chat</a></div>
    			<p>or learn how to <a href="#" class="colorpink"><ins>build on HYPERAS chain</ins></a>.</p>
    		</div>
    	</section> --}}
    </div>		
@endsection

@push('script')
    
@endpush
