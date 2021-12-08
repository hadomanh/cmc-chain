@extends('layouts.app')

@section('content')
    <div id="comPage">
    	<section class="p-0">
    		<img src="{{ asset('img/banner-community.jpg') }}" class="w-100">
    	</section>
    	<section>
    		<div class="container">
    			<div class="mw-700 text-center">
    				<h2 class="sectionHeading underline text-uppercase">Join the cmcchain community</h2>
    				<p>CMCchain is a 100% open-source project created to enable a decentralized web and better society. Anyone can contribute.</p>
    			</div>
    		</div>
    	</section>
    	<section class="bg-grey">
    		<div class="container">
    			<h2 class="sectionHeading underline text-uppercase">Run a node and interact with the CMCCHAIN testnet</h2>
    			<div class="row">
    				<div class="col-md-6">
    					<p>If you'd like to play with CMCchain, you'll need to install and run the Parity CMCchain client. Get the client at <a href="#" class="btn btnOutlineBlue xs">Parity’s CMCchain repo</a></p>
    					<p>Alexander is the current default public testnet for CMCchain. By default, any node running on the Alexander testnet will appear on the <a href="#" class="btn btnOutlineBlue xs">telemetry.cmcchain.io</a></p>
    					<p>The testnet allows you to create accounts, propose governance referenda, stake testnet DOT to become a validator or nominate other accounts as validators with your testnet DOT.</p>	
    				</div>
    				<div class="col-md-6">
    					<p>Connect your running node to the main <a href="#" class="btn btnOutlineBlue xs">CMCchain user interface</a> to play around.</p>
    					<p>Get testnet DOT to stake by following these instructions on the <a href="#" class="btn btnOutlineBlue xs">CMCchain Wiki</a></p>
    					<p>If you don’t want to run a node, you can still interact with the network by using <a href="#" class="btn btnOutlineBlue xs">the explorer</a></p>
    					<p>Before interacting with the testnet, please read this <a href="#" class="btn btnOutlineBlue xs">legal notice</a></p>
    				</div>
    			</div>
    		</div>
    	</section>
    </div>		
@endsection

@push('script')
    
@endpush
