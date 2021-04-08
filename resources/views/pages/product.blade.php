@extends('layouts.index')
@section('title', 'PT. PILAR MOBILE MEDIA')
@section('product', 'current')
@section('content')
    <div class="page-section pt-110-b-30-cont">
        <div class="container">
            <div class="mb-50">
                <h2 class="section-title pr-0">OUR <span class="bold main-text-color">PRODUCT</span></h2>
            </div>
            <div class="row">
                @if(count($contents) > 0)
                    @foreach($contents as $content)
                        <div class="col-sm-6 col-md-3 col-lg-3 wow fadeIn pb-70" data-wow-delay="600ms">
                            <div class="post-prev-img">
                                <a href="{{ $content->media_link }}">
                                    <div class="port-img-overlay"><img class="port-main-img" style="height: 150px!important;" src="{{ $content->media_link }}" alt="img"></div>
                                </a>
                                <a href="{{ $content->media_link }}" class="lightbox mr-20">
                                    <div class="port-overlay-cont" style="height: 150px">
                                        <div class="port-btn-cont"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="post-prev-title mb-5">
                                <h3><a class="font-norm a-inv" href="{{ url('product').'/'.$content->id }}">{{ $content->name }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
