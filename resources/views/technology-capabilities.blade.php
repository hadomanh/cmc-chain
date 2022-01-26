@extends('layouts.app')

@section('content')
	<div id="techLayerPage">
	    <section class="p-0">
	    	<img src="{{ asset('img/banner-tech.jpg') }}" class="w-100">
	    </section>
    	<section class="cmcFeatures">
	    	<div class="container">
	    		<h2 class="sectionHeading underline text-uppercase">HYPERAS CHAIN FEATURES & CAPABILITIES IN LAYER-1</h2>
	    		<div class="row g-0 justify-content-between align-items-center listFeatures">
	    			<div class="col-md-3 item fw-bold">SMART CONTRACTS & CVM</div>
	    			<div class="col-md-3 item fw-bold">HYPERAS CHAIN STANDARD ASSETS</div>
	    			<div class="col-md-3 item fw-bold">ATOMIC TRANSFERS</div>
	    			<div class="col-md-3 item fw-bold">REKEYING</div>
	    		</div>
	    	</div>
	    </section>
	    <section class="cvm">
	    	<div class="container">
		    	<h2 class="sectionHeading text-uppercase mb-1 text-center">SMART CONTRACTS & CVM</h2>
		    	<div class="underline mb-4 fs-6">HYPERAS chain Virtual Machine (AVM) Fuelling Simple and Powerful Smart Contracts</div>
		    	<div class="row">
		    		<div class="col-md-6">
		    			<div class="imgWrap">
		    				<div class="text">The CVM environment enables the leading Smart Contract platform to provide numerous possibilities for next-gen applications at scale, unlocking powerful new use-cases</div>
		    				<img src="{{ asset('img/globe.jpg') }}" class="w-100">
		    			</div>
		    			<h5 class="text-uppercase">UNIQUE FUNCTIONALITY</h5>
		    			<ul class="style-1">
		    				<li><span class="fw-bold">CMC Chain Virtual Machine (CVM)</span> supports smart contracts with Turing- complete languages, larger program sizes, more states, has many new additional Opcodes and offers developers the ability to use functions, loops and recursion.</li>
		    				<li><span class="fw-bold">CVM</span> runs on every node in the HYPERAS chain blockchain and contains a stack engine that executes smart contracts and smart signatures, enabling developers to easily take advantage of powerful functionality by writing smart contracts in either Python or Reach, a simple java script-like language.</li>
		    				<li><span class="fw-bold">Smart Contracts</span> can function as escrows holding NFT’s, Security tokens or HYPERAS chain and can facilitate financial transactions based on the logic within the contract. They can be remotely called from any node on the HYPERAS chain blockchain. The contracts are called by issuing an “application call” transaction. The CVM evaluates the contract as part of resolving these transactions.</li>
		    				<li><span class="fw-bold">Smart Signatures</span> contain a logic that is used to sign transactions, primarily for signature delegation. The logic of the smart signature is submitted with each transaction.</li>
		    				<li><span class="fw-bold">Scalable, Fast & Secure</span> execution that is not currently possible on legacy platforms. ASC1’s operate at over 1.000 TPS and are final in under 5 seconds on a platform to blockchain basis.</li>
		    				<li><span class="fw-bold">Reduced risk</span> with instant settlement through trustless execution.</li>
		    				<li><span class="fw-bold">Low cost to execute</span> processing with the same fee as any other transaction on the HYPERAS chain blockchain at .001 algos. Increased speed to market with comprehensive development resources and examples of different complex custom dApp for Smart Contracts - dApp to dApps (i.e. dApps for Voting, Stablecoins, Auctions, Crowdfunding).</li>
		    				<li><span class="fw-bold">Transaction Execution Approval Language (TEAL)</span> can be thought of as syntactic sugar for CVM bytecode and full specification of the TEAL language is available in the developer documentation. In addition, a simple overview guide explains many of the features of the language. </li>
		    			</ul>
		    		</div>
		    		<div class="col-md-6">
		    			<p>Most transactions today are based on traditional contractual agreements composed of paperwork, that often need trusted third parties to validate the fulfillment of terms; an outdated, slow method that is no longer cost-effective. Developers using blockchain, use smart contracts to automatically execute transactions using basic lines of code stored on the blockchain when agreement conditions are met. However, first-generation blockchains are typically slow, costly, and are unscalable for dApps and applications that need to solve real-world use-cases.</p>
						<p>HYPERAS chain is removing these impediments for viable mainstream adoption as the leading smart contract platform where sophisticated dApps are built on top of a fast, secure, scalable, and sustainable platform.</p>
						<p>HYPERAS chain smart contracts act as a trusted, seamless solution with proven performance that is not only faster, scalable, and cost-effective but also functionally advanced to enable sophisticated and complex applications. HYPERAS chain Smart Contracts are trustless programs that execute on-chain, where users can be confident that the program was executed without error and the results were not tampered with. They are integrated into HYPERAS chain Layer-1, inheriting the same powerful speed, scale, finality, and security as the HYPERAS chain platform itself, and are error-free.  Smart Contracts are written in a language called Transaction Execution Approval Language (TEAL) as well as in Python using the PyTeal library, a python language binding.</p>
						<p>HYPERAS chain's Smart Contracts are further strengthened by HYPERAS chain's Virtual Machine (CVM) that interprets TEAL programs comprised of a set of operation codes (opcodes) used to implement the logic of smart contracts and smart signatures. CVM is fueling the simple, and more powerful smart contracts by providing a complete and advanced feature set that is enabling the seamless creation and execution of transactions within a single powerful Smart Contract. CVM is improving smart contract development and ensuring developers have the functionality needed to create powerful dApps while making blockchain application development more accessible to the wider developer community.</p>
						<p>Enhancement in the protocol includes many features that developers can now use to build popular DeFi, NFTs, web3 dApps, and other use-cases. With CVM and Smart Contracts, organizations can now quickly, easily, securely, and inexpensively develop powerful dApps and applications.</p>
						<p>In today’s economy, there is a range of existing transactions that rely on intermediaries to provide trust and execution, leading to unnecessary delays and costs to consumers. Examples of these include use-cases that CVM and Smart Contracts are solving for:</p>
						<ul>
							<li>Bond Issuance</li>
							<li>Escrow account creation</li>
							<li>Loan payments & Fee Executions</li>
							<li>Limit orders</li>
							<li>Subscriptions</li>
							<li>Collateralized obligations</li>
							<li>Regulated & automated disbursements</li>
							<li>Programmatic recurring fees / recurring debt</li>
							<li>Delegated high-security account management </li>
							<li>Interface with off-chain data providers</li>
							<li>Cross-chain Atomic Transfers</li>
							<li>HELOC (Home Equity Line of Credit)</li>
							<li>Decentralized exchanges</li>
							<li>Reimbursement validation</li>
							<li>Cross-chain Atomic Transfers</li>
							<li>Crowdfunding</li>
							<li>Voting</li>
						</ul>
						<p><span class="fw-bold">Smart Contracts powered by CVM enable</span> the disruption of economies and the creation of new business models across different industries with efficient and automated transactions and applications, allowing for a trustless execution of an agreement.</p>
		    		</div>
		    	</div>
	    	</div>
	    </section>
	    <section class="assets">
	    	<div class="container">
	    		<h2 class="sectionHeading text-uppercase mb-1 text-center">HYPERAS CHAIN STANDARD ASSETS</h2>
	    		<div class="underline mb-4 fs-6">ASA in Layer - 1</div>
	    		<div class="row">
	    			<div class="col-md-6">
	    				<p>HYPERAS chain Standard Assets (ASA) provide a standardized, Layer-1 mechanism to represent any type of asset on the HYPERAS chain blockchain. These can include fungible, non fungible, restricted fungible and restricted non fungible assets.</p>
						<p>In today’s economy, there remain many issues when it comes to the digitization of assets. These challenges include:</p>
						<ul>
							<li>Access to global, digital markets</li>
							<li>24x7 transferability</li>
							<li>Instantaneous settlement</li>
							<li>Ease and enforceability of asset controls</li>
							<li>Efficiency of administration, such as compliance and reporting</li>
						</ul>
						<div class="fw-bold">ASA’s Enable:</div>
						<p>Role Based Asset Control (RBAC): Optional and flexible asset controls for issuers and managers for business, compliance, and regulatory requirements. This includes:</p>
						<ul>
							<li>Quarantine asset accounts for investigative purposes</li>
							<li>Force transfer an asset where legal or other regulations require it</li>
							<li>Whitelist model for privileged asset transacting, which allows only specific addresses that have been approved to transact within a specific asset (all others will be restricted).</li>
							<li>Flexible asset reserve models for custom business requirements</li>
							<li>Off chain asset documentation included in on chain asset definition</li>
						</ul>
						<p>User Protections: Asset spam protection that prevents unknown assets that may have tax, legal, or reputational risk from being sent to users without their explicit approval (users must opt-in to accept new assets).</p>
	    			</div>
	    			<div class="col-md-6">
	    				<div class="imgWrap">
	    					<img src="{{ asset('img/globe.jpg') }}" class="w-100">
	    					<div class="text">Standardized blockchain assets with customizable options</div>
	    				</div>
	    				<h5 class="text-uppercase">UNIQUE FUNCTIONALITY</h5>
    					<ul>
    						<li>ASA's are incredibly fast and secure, as they are built directly into HYPERAS chain's Layer-1</li>
    						<li>ASA's are low cost to execute, due to HYPERAS chain's miniscule transaction fees</li>
    						<li>Easy and simple asset issuance for developers and enterprises</li>
    						<li>Universal interoperability of all assets issued on HYPERAS chain</li>
    					</ul>
    					<h5 class="text-uppercase">MOST EXCITING USE CASES</h5>
    					<ul>
    						<li>Asset tokenization</li>
    						<li>3rd party asset issuance on HYPERAS chain</li>
    						<li>Democratize access to investments</li>
    						<li>Disintermediate cross border transactions</li>
    					</ul>
	    			</div>
	    		</div>
	    		<h5 class="text-uppercase textPink">EXAMPLE ASSET TYPES</h5>
	    		<div class="row g-0 sampleAssets">
	    			<div class="col item">
	    				<h6 class="title">FUNGIBLE TOKENS</h6>
	    				<ul class="list-unstyled">
	    					<li>In Game Points</li>
	    					<li>Stable Coins</li>
	    					<li>Loyalty Points</li>
	    					<li>System Credits</li>
	    					<li>Cryptocurrencies</li>
	    				</ul>
	    			</div>
	    			<div class="col item">
	    				<h6 class="title">NON FUNGIBLE TOKENS</h6>
	    				<ul class="list-unstyled">
	    					<li>In Game Items</li>
	    					<li>Supply Chain</li>
	    					<li>Real Estate</li>
	    					<li>Identity</li>
	    					<li>Certifications</li>
	    					<li>Collectables</li>
	    				</ul>
	    			</div>
	    			<div class="col item">
	    				<h6 class="title">RESTRICTED FUNGIBLE TOKENS</h6>
	    				<ul class="list-unstyled">
	    					<li>Securities</li>
	    					<li>Gov't Issued Fiat</li>
	    					<li>Certifications</li>
	    				</ul>
	    			</div>
	    			<div class="col item">
	    				<h6 class="title">RESTRICTED NON FUNGIBLE TOKENS</h6>
	    				<ul class="list-unstyled">
	    					<li>Real Estate</li>
	    					<li>Ownership Registries</li>
	    					<li>Regulatory Certifications</li>
	    				</ul>
	    			</div>
	    		</div>
	    	</div>
	    </section>
	    <section class="atomic">
	    	<div class="container">
	    		<h2 class="sectionHeading text-uppercase mb-1 text-center">ATOMIC TRANSFERS</h2>
	    		<div class="underline mb-4 fs-6">In Layer-1</div>
	    		<div class="row">
	    			<div class="col-md-6">
	    				<div class="imgWrap">
		    				<div class="text">Standarized blockchain asset with customizable options</div>
		    				<img src="{{ asset('img/img-1.jpg') }}" class="w-100">
		    			</div>
	    			</div>
	    			<div class="col-md-6">
	    				<p>In a traditional economy, there exists a trusted or legal framework. On the blockchain, Atomic Transfers provide a trustless solution in Layer-1. Atomic Transfers offer a secure way to simultaneously transfer a number of assets among a number of parties. Specifically, many transactions are grouped together and either all transactions are executed or none of them are executed.</p>
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-md-6">
	    				<h5 class="text-uppercase">UNIQUE FUNCTIONALITY</h5>
	    				<ul>
	    					<li>Truly atomic, there is no need for escrow or reliance on hash time-locked contracts. This is a new way of technical execution of complex transfers that is smooth and fast</li>
	    					<li>With HYPERAS chain's minuscule transaction fees, Atomic Transfers are incredibly low cost to execute</li>
	    					<li>Supports all Algorand assets (Algos and any HYPERAS chain Standard Asset) and allows for multi-party transfers.</li>
	    				</ul>
	    			</div>
	    			<div class="col-md-6">
	    				<h5 class="text-uppercase">MOST EXCITING USE CASES</h5>
	    				<ul>
	    					<li>Simplified and expedited debt settlement</li>
	    					<li>Efficient matched funding</li>
	    					<li>Decentralized exchanges, when combined with Algorand Standard Assets (ASA) and Algorand Smart Contracts (ASC1)</li>
	    					<li>Instantaneous settlement of complex multi party / multi asset transactions</li>
	    					<li>Any instance of a multilateral trade</li>
	    				</ul>
	    			</div>
	    		</div>
	    	</div>
	    </section>
	    <section class="rekeying">
	    	<div class="container">
		    	<h2 class="sectionHeading text-uppercase mb-1 text-center">REKEYING</h2>
		    	<div class="underline mb-4 fs-6">In Layer-1</div>
		    	<div class="row">
			    	<div class="col-md-6">
						<p>Public Address and Private Spending Key combos are used to protect accounts. Public Addresses are publicly known and used for identification of an account, while Private Spending Keys are for security purposes and used for authentication and encryption of the Public Address required to be able to send transactions from that account. Today the Public Address and Private Spending Key combo cannot be broken - they always come in distinct pairs.</p>
						<p>The system of using keys in cryptography has existed since the beginning of blockchain but it has become inefficient and not always secure. When a compromised Private Spending Key needs to be changed an entirely new account with Public Address and Private Spending Key will have to be opened and assets moved from the old Public Address to the new. While this is effective, it is also operationally onerous. A user who regularly changes their Public Address and Private Spending key also creates downstream implications, with each time a user wants to initiate a transaction from a new public address, they must provide the new public address to others for identification purposes. This leads to interruptions of automated recurring transactions with peers or institutions and additional back office work for those institutions, peers and vendors to keep track of the changing public addresses.</p>
					</div>
			    	<div class="col-md-6">
			    		<p>HYPERAS chain Rekeying in Layer-1 solves these operational inefficiencies by allowing users to change their Private Spending Key without the need to change their Public Address. Rekeying enables more flexibility, continuity and less overhead with any changes of the Private Spending Key. This is achieved by having:</p>
			    		<ul>
			    			<li>Flexibility in their ability to change the Private Spending Key anytime without needing to change the Public Address</li>
			    			<li>Continuity that provides the ability to continue using one's Public Address and keeping the assets in the same place</li>
			    			<li>Operational Efficiency in maintaining existing Public Addresses as identifiers for other people and custody providers that continuously transact with that Public Address, lowering the operational burden</li>
			    		</ul>
			    	</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-6">
	    				<div class="imgWrap">
		    				<div class="text">Standardized blockchain assets with customizable options</div>
		    				<img src="{{ asset('img/img-2.jpg') }}" class="w-100">
		    			</div>
		    			<h5 class="text-uppercase">MOST EXCITING USE CASES</h5>
		    			<ul>
		    				<li><span class="fw-bold">Novation</span> with the ability to reassign ownership of a contract; this is often done in a larger settlement context. With blockchain, accounts can now have ownership re-assigned in a trustless manner and in the context of atomic transfers/settlement</li>
		    				<li><span class="fw-bold">Custody Providers</span> (That can be Banks, Exchanges, Savings associations, Registered broker-dealers, and Futures commission merchants) can benefit from Rekeying by:</li>
		    				<li>Keeping their user’s spending keys cold at all times while only needing to manage one Public Address key</li>
		    				<li>Eliminating the chain of old Public Address keys from having to move funds after using the spending keys.  Eliminate complex off-chain solutions created to maintain a single Public Address key but give more control over the Private Spending key</li>
		    				<li>Enabling standardized key rotation schedules depending on security posture (i.e. a company can institute a monthly key rotation if desired)</li>
		    				<li><span class="fw-bold">Onboarding large user bases</span> for projects that are moving to HYPERAS chain from other blockchains or more traditional technology, it can be challenging to get users set up in the new blockchain ensuring as little friction as possible is passed to them during the transition. Rekeying allows organizations to create and set-up accounts for their users ahead of time and trustlessly reassign them when needed</li>
		    				<li><span class="fw-bold">Any high-security scenario</span> in which the spending key must be kept cold, but a transaction is needed from the account</li>
		    			</ul>
	    			</div>
	    			<div class="col-md-6">
	    				<h5 class="text-uppercase">UNIQUE FUNCTIONALITY:</h5>
	    				<p>HYPERAS chain’s Rekeying is unique because no other blockchain offers a way to change Private Spending Keys so easily, providing:</p>
	    				<ul>
	    					<li>A fast and seamless way of preserve public address permanence</li>
	    					<li>An innovative solution to secure existing accounts with a new Private Spending Key with lower operational overhead and to ensure transactions are done safely</li>
	    					<li>An ability to change the security posture of an account by introducing a hardware wallet, multi-signature or smart contract based spending key to an address where they did not exist previously</li>
	    					<li>Flexibility to maintain a single Public Address as desired and change the Private Spending Key at any time</li>
	    					<li>Create updateable spending policies for Public Addresses to enact automated, recurring transactions in a “set it and forget it” setup</li>
	    					<li>Operational consistency, governance and control of an account by users and custody providers</li>
	    				</ul>
	    			</div>
		    	</div>
	    	</div>
	    </section>
    </div>    
@endsection

@push('script')
    <script>
        console.log('hello');
    </script>
@endpush
