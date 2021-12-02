@extends('layouts.app')

@section('content')
    <div id="coreProtocolPage">
	    <section class="p-0">
	    	<img src="{{ asset('img/banner-core-protocol.jpg') }}" class="w-100">
	    </section>
	    <section class="technology">
	    	<div class="container">
	    		<h2 class="sectionHeading underline text-uppercase">TECHNOLOGY Core Protocol</h2>
	    		<p>Algorand removes the technical barriers that for years undermined mainstream blockchain adoption: decentralization, scale, and security. Now you can build on a stable platform you trust.</p>
	    		<p>Our consensus mechanism is permissionless and PURE PROOF OF STAKE™. It ensures full participation, protection, and speed within a truly decentralized network. With blocks finalized in seconds, Algorand’s transaction throughput is on par with large payment and financial networks. And Algorand is the first blockchain to provide immediate transaction finality. No forking. No uncertainty.</p>
	    		<p>The era of a decentralized, borderless economy is here. Algorand is the foundation. Now what will you build?</p>
	    	</div>
	    </section>
	    <div class="container">
		    <ul class="row g-0 nav nav-tabs">
				<li class="nav-item col-md-4" role="presentation">
					<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#pure-tab" type="button" role="tab" aria-controls="pure-tab" aria-selected="true">Pure Proof-of-Stake</button>
				</li>
				<li class="nav-item col-md-4" role="presentation">
					<button class="nav-link" data-bs-toggle="tab" data-bs-target="#core-tab" type="button" role="tab" aria-controls="core-tab" aria-selected="false">Core Blockchain Innovation</button>
				</li>
				<li class="nav-item col-md-4" role="presentation">
					<button class="nav-link" data-bs-toggle="tab" data-bs-target="#technical-tab" type="button" role="tab" aria-controls="technical" aria-selected="false">Technical Advantages</button>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="pure-tab" role="tabpanel" aria-labelledby="home-tab">
					<section class="achieving">
				    	<div class="container">
				    		<h2 class="sectionHeading underline text-uppercase">ACHIEVING CONSENSUS</h2>
				    		<div class="row">
				    			<div class="col-md-6">
				    				<p class="mb-5">CMCchain uses cryptographic sortition to select users to propose blocks for a given round. When a block is proposed to the blockchain, a committee of voters is selected to vote on the block proposal. If a super majority of the votes are from honest participants, the block can be certified.</p>
				    				<div class="text-center">
				    					<a href="#" class="btn btnOutlineRed sm">LEARN MORE <span class="ms-2">&xrarr;</span></a>
				    				</div>
				    			</div>
				    			<div class="col-md-6">
				    				<ul class="list-unstyled timeline">
				    					<li>Block Proposal: Accounts propose new blocks to the network</li>
				    					<li>Soft Vote: Committee votes on proposals and filters down to one</li>
				    					<li>Certify Vote: Separate committee votes to certify the block</li>
				    					<li>Each node receives a certificate for the block and writes it to the ledger</li>
				    					<li>New round is initiated and process starts over with new block proposers and voters</li>
				    				</ul>
				    			</div>
				    		</div>
				    	</div>
				    </section>
				    <section class="security">
				    	<div class="container">
				    		<h2 class="sectionHeading underline text-uppercase">CONSENSUS-LEVEL SECURITY</h2>
				    		<p class="mw-700 text-center mb-4">CMCchain’s decentralized Byzantine agreement protocol can tolerate an arbitrary number of malicious users as long as honest users hold a super majority of the total stake in the system. Two important features of the consensus protocol prevent powerful adversaries from corrupting enough users so as to control block generation:</p>
				    		<div class="row g-0 align-items-center">
				    			<div class="col-md-6">
				    				<img src="{{ asset('img/img-3.jpg') }}" class="w-100">
				    			</div>
				    			<div class="col-md-6">
				    				<p class="ps-3">First, the adversary does not know which users he should corrupt. In fact the users who are called to certify a new block are secretly and individually selected.</p>
				    			</div>
				    		</div>
				    		<div class="row g-0 align-items-end">
				    			<div class="col-md-6">
				    				<p class="text-end pe-3 mb-5">Second, when the adversary realizes which users are selected, it is too late for him to benefit from attacking them. Those users has already fulfilled their responsibility in the consensus protocol. In the next round of block certification, a new set of users will again be privately and individually chosen.</p>
				    				<div class="text-center">
				    					<a href="#" class="btn btnOutlineRed sm">LEARN MORE <span class="ms-2">&xrarr;</span></a>
				    				</div>
				    			</div>
				    			<div class="col-md-6">
				    				<img src="{{ asset('img/img-4.jpg') }}" class="w-100">
				    			</div>
				    		</div>
				    	</div>
				    </section>
				    <section>
				    	<div class="container">
				    		<h2 class="sectionHeading underline text-uppercase">REWARDS</h2>
				    		<div class="mw-700 text-center">
				    			In CMCchain, the power is in the hands of the users holding stake. Every user receives an amount of rewards proportional to their stake for every block that is committed to the chain. We do so to encourage users to join the CMCchain platform and accelerate our path to decentralization.
				    		</div>
				    	</div>
				    </section>
				    <section class="evolution">
				    	<div class="container">
				    		<h2 class="sectionHeading underline text-uppercase">PROTOCOL EVOLUTION</h2>
				    		<div class="row">
				    			<div class="col-md-6">
				    				CMCchain is rooted in the idea that the system should allow for changes and avoid inflexible policies—enabling both the community and the protocol to evolve. The CMCchain platform takes a consensus approach to protocol changes, which facilitates continuous evolution of the protocol and eliminates potential hard forks that could fracture the community. This ability is powered by the CMCchain consensus protocol that enables the users to reach consensus on anything. Not just on the next block, but also on a protocol upgrade.
				    			</div>
				    			<div class="col-md-6">
				    				<ul class="list-unstyled timeline">
				    					<li>Proposed changes are posted on the blockchain</li>
				    					<li>The community uses Algorand’s consensus protocol to vote to accept or reject the change</li>
				    					<li>When accepted, the community agrees on the block where the change happens</li>
				    					<li>Everyone switches to the new protocol at the same time</li>
				    				</ul>
				    			</div>
				    		</div>
				    	</div>
				    </section>		
				</div>
				<div class="tab-pane fade" id="core-tab" role="tabpanel" aria-labelledby="profile-tab">
					<section>
						<h2 class="sectionHeading underline text-uppercase">CRYPTOGRAPHIC SORTITION</h2>
						<div class="mb-4">
							<div class="row g-0">
								<div class="col-md-6">
									<img src="{{ asset('img/img-5.jpg') }}" class="w-100">
								</div>
								<div class="col-md-6">
									<div class="ps-3">
										<h6>Self-Selection</h6>
										<p>Neither a few delegated users nor a fixed committee is responsible for proposing blocks in CMCchain. Instead, all users are randomly, secretly, and continuously selected to participate in the CMCchain consensus protocol. Every block in CMCchain reveals a new unpredictable selection seed that determines which users participate in the next round of block selection. An online user checks whether they were selected to participate by evaluating a Verifiable Random Function (VRF) with their secret key and the selection seed. The VRF acts similar to a weighted lottery where the number of algos that the user has affects the user’s chance of being selected.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row g-0 align-items-end">
							<div class="col-md-6">
								<div class="pe-3">
									<h6>User Replaceability</h6>
									<p class="mb-5">In the CMCchain protocol, participants change every round of block selection in order to protect the network against attackers. Before they participate, no one knows who the users are, and once they participate, their message is already propagating through the network so it is too late for an attacker to benefit from attacking them. For each round, every set of participants is random and independent of earlier participants.</p>
									<div class="text-center">
										<a href="#" class="btn btnOutlineRed sm">LEARN MORE <span class="ms-2">⟶</span></a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<img src="{{ asset('img/img-6.jpg') }}" class="w-100">
							</div>
						</div>
					</section>
					<section>
						<h2 class="sectionHeading underline text-uppercase">NETWORK ARCHITECTURE</h2>
						<div class="mb-4">
							<div class="row">
								<div class="col-md-6">
									<img src="{{ asset('img/img-7.jpg') }}" class="w-100">
								</div>
								<div class="col-md-6">
									<p>The CMCchain network has two types of nodes to simultaneously optimize decentralization and high transaction throughput.</p>
									<p><span class="fw-bold">Relay nodes</span> allow for highly efficient communication paths.</p>
									<p><span class="fw-bold">Participation nodes</span> propose and vote on blocks.</p>
									<p>Any user is free to register as a relay or participation node. (Several entities---representing a wide array of technical, political, and organizational backgrounds across many different countries and continents---have already registered as relay and participation nodes.)</p>
								</div>	
							</div>
						</div>
						<div class="row align-items-center">
							<div class="col-md-6">
								<p class="mb-5">To ensure network security, relay nodes are both diverse and decentralized. Relay nodes are run by a number of entities representing a wide array of technical, political, and organizational backgrounds across many different countries and continents. Any network participant may host a relay node.</p>
								<div class="text-center">
									<a href="#" class="btn btnOutlineRed sm">LEARN MORE <span class="ms-2">⟶</span></a>
								</div>
							</div>
							<div class="col-md-6">
								<img src="{{ asset('img/img-8.jpg') }}" class="w-100">
							</div>
						</div>
					</section>
					<section>
						<h2 class="sectionHeading underline text-uppercase">IMMEDIATE TRANSACTION FINALITY</h2>
						<div class="row">
							<div class="col-md-6">
								<img src="{{ asset('img/img-9.jpg') }}" class="w-100">
							</div>
							<div class="col-md-6">
								<p>The CMCchain blockchain does not fork. Unlike with proof-of-work protocols, two different blocks can never be added to the chain in the same position. Only one block can have the required threshold of signatures in order to be certified in a given round.</p>
								<p class="mb-5">All transactions are final in CMCchain. Once a block appears, users can rely on the transactions it contains immediately, as they can be confident that the block will forever be part of the chain. Even if the Internet is split into multiple pools of users, only one safe and consistent CMCchain chain will exist.</p>
								<div class="text-center">
									<a href="#" class="btn btnOutlineRed sm">LEARN MORE <span class="ms-2">⟶</span></a>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2 class="sectionHeading underline text-uppercase">VAULT™</h2>
						<div class="mw-700 text-center">
							<p>Decentralized cryptocurrencies rely on participants to keep track of the state of the system in order to verify new transactions. As the number of users and transactions grows, this requirement places a significant burden on the users, as they need to store a large amount of historical data in order to validate new transactions.</p>
							<p>Vault is a blockchain compression technology that minimizes storage and facilitates joining the CMCchain network.</p>
						</div>
					</section>
				</div>
				<div class="tab-pane fade" id="technical-tab" role="tabpanel" aria-labelledby="contact-tab">
					<section>
						<h2 class="sectionHeading underline text-uppercase">ACHIEVING CONSENSUS</h2>
						<p class="mw-700 text-center mb-5">CMCchain’s decentralized Byzantine agreement protocol can tolerate an arbitrary number of malicious users as long as honest users hold a super majority of the total stake in the system. Two important features of the consensus protocol prevent powerful adversaries from corrupting enough users so as to control block generation:</p>
						<div class="row">
							<div class="col-md-4">
								<div class="mb-3">
									<img src="{{ asset('img/img-10.jpg') }}" class="w-100">
								</div>
								<h6>Fair & Transparent</h6>
								<p>Control is distributed among all individual network participants</p>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<img src="{{ asset('img/img-10.jpg') }}" class="w-100">
								</div>
								<h6>Accurate</h6>
								<p>No risk of data being manipulated, lost or destroyed</p>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<img src="{{ asset('img/img-10.jpg') }}" class="w-100">
								</div>
								<h6>Secure</h6>
								<p>Fault tolerant with no special group of users for an attacker to target</p>
							</div>
						</div>
					</section>
					<section>
						<h2 class="sectionHeading underline text-uppercase">PERMISSIONLESS</h2>
						<div class="row">
							<div class="col-md-6">
								<img src="{{ asset('img/img-11.jpg') }}" class="w-100">
							</div>
							<div class="col-md-6">
								<p>Public & Open to All</p>
								<p>Users do not need the approval of a trusted authority to use the CMCchain blockchain. There is a single class of users and no gatekeepers. Every participant can read every block and have the opportunity to write a transaction in a future block.</p>
								<p>Low Cost to Participate</p>
								<p>The CMCchain platform requires minimal processing power and modest IT resources to join. All online users who possess algos are automatically eligible to participate in block consensus.</p>
								<div class="text-center mt-5">
									<a href="#" class="btn btnOutlineRed sm">LEARN MORE <span class="ms-2">⟶</span></a>
								</div>
							</div>
						</div>
					</section>
					<section>
						<h2 class="sectionHeading underline text-uppercase">OPEN SOURCE</h2>
						<div class="row align-items-center">
							<div class="col-md-6">
								<img src="{{ asset('img/img-12.jpg') }}" class="w-100">
							</div>
							<div class="col-md-6">
								<p>The CMCchain node repository is open sourced and publicly available for anyone to audit, use, and build upon. The platform is founded in principles of transparency, inclusivity, and collaboration and maintained by a dedicated community with a shared vision of a decentralized, borderless future.</p>
							</div>
						</div>
					</section>
					<section>
						<div class="mw-700">
							<h2 class="sectionHeading underline text-uppercase">NETWORK-LEVEL SECURITY: PARTITION RESILIENCE</h2>
							<p>The CMCchain protocol is secure against an adversary who may achieve complete control over the network and dictate which users receive which messages and when. Even when the network is partitioned into multiple non-connected networks, CMCchain’s blockchain does not fork and users’ balances remain secure. An adversary is never able to convince two honest users to accept two different blocks for the same round. All transactions that appear on the blockchain are always final. CMCchain is able to recover after a partition is resolved and guarantees that new blocks will be generated at the same speed as before the partition.</p>
							<div class="text-center mt-5">
								<a href="#" class="btn btnOutlineRed sm">LEARN MORE <span class="ms-2">⟶</span></a>
							</div>
						</div>
					</section>
					<section>
						<h2 class="sectionHeading underline text-uppercase">SCALABILITY</h2>
						<div class="row align-items-center">
							<div class="col-md-6">
								<img src="{{ asset('img/img-13.jpg') }}" class="w-100">
							</div>
							<div class="col-md-6">
								<p>The CMCchain node repository is open sourced and publicly available for anyone to audit, use, and build upon. The platform is founded in principles of transparency, inclusivity, and collaboration and maintained by a dedicated community with a shared vision of a decentralized, borderless future.</p>
								<div class="text-center mt-5">
									<a href="#" class="btn btnOutlineRed sm">LEARN MORE <span class="ms-2">⟶</span></a>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('script')
    
@endpush
