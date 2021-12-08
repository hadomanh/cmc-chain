@extends('layouts.app')

@section('content')
    <div id="walletPage">
    	<section class="banner">
    		<div class="row">
				<div class="col-lg-6">
					<div class="info">
						<h1 class="fw-bold">Crypto Spend Wallet</h1>
						<h5 class="desc">Send, Store, Recieve and Spend. All in one easy to use app</h5>
						<div class="bottom">
							<p>GET FREE CARD MEMBER</p>
							<div class="row align-items-center">
								<div class="col-auto">
									<button class="btn btnGrad">get started <i class="fas fa-arrow-circle-right" aria-hidden="true"></i></button>
								</div>
								<div class="col-auto">
									<a class="iconPlay" href=""><i class="fas fa-play-circle" aria-hidden="true"></i></a>
								</div>
								<div class="col-auto downloadApp">
									<a href="#"><img src="{{ asset('img/googleplay.png') }}"></a>
									<a href="#"><img src="{{ asset('img/appstore.png') }}" ></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</section>
    	<section class="currencies text-center">
    		<div class="container">
    			<h2 class="sectionHeading style-2 text-center text-uppercase">A Supported Cryptocurrencies</h2>
    			<div class="row g-0">
					<div class="col">
						<img src="{{ asset('img/icon-coin-circle-1.png') }}">
					</div>
					<div class="col">
						<img src="{{ asset('img/icon-coin-circle-2.png') }}">
					</div>
					<div class="col">
						<img src="{{ asset('img/icon-coin-circle-3.png') }}">
					</div>
					<div class="col">
						<img src="{{ asset('img/icon-coin-circle-4.png') }}">
					</div>
					<div class="col">
						<img src="{{ asset('img/icon-coin-circle-5.png') }}">
					</div>
					<div class="col">
						<img src="{{ asset('img/icon-coin-circle-6.png') }}">
					</div>
					<div class="col">
						<img src="{{ asset('img/icon-coin-circle-7.png') }}">
					</div>
					<div class="col">
						<img src="{{ asset('img/icon-coin-circle-8.png') }}">
					</div>
					<div class="col">
						<img src="{{ asset('img/icon-coin-circle-9.png') }}">
					</div>
				</div>
    		</div>
    	</section>
    	<section class="whySpendWallet bg-grey text-center">
			<div class="container">
				<h2 class="sectionHeading style-2 text-uppercase">Why Crypto Spend Wallet?</h2>
				<div class="row">
					<div class="col-md-3">
						<div class="item">
							<img src="{{ asset('img/icon-send.png') }}">
							<h6 class="title">Send</h6>
							<div>Send easily to any address, inside or outside Paygate. Paygate will detect if the receive address is a Paygate user and will run the transaction offchain, instantly, for free!</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="{{ asset('img/icon-receive.png') }}">
							<h6 class="title">Recieve</h6>
							<div>Recieve BTC, ETH, LTC and XRP into your Paygate wallet, all of which can be loaded onto your Paygate card</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="{{ asset('img/icon-spend.png') }}">
							<h6 class="title">Spend</h6>
							<div>Link your wallet to your Paygate card and spend your Paygate, wherever you would use your normal cards or just as you would use your normal bank account.</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="{{ asset('img/icon-track.png') }}">
							<h6 class="title">Track</h6>
							<div>Track your Paygate through the app!</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="download">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="sectionHeading style-2">Download CMC Wallets App</h2>
						<h6 class="fw-medium">Manage crypto assets at your fingertips</h6>
						<img src="{{ asset('img/qr-code.png') }}" class="qrCode" width="200">
						<div class="d-flex market">
							<a href="#"><img src="{{ asset('img/googleplay.png') }}"></a>
							<a href="#"><img src="{{ asset('img/appstore.png') }}" ></a>
						</div>
						<p>Current version: iOS 2.9.2 | Android 2.9.2</p>
						<p>If you are also using a SafePal Hardware Wallet, the latest App version only works with the latest firmware version. Upgrade your hardware wallet firmware <a href="#" class="colorpink">here</a></p>
					</div>
					<div class="col-md-6">
						<img src="{{ asset('img/img-mobile-1.png') }}" width="420">
					</div>
				</div>
			</div>
		</section>
		<section class="bg-grey">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 text-center">
						<img src="{{ asset('img/img-mobile-2.png') }}" width="250">
					</div>
					<div class="col-md-6">
						<h2 class="sectionHeading style-2">One Interface To Manage All Types Of Wallets</h2>
						<ul>
							<li class="mb-2">Manage hardware wallet, software wallet, trading wallet all in one place</li>
							<li>Store your funds in different wallets to reduce seed leakage risks</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="import">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 text-center">
						<img src="{{ asset('img/img-mobile-3.png') }}" width="480">
					</div>
					<div class="col-md-6">
						<h2 class="sectionHeading style-2">Create or import software wallet in flexible ways</h2>
						<div class="row">
							<div class="col-md-6 item">
								<span class="icon"><img src="{{ asset('img/icon-cubes-colored.png') }}"></span> Mnemonic Phrase
							</div>
							<div class="col-md-6 item">
								<span class="icon"><img src="{{ asset('img/icon-key-colored.png') }}"></span> Private Key
							</div>
							<div class="col-md-6 item">
								<span class="icon"><img src="{{ asset('img/icon-usb-colored.png') }}"></span> Keystore
							</div>
							<div class="col-md-6 item">
								<span class="icon"><img src="{{ asset('img/icon-eye-colored.png') }}"></span> Public Address Observation Public
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-grey pb-0">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 align-self-end text-center">
						<img src="{{ asset('img/img-mobile-4.png') }}" width="350">
					</div>
					<div class="col-md-6">
						<h2 class="sectionHeading style-2">Buy, Swap, And Trade Crypto Assets At Your Fingertips</h2>
						<ul>
							<li class="mb-3">Buy crypto with credit card, bank account, iDEAL, Bancontact, EPS, Giropay and Sofortbanking</li>
							<li>Swap and exchange one cryptocurrency for any other cryptocurrency instantly</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 text-center">
						<img src="{{ asset('img/img-mobile-5.png') }}" width="250">
					</div>
					<div class="col-md-6">
						<h2 class="sectionHeading style-2">Access Your Favorite Dapps In A Click</h2>
						<ul>
							<li class="mb-2">Integrated with the most popular Dapps on Ethereum, Tron and Binance Smart Chain</li>
							<li class="mb-2">Bookmark your favorite Dapps in one click</li>
							<li>Add your Dapps to overlay for convenient access</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="download pb-0 bg-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="sectionHeading style-2">Download CMC Wallets App</h2>
						<img src="{{ asset('img/qr-code.png') }}" class="qrCode" width="200">
						<div class="d-flex market">
							<a href="#"><img src="{{ asset('img/googleplay.png') }}"></a>
							<a href="#"><img src="{{ asset('img/appstore.png') }}" ></a>
						</div>
						<p>Current version: iOS 2.9.2 | Android 2.9.2</p>
					</div>
					<div class="col-md-6 align-self-end">
						<img src="{{ asset('img/img-mobile-6.png') }}" width="420">
					</div>
				</div>
			</div>
		</section>
    </div>
@endsection

@push('script')
    
@endpush
