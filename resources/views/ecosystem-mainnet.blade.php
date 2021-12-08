@extends('layouts.app')

@section('content')
    <div id="mainnetPage">
    	<section class="p-0">
	    	<img src="{{ asset('img/banner-mainnet.jpg') }}" class="w-100">
	    </section>
    	<div class="container">
    		<section class="search mw-700 pb-0">
    			<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search by Address / txHash / BlockHash ...">
					<button class="btn btn-info" type="button">Search</button>
				</div>
    		</section>
    		<section class="overview pb-0">
    			<div class="row">
    				<div class="col-md-6 item">
    					<div class="inner greyBox">
    						<img src="{{ asset('img/sample-chart.png') }}" class="w-100">
    					</div>
    				</div>
    				<div class="col-md-6 item">
    					<div class="inner greyBox statistic">
	    					<div class="row">
	    						<div class="col-md-6 d-flex align-items-center">
	    							<div class="icon">
    									<img src="{{ asset('img/icon-rocket.png') }}">
    								</div>
    								<div>
    									<div>Symbol</div>
    									<div class="fw-bold">CMCchain</div>
    								</div>
	    						</div>
	    						<div class="col-md-6 d-flex align-items-center">
	    							<div class="icon">
    									<img src="{{ asset('img/icon-money.png') }}">
    								</div>
    								<div>
    									<div>Price ($)</div>
    									<div class="fw-bold">0.103038</div>
    								</div>
	    						</div>
	    						<div class="col-md-6 d-flex align-items-center">
	    							<div class="icon">
    									<img src="{{ asset('img/icon-volumn.png') }}">
    								</div>
    								<div>
    									<div>Volume 24h ($)</div>
    									<div class="fw-bold">Volume 24h ($)</div>
    								</div>
	    						</div>
	    						<div class="col-md-6 d-flex align-items-center">
	    							<div class="icon">
    									<img src="{{ asset('img/icon-chart.png') }}">
    								</div>
    								<div>
    									<div>Market Cap ($)</div>
    									<div class="fw-bold">312,824,423.857</div>
    								</div>
	    						</div>
	    						<div class="col-md-6 d-flex align-items-center">
	    							<div class="icon">
    									<img src="{{ asset('img/icon-total-supply.png') }}">
    								</div>
    								<div>
    									<div>Total Supply (CMC)</div>
    									<div class="fw-bold">5,000,000,000</div>
    								</div>
	    						</div>
	    						<div class="col-md-6 d-flex align-items-center">
	    							<div class="icon">
    									<img src="{{ asset('img/icon-total-reward.png') }}" class="w-100">
    								</div>
    								<div>
    									<div>Total Rewards (CMC)</div>
    									<div class="fw-bold">77,207,590</div>
    								</div>
	    						</div>
	    					</div>
    					</div>
    				</div>
    				<div class="col-md-12 item">
    					<div class="inner greyBox text-center">
    						<div class="row">
    							<div class="col">
    								<img src="{{ asset('img/icon-block.png') }}" class="mb-2">
    								<div>Block time</div>
    								<div class="fw-bold">5,343,023</div>
    							</div>
    							<div class="col">
    								<img src="{{ asset('img/icon-tps.png') }}" class="mb-2">
    								<div>Live TPS</div>
    								<div class="fw-bold">2.1300</div>
    							</div>
    							<div class="col">
    								<img src="{{ asset('img/icon-transaction.png') }}" class="mb-2">
    								<div>Transactions</div>
    								<div class="fw-bold">19,030,394</div>
    							</div>
    							<div class="col">
    								<img src="{{ asset('img/icon-address.png') }}" class="mb-2">
    								<div>Addresses</div>
    								<div class="fw-bold">371,931</div>
    							</div>
    							<div class="col">
    								<img src="{{ asset('img/icon-contract.png') }}" class="mb-2">
    								<div>Contracts</div>
    								<div class="fw-bold">5,773</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</section>
    		<section>
    			<div class="row">
    				<div class="col-md-6">
    					<div class="d-flex justify-content-between align-items-center mb-3">
    						<h6>Latest Blocks</h6>
    						<div>
    							<a href="#" class="btn btnBlue sm">View all</a>
    						</div>
    					</div>
	    				<div class="item greyBox">
	    					<table class="table v-align-middle">
	    						<thead>
	    							<tr>
	    								<th></th>
	    								<th>Block Height</th>
	    								<th>Proposer</th>
	    								<th>Rewards (CMC)</th>
	    							</tr>
	    						</thead>
	    						<tbody>
	    							<tr>
	    								<td><i class="icon fas fa-cubes"></i></td>
	    								<td>
		    								<div class="fw-bold text-blue">5,343,176</div>
		    								<div>10  secs ago</div>
	    								</td>
	    								<td>
	    									<div class="text-blue">Diasplat</div>
	    									<div>11 Txns</div>
	    								</td>
	    								<td>Block time</td>
	    							</tr>
	    							<tr>
	    								<td><i class="icon fas fa-cubes"></i></td>
	    								<td>
		    								<div class="fw-bold text-blue">5,343,176</div>
		    								<div>10  secs ago</div>
	    								</td>
	    								<td>
	    									<div class="text-blue">Diasplat</div>
	    									<div>11 Txns</div>
	    								</td>
	    								<td>Block time</td>
	    							</tr>
	    							<tr>
	    								<td><i class="icon fas fa-cubes"></i></td>
	    								<td>
		    								<div class="fw-bold text-blue">5,343,176</div>
		    								<div>10  secs ago</div>
	    								</td>
	    								<td>
	    									<div class="text-blue">Diasplat</div>
	    									<div>11 Txns</div>
	    								</td>
	    								<td>Block time</td>
	    							</tr>
	    							<tr>
	    								<td><i class="icon fas fa-cubes"></i></td>
	    								<td>
		    								<div class="fw-bold text-blue">5,343,176</div>
		    								<div>10  secs ago</div>
	    								</td>
	    								<td>
	    									<div class="text-blue">Diasplat</div>
	    									<div>11 Txns</div>
	    								</td>
	    								<td>Block time</td>
	    							</tr>
	    							<tr>
	    								<td><i class="icon fas fa-cubes"></i></td>
	    								<td>
		    								<div class="fw-bold text-blue">5,343,176</div>
		    								<div>10  secs ago</div>
	    								</td>
	    								<td>
	    									<div class="text-blue">Diasplat</div>
	    									<div>11 Txns</div>
	    								</td>
	    								<td>Block time</td>
	    							</tr>
	    						</tbody>
	    					</table>				
    					</div>
    				</div>
    				<div class="col-md-6">
    					<div class="d-flex justify-content-between align-items-center mb-3">
    						<h6>Latest Transactions</h6>
    						<div>
    							<a href="#" class="btn btnBlue sm">View all</a>
    						</div>
    					</div>
	    				<div class="item greyBox">
	    					<table class="table v-align-middle">
	    						<thead>
	    							<tr>
	    								<th></th>
	    								<th>Tx Hash</th>
	    								<th>Detail</th>
	    								<th>Value (CMC)</th>
	    							</tr>
	    						</thead>
	    						<tbody>
	    							<tr>
	    								<td><i class="icon far fa-file-alt"></i></td>
	    								<td>
		    								<div class="fw-bold text-blue">5,343,176</div>
		    								<div>10  secs ago</div>
	    								</td>
	    								<td class="address">
	    									<div><span>From:</span> <a href="#" class="text-blue">0x7770C...99738</a></div>
	    									<div><span>To:</span> <a href="#" class="text-blue">0xE5dAA...7919f</a></div>
	    								</td>
	    								<td>0</td>
	    							</tr>
	    							<tr>
	    								<td><i class="icon far fa-file-alt"></i></td>
	    								<td>
		    								<div class="fw-bold text-blue">5,343,176</div>
		    								<div>10  secs ago</div>
	    								</td>
	    								<td class="address">
	    									<div><span>From:</span> <a href="#" class="text-blue">0x7770C...99738</a></div>
	    									<div><span>To:</span> <a href="#" class="text-blue">0xE5dAA...7919f</a></div>
	    								</td>
	    								<td>0</td>
	    							</tr>
	    							<tr>
	    								<td><i class="icon far fa-file-alt"></i></td>
	    								<td>
		    								<div class="fw-bold text-blue">5,343,176</div>
		    								<div>10  secs ago</div>
	    								</td>
	    								<td class="address">
	    									<div><span>From:</span> <a href="#" class="text-blue">0x7770C...99738</a></div>
	    									<div><span>To:</span> <a href="#" class="text-blue">0xE5dAA...7919f</a></div>
	    								</td>
	    								<td>0</td>
	    							</tr>
	    							<tr>
	    								<td><i class="icon far fa-file-alt"></i></td>
	    								<td>
		    								<div class="fw-bold text-blue">5,343,176</div>
		    								<div>10  secs ago</div>
	    								</td>
	    								<td class="address">
	    									<div><span>From:</span> <a href="#" class="text-blue">0x7770C...99738</a></div>
	    									<div><span>To:</span> <a href="#" class="text-blue">0xE5dAA...7919f</a></div>
	    								</td>
	    								<td>0</td>
	    							</tr>
	    							<tr>
	    								<td><i class="icon far fa-file-alt"></i></td>
	    								<td>
		    								<div class="fw-bold text-blue">5,343,176</div>
		    								<div>10  secs ago</div>
	    								</td>
	    								<td class="address">
	    									<div><span>From:</span> <a href="#" class="text-blue">0x7770C...99738</a></div>
	    									<div><span>To:</span> <a href="#" class="text-blue">0xE5dAA...7919f</a></div>
	    								</td>
	    								<td>0</td>
	    							</tr>
	    						</tbody>
	    					</table>				
    					</div>
    				</div>
    			</div>
    		</section>
    	</div>
    </div>
@endsection

@push('script')
    
@endpush
