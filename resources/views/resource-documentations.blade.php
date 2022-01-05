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
                        <p>CMCchain is a sharded protocol that enables blockchain networks to operate together seamlessly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <h2 class="sectionHeading underline text-uppercase">Build</h2>
                        <p>Most up-to-date information on the status of the development tools in the CMCchain ecosys.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <h2 class="sectionHeading underline text-uppercase">Maintain</h2>
                        <p>Information and guides on how to deploy a node and run the network.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2 class="sectionHeading">Documentations</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>CMCchain is an accessible blockchain for millions and is a decentralized public blockchain which provides the dual Master node to facilitate inter-chain operations among both existing and upcoming blockchain platforms. CMCchain aims to provide a unified infrastructure that can develop solutions which are able to run on multiple platforms, by enabling the interoperability, and while leaving implementation as simple as possible from the perspective of developers. One of the many unique features of CMCchain is that a user can interact with CMCchain to trigger an event in one chain that leads to results of a different chain. These are features technology of CMCchain:</p>
                    <p>CMCchain’s Dual Master Nodes (Dual Nodes) technology provides ledger data of two chains simultaneously (CMCchain and another chain of choice). They can receive transactions from external chains and safely ingest those updates into CMCchain ledgers without compromising security from both chains. Dual Master Nodes are decentralised because everyone can run a Dual Master Node (permissionless) and have a consensus among them to verify data from both chains. </p>
                </div>
                <div class="col-md-6">
                    <p>CMCchain’s Consensus algorithm uses Byzantime fault tolerance - Delegated Proof of Stake - (BFT-DPOS) which will not only ensure data consistency and integrity of the nodes, but also ensure the security of the entire KardiaChain’s network.</p>
                    <p>CMCchain Virtual Machine (CVM) is a powerful, sandbox virtual stack embedded with each full node, responsible for executing smart contracts bytecode.  CVM is also compatible with Ethereum Virtual Machine (EVM)</p>
                    <p>CMCchain Smart Contract Markup Language (CSML) is designed to be the ultimate tool for developers to develop smart contracts on the CMCchain’s platform without requiring significant learning curves or any prior experience.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('script')
    
@endpush
