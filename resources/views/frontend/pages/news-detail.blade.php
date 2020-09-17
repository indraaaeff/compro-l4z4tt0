@extends('frontend.layout.web')

@section('title')
- {{ $item->name }}
@endsection

@push('meta')
<meta name="author" content="Lazatto Chicken & Burger">
<meta name="title" content="Lazatto Chicken & Burger - {{ $item->name }}">
<meta name="description" content="Lazatto Chicken & Burger - {{ $item->name }}">
<meta name="keywords" content="Lazatto Chicken & Burger - {{ $item->name }}">
@endpush

@section('content')
<div class="owl-carousel slide-one-item">
    <div class="site-section-cover img-bg-section" style="background-image: url('{{ $item->banner }}'); " ></div>
</div>

<div class="site-section bg-light" id="blog-section">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>{{ $item->name }}</h2>
                <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center mb-3" data-aos="fade-up" data-aos-delay="">
                <small>Diposting pada {{ date('d F Y H:i' ,strtotime($item->created_at)) }}</small>
                <p class="mt-3">{!! $item->introduction !!}</p>
                <img src="{{ $item->picture }}" alt="Image" class="img-fluid rounded">
                <p class="mt-3">{!! $item->content !!}</p>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('news') }}" class="btn btn-lg my-btn-red">Kembali ke News & Update</a>
        </div>
    </div>
</div>
@endsection