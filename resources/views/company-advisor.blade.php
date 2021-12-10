@extends('layouts.app')

@section('content')
<div id="leaderBoard">
    <section class="p-0">
        <img src="{{ asset('img/banner-advisor.jpg') }}" class="w-100">
    </section>
    <section>
        <div class="container">
            <h2 class="sectionHeading">Technical Advisory Board</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                            <span class="thumbWrap">
                                <img src="{{ asset('img/avtnd-2.jpg') }}">
                            </span>
                            <div>AT&T</div>
                            <h5 class="name">Andre Fuetsch</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                            <span class="thumbWrap">
                                <img src="{{ asset('img/avtrd.jpg') }}">
                            </span>
                            <div>AT&T</div>
                            <h5 class="name">Andre Fuetsch</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                            <span class="thumbWrap">
                                <img src="{{ asset('img/avtst.jpg') }}">
                            </span>
                            <div>AT&T</div>
                            <h5 class="name">Andre Fuetsch</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                            <span class="thumbWrap">
                                <img src="{{ asset('img/avtth-4.jpg') }}">
                            </span>
                            <div>AT&T</div>
                            <h5 class="name">Andre Fuetsch</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                            <span class="thumbWrap">
                                <img src="{{ asset('img/avtth-5.jpg') }}">
                            </span>
                            <div>AT&T</div>
                            <h5 class="name">Andre Fuetsch</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                            <span class="thumbWrap">
                                <img src="{{ asset('img/avtth-6.jpg') }}">
                            </span>
                            <div>AT&T</div>
                            <h5 class="name">Andre Fuetsch</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                            <span class="thumbWrap">
                                <img src="{{ asset('img/avtth-7.jpg') }}">
                            </span>
                            <div>AT&T</div>
                            <h5 class="name">Andre Fuetsch</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                            <span class="thumbWrap">
                                <img src="{{ asset('img/avtth-8.jpg') }}">
                            </span>
                            <div>AT&T</div>
                            <h5 class="name">Andre Fuetsch</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Director info Modal -->
    <div class="modal fade" id="leaderInfo" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="info">
                                <span class="thumbWrap">
                                    <img src="{{ asset('img/avtnd-2.jpg') }}">
                                </span>
                            </div>
                        </div>
                        <div class="col">                               
                            <h6>AT&T</h6>
                            <h5 class="mb-4">Andre Fuetsch</h5>
                            <p>Melissa E. Evers is vice president in the Intel Architecture, Graphics, and Software group and general manager of Software Business Strategy at Intel Corporation. Her responsibilities span guiding the strategy and defining software strategies across Intel collaborating with teams and business units. Her team builds tools, insights, systems and processes to ensure our software initiatives drive maximum impact to Intel’s business. Based in Portland, Oregon, Evers leads Intel’s open source software coordination, strategy and engagement in our associated communities. Outside of Intel, she is a member of the Linux Foundation board and serves as governing board chair of LF Edge, an umbrella project within the Linux Foundation.</p>
                            <p>Before assuming her current Intel role in 2019, Evers worked across the system software stack in open source communities, from device to edge to cloud. She has led development in a breadth of open source development areas, including Android, Chrome, graphics, media, OpenStack, Cloud Native Computing and StarlingX. In 2017, her contributions to Chrome OS earned her an Intel Achievement Award, the company’s highest recognition. Since joining Intel in 2004, Evers has worked across engineering, finance  and product management functions. Before joining Intel, she worked at Dell Inc. and Exxon Mobil Corp.</p>
                            <p>Evers holds a bachelor’s degree in engineering from the University of Texas at Austin. She also earned an MBA degree from the university’s McCombs School of Business. An active champion of diversity and inclusion, as well as a certified coach, Evers frequently coaches leaders internally and externally. She is also a frequent keynote speaker at industry events.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
