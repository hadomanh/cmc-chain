@extends('layouts.app')

@section('content')
<div id="blogPage">
    <section class="p-0">
        <img src="{{ asset('img/banner-resource-ft.jpg') }}" class="w-100">
    </section>
<<<<<<< HEAD
    <section class="listBlog">
        <div class="container">
            <h2 class="sectionHeading">CMCchain blog</h2>
            <div class="row">
                <div class="col-md-4 item">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{ asset('img/resource-blog-one.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Where can I get some?</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{ asset('img/resource-blog-two.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Where can I get some?</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{ asset('img/resource-blog-three.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Where can I get some?</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{ asset('img/resource-blog-one.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Where can I get some?</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{ asset('img/resource-blog-two.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Where can I get some?</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{ asset('img/resource-blog-three.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Where can I get some?</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa sequi consequuntur tenetur, nihil placeat delectus quaerat vero soluta itaque temporibus officiis ducimus aspernatur labore doloremque, vel quia hic sapiente iste.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
=======

    <div class="container pt-5 pb-5">
        <h1>CMC Chain Blog</h1>
        <div class="row">

            @foreach ($news as $newsItem)
                <div class="col-4 mt-3">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{ asset('storage/' . $newsItem->thumbnail) }}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{ $newsItem->title }}</h5>
                        <p class="card-text">{{ $newsItem->subtitle }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>

        @include('pagination.news', ['paginator' => $news])
    </div>

>>>>>>> 7bdeb7f3af7b34f449480f32781f37cf30bd7d3a
</div>
@endsection

@push('script')
    
@endpush
