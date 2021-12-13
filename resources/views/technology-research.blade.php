@extends('layouts.app')

@section('content')
<div id="researchPage">
    <section class="p-0">
        <img src="{{ asset('img/banner-research.jpg') }}" class="w-100">
    </section>
    <section>
        <div class="container">
            <h2 class="sectionHeading underline text-uppercase">RESEARCH AND INNOVATION</h2>
            <ul class="row g-0 nav nav-tabs">
                <li class="nav-item col-md-6" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#innovation-tab" type="button" role="tab" aria-controls="innovation-tab" aria-selected="true">CMCCHAIN Innovation</button>
                </li>
                <li class="nav-item col-md-6" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#research-tab" type="button" role="tab" aria-controls="research-tab" aria-selected="false">Team's Research Papers</button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="innovation-tab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>CMC CHAIN 2021 Performance</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>A Proposal for Decentralizing CMCchain Governance</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>CMCchain's Approach to the Right to Be Forgotten</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>CMC CHAIN 2021 Performance</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>A Proposal for Decentralizing CMCchain Governance</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>CMCchain's Approach to the Right to Be Forgotten</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>CMC CHAIN 2021 Performance</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>A Proposal for Decentralizing CMCchain Governance</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>CMCchain's Approach to the Right to Be Forgotten</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>CMC CHAIN 2021 Performance</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>A Proposal for Decentralizing CMCchain Governance</h6>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="item">
                                <p><img src="{{ asset('img/img-1.jpg') }}" class="w-100"></p>
                                <h6>CMCchain's Approach to the Right to Be Forgotten</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="research-tab" role="tabpanel" aria-labelledby="research-tab">
                    <div class="item">
                        <h6 class="title text-uppercase">Journals and Peer-reviewed Conferences</h6>
                        <div>CMCchain: A secure and efficient distributed ledger</div>
                        <div class="mb-3">By <a href="#" class="textPink">J. Chen and S. Micali</a></div>
                        <div>Theoretical Computer Science, 777:155-183, 2019</div>
                        <div><a href="#" class="textPink">https://www.cmcchain.io/cmcchain/article/pii/S030439751930091X</a></div>
                    </div>
                    <div class="item">
                        <h6 class="title text-uppercase">Journals and Peer-reviewed Conferences</h6>
                        <div>CMCchain: A secure and efficient distributed ledger</div>
                        <div class="mb-3">By <a href="#" class="textPink">J. Chen and S. Micali</a></div>
                        <div>Theoretical Computer Science, 777:155-183, 2019</div>
                        <div><a href="#" class="textPink">https://www.cmcchain.io/cmcchain/article/pii/S030439751930091X</a></div>
                    </div>
                    <div class="item">
                        <h6 class="title text-uppercase">Journals and Peer-reviewed Conferences</h6>
                        <div>CMCchain: A secure and efficient distributed ledger</div>
                        <div class="mb-3">By <a href="#" class="textPink">J. Chen and S. Micali</a></div>
                        <div>Theoretical Computer Science, 777:155-183, 2019</div>
                        <div><a href="#" class="textPink">https://www.cmcchain.io/cmcchain/article/pii/S030439751930091X</a></div>
                    </div>
                    <div class="item">
                        <h6 class="title text-uppercase">Journals and Peer-reviewed Conferences</h6>
                        <div>CMCchain: A secure and efficient distributed ledger</div>
                        <div class="mb-3">By <a href="#" class="textPink">J. Chen and S. Micali</a></div>
                        <div>Theoretical Computer Science, 777:155-183, 2019</div>
                        <div><a href="#" class="textPink">https://www.cmcchain.io/cmcchain/article/pii/S030439751930091X</a></div>
                    </div>
                    <div class="item">
                        <h6 class="title text-uppercase">Journals and Peer-reviewed Conferences</h6>
                        <div>CMCchain: A secure and efficient distributed ledger</div>
                        <div class="mb-3">By <a href="#" class="textPink">J. Chen and S. Micali</a></div>
                        <div>Theoretical Computer Science, 777:155-183, 2019</div>
                        <div><a href="#" class="textPink">https://www.cmcchain.io/cmcchain/article/pii/S030439751930091X</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
