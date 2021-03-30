@extends('layouts.index')
@section('title', 'PT. PILAR MOBILE MEDIA')
@section('gallery', 'current')
@section('content')
    <div class="page-section pt-110-b-30-cont">
        <div class="container">
            <div class="relative">
                <div class="port-filter ">
                    <div class="mb-50">
                        <h2 class="section-title pr-0">OUR <span class="bold main-text-color">Gallery</span></h2>
                    </div>
                </div>
                <ul class="port-grid port-grid-gut clearfix" id="items-grid">
                    @if(count($contents) > 0)
                        @foreach($contents as $content)
                            <li class="port-item mix gallery">
                                <a href="{{ $content->media_link }}">
                                    <div class="port-img-overlay"><img class="port-main-img" style="height: 150px" src="{{ $content->media_link }}" alt="img"></div>
                                </a>
                                <a href="{{ $content->media_link }}" class="lightbox mr-20">
                                    <div class="port-overlay-cont">
                                        <div class="port-btn-cont"></div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
