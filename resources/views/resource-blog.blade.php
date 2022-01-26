@extends('layouts.app')

@section('content')
<div id="blogPage">
    <section class="p-0">
        <img src="{{ asset('img/banner-resource-ft.jpg') }}" class="w-100">
    </section>
    <section class="listBlog">
        <div class="container">
            <h2 class="sectionHeading">HYPERAS chain blog</h2>
            {{-- <div class="row">
                @foreach ($news as $newsItem)
                <div class="col-lg-4 col-md-6 item">
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
            @include('pagination.news', ['paginator' => $news]) --}}
        </div>
    </section>
</div>
@endsection
