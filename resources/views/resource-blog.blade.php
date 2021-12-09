@extends('layouts.app')

@section('content')
<div id="resourceBlogPage">
    <section class="p-0">
        <img src="{{ asset('img/banner-resource-ft.jpg') }}" class="w-100">
    </section>

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

</div>
@endsection

@push('script')
    
@endpush
