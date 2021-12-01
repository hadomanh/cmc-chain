@extends('layouts.app')

@section('content')
<div id="resourceBlogPage">
    <section class="p-0">
        <img src="{{ asset('img/banner-resource-ft.jpg') }}" class="w-100">
    </section>

    <div class="container pt-5 pb-5">
        <h1>CMC Chain Blog</h1>
        <div class="row">
            <div class="col-4 mt-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ asset('img/resource-blog-one.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Where can I get some?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                    </div>
                </div>
            </div>

            <div class="col-4  mt-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ asset('img/resource-blog-two.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Where can I get some?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                    </div>
                </div>
            </div>

            <div class="col-4  mt-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ asset('img/resource-blog-three.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Where can I get some?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                    </div>
                </div>
            </div>

            <div class="col-4  mt-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ asset('img/resource-blog-one.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Where can I get some?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                    </div>
                </div>
            </div>

            <div class="col-4  mt-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ asset('img/resource-blog-two.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Where can I get some?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                    </div>
                </div>
            </div>

            <div class="col-4  mt-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ asset('img/resource-blog-three.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Where can I get some?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                    </div>
                </div>
            </div>

            <div class="col-4  mt-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ asset('img/resource-blog-one.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Where can I get some?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                    </div>
                </div>
            </div>

            <div class="col-4  mt-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ asset('img/resource-blog-two.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Where can I get some?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                    </div>
                </div>
            </div>

            <div class="col-4  mt-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ asset('img/resource-blog-three.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Where can I get some?</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="d-flex justify-content-center pt-5">
            <div id="blogPagination">
                <span style="color: #e3007a">PREVIOUS</span>
                <span class="text-muted">Page 1 of 28</span>
                <span style="color: #e3007a">NEXT</span>
            </div>
        </div>
    </div>

</div>
@endsection

@push('script')
    
@endpush
