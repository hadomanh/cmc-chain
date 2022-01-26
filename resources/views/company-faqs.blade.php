@extends('layouts.app')

@section('content')
    <div id="faqPage">
    	<section class="p-0">
	        <img src="{{ asset('img/banner-faq.jpg') }}" class="w-100">
	    </section>
	    <section>
	    	<div class="container">
	    		<h2 class="sectionHeading">HYPERAS chain FAQ</h2>
	    		<div class="row">
	    			<div class="col-lg-6 col-md-12">
	    				<div class="disclaimer">
	    					<h5>Disclaimer</h5>
	    					<div>HYPERAS chain is a work in progress. The following FAQ’s will continue to be updated as the HYPERAS chain platform evolves. The exact structures and technologies to be included at genesis are not finalized and can be subject to change.</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="accordion accordion-flush" id="accordionFaq">
	    			<div class="row">
	    				<div class="col-md-6">
	    					<div class="item">
		    					<h5 class="title">Technology</h5>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="true" aria-controls="faq-1">What is HYPERAS chain?</button>
									</h2>
									<div id="faq-1" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value, in a trust-free fashion; sharing their unique features while pooling their security. In brief, HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
											<p>HYPERAS chain is heterogeneous because it is entirely flexible and makes no assumptions about the nature or structure of the chains in the network. Even non-blockchain systems or data structures can become parachains if they fulfill a set of criteria.</p>
											<p>HYPERAS chain may be considered equivalent to a set of independent chains (e.g. a set containing Ethereum, Ethereum Classic, Namecoin and Bitcoin) except with important additions: pooled security and trust-free interchain transactability.</p>
											<p>Unlike previous blockchain implementations that provide a single chain of varying degrees of generality, HYPERAS chain provides a Relay Chain upon which a large number of verifiable data structures may be hosted. We call these data-structures “parallelized” chains or parachains. HYPERAS chain provides a networking and consensus layer that allows blockchain developers to focus on creating a state machine with unique features, such as formal verification or anonymity.</p>
											<p>HYPERAS chain consists of many parachains with potentially differing characteristics. Transactions can be spread out across the chains, allowing many more transactions to be processed in the same period of time. HYPERAS chain ensures that the security of all blockchains in the network is robust and that any dealings between them are faithfully executed. All parachains share security and state, meaning if one chain has a message reverted, all chains get reverted. It is also possible for independent chains with their own validators to be linked to HYPERAS chain via bridges, thereby foregoing Polkadot’s shared state and security system. These chains can benefit from HYPERAS chain’s interoperability without being hosted on the platform, examples of these would be Bitcoin and Ethereum.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
											Why do we need HYPERAS chain?
										</button>
									</h2>
									<div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
											How many chains can HYPERAS chain connect?
										</button>
									</h2>
									<div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4" aria-expanded="false" aria-controls="faq-4">
											Can HYPERAS chain connect any blockchain?
										</button>
									</h2>
									<div id="faq-4" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false" aria-controls="faq-5">
											What is the difference between a HYPERAS chain and a blockchain Bridge?
										</button>
									</h2>
									<div id="faq-5" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-6" aria-expanded="false" aria-controls="faq-6">
											What does it mean to be an active participant in HYPERAS chain?
										</button>
									</h2>
									<div id="faq-6" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-7" aria-expanded="false" aria-controls="faq-7">
											Where can I find a list of resources on HYPERAS chain?
										</button>
									</h2>
									<div id="faq-7" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-8" aria-expanded="false" aria-controls="faq-8">
											At what stage is development now?
										</button>
									</h2>
									<div id="faq-8" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-9" aria-expanded="false" aria-controls="faq-9">
											How do I get testnet DOT?
										</button>
									</h2>
									<div id="faq-9" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-10" aria-expanded="false" aria-controls="faq-10">
											When did HYPERAS chain launch?
										</button>
									</h2>
									<div id="faq-10" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									</div>
								</div>
							</div>
							<div class="item">
		    					<h5 class="title">Community</h5>
		    					<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-11" aria-expanded="true" aria-controls="faq-11">How can I join the community?</button>
									</h2>
									<div id="faq-11" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value in a trust-free fashion. It does so sharing their unique features while pooling their security. In brief HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
										</div>
									</div>
								</div>
							</div>
	    				</div>
	    				<div class="col-md-6">
							<div class="item">
								<h5 class="title">Team</h5>
		    					<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-13" aria-expanded="true" aria-controls="faq-13">Who is building HYPERAS chain?</button>
									</h2>
									<div id="faq-13" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value, in a trust-free fashion; sharing their unique features while pooling their security. In brief, HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-14" aria-expanded="true" aria-controls="faq-14">Who is working on behalf of HYPERAS chain?</button>
									</h2>
									<div id="faq-14" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value, in a trust-free fashion; sharing their unique features while pooling their security. In brief, HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-15" aria-expanded="true" aria-controls="faq-15">Who can I contact regarding a press inquiry?</button>
									</h2>
									<div id="faq-15" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value, in a trust-free fashion; sharing their unique features while pooling their security. In brief, HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<h5 class="title">Web3 foundation</h5>
		    					<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-16" aria-expanded="true" aria-controls="faq-16">What is the Web3 Foundation?</button>
									</h2>
									<div id="faq-16" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value, in a trust-free fashion; sharing their unique features while pooling their security. In brief, HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-17" aria-expanded="true" aria-controls="faq-17">What is Web3’s role in relation to HYPERAS chain?</button>
									</h2>
									<div id="faq-17" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value, in a trust-free fashion; sharing their unique features while pooling their security. In brief, HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-18" aria-expanded="true" aria-controls="faq-18">How is the Web3 Foundation impacted by the 2017 Parity multi-signature contact freeze?</button>
									</h2>
									<div id="faq-18" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value, in a trust-free fashion; sharing their unique features while pooling their security. In brief, HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<h5 class="title">Risk factors</h5>
		    					<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-19" aria-expanded="true" aria-controls="faq-19">Participants in any DOT sale may lose up to the entire value of funds</button>
									</h2>
									<div id="faq-19" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value, in a trust-free fashion; sharing their unique features while pooling their security. In brief, HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-20" aria-expanded="true" aria-controls="faq-20">Risks associated with the development and deployment of HYPERAS chain</button>
									</h2>
									<div id="faq-20" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value, in a trust-free fashion; sharing their unique features while pooling their security. In brief, HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-21" aria-expanded="true" aria-controls="faq-21">Risks associated with DOT</button>
									</h2>
									<div id="faq-21" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
										<div class="accordion-body">
											<p>HYPERAS chain is a platform that allows diverse blockchains to transfer messages, including value, in a trust-free fashion; sharing their unique features while pooling their security. In brief, HYPERAS chain is a scalable, heterogeneous, multi-chain technology.</p>
										</div>
									</div>
								</div>
							</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="otherQuestion">
	    			<h5 class="mb-4">Have a question about building on HYPERAS chain?</h5>
	    			<a href="{{ route('company.contact') }}" class="btn btnOutlineRed sm">Let's Connect</a>
	    		</div>
	    	</div>
	    </section>
    </div>
@endsection
