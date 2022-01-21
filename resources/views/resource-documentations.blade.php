@extends('layouts.app')

@section('content')
<div id="docsPage">
    <section class="p-0">
        <img src="{{ asset('img/banner-resource-documentation.jpg') }}" class="w-100">
    </section>
    <section class="bgGrey text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <h2 class="sectionHeading underline text-uppercase">Learn</h2>
                        <p>CMC chain is a sharded protocol that enables blockchain networks to operate together seamlessly</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <h2 class="sectionHeading underline text-uppercase">Build</h2>
                        <p>Most up-to-date information on the status of the development tools in the CMC chain ecosystem</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <h2 class="sectionHeading underline text-uppercase">Maintain</h2>
                        <p>Information and guides on how to deploy and run a node on the network</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2 class="sectionHeading">The Technology for the Future of Finance</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>CMC chain is a decentralized public blockchain created to be accessible by millions and featuring a dual Master node to facilitate inter-chain operations among both existing and upcoming blockchain platforms. CMC chain aims to provide a unified infrastructure that can develop solutions that are able to run on multiple platforms by enabling interoperability and while leaving implementation as simple as possible from the perspective of developers. One of the many unique features of CMC chain is that a user can interact with CMC chain to trigger an event in one chain that leads to results in a different chain.</p>
                    <p>These are some of the main technology features of CMC chain:</p>
                    <p>CMC chain’s Dual Master Nodes (Dual Nodes) technology provides ledger data of two chains simultaneously (CMC chain and another chain of choice). They can receive transactions from external chains and safely transfer those updates into CMC chain ledgers without compromising the security of either chain. Dual Master Nodes are fully decentralised as everyone can run a Dual Master Node. The consensus principle among users guarantees verification of data from both chains.</p>
                </div>
                <div class="col-md-6">
                    <p>CMC chain’s consensus algorithm uses Byzantime fault tolerance and Delegated Proof of Stake (BFT-DPOS) which not only ensures data consistency and integrity of the nodes but also the security of the entire network.</p>
                    <p>CMC chain Virtual Machine (CVM) is a powerful sandbox virtual stack embedded with each full node that is responsible for executing smart contracts bytecode. CVM is also compatible with Ethereum Virtual Machine (EVM).</p>
                    <p>CMC chain Smart Contract Markup Language (CSML) is designed to be the ultimate tool for developers to create smart contracts on the CMC chain platform without requiring a significant learning curve or any prior experience.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')
    
@endpush
