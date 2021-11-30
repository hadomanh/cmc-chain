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
	    		<div class="row g-0 justify-content-between align-items-center listFeatures">
	    			<div class="col-md-4 item fw-bold">Pure Proof-of-Stake</div>
	    			<div class="col-md-4 item fw-bold">Core Blockchain Innovation</div>
	    			<div class="col-md-4 item fw-bold">Technical Advantages</div>
	    		</div>
	    	</div>
	    </section>
	    <section class="achieving">
	    	<div class="container">
	    		<h2 class="sectionHeading underline text-uppercase">ACHIEVING CONSENSUS</h2>
	    		<div class="row">
	    			<div class="col-md-6">
	    				<p class="mb-5">CMCchain uses cryptographic sortition to select users to propose blocks for a given round. When a block is proposed to the blockchain, a committee of voters is selected to vote on the block proposal. If a super majority of the votes are from honest participants, the block can be certified.</p>
	    				<div class="text-center">
	    					<a href="#" class="btn btnWhite sm">LEARN MORE <span class="ms-2">&xrarr;</span></a>
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
	    					<a href="#" class="btn btnWhite sm">LEARN MORE <span class="ms-2">&xrarr;</span></a>
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
@endsection

@push('script')
    
@endpush
