@extends('layouts.index')
@section('content')
<div class="page-title-cont page-title-small grey-light-bg">
    <div class="relative container align-left">
      <div class="row">

        <div class="col-md-8">
          <h1 class="page-title">Gallery</h1>
        </div>

        <div class="col-md-4">
          <div class="breadcrumbs">
            <a href="{{ route('home') }}">Home</a><span class="slash-divider">/</span><a href="#">PAGES & FEATURES</a><span class="slash-divider">/</span><span class="bread-current">PORTFOLIO</span>
          </div>
        </div>

      </div>
    </div>
  </div>

<div class="main-bg-color clearfix">
    <div class="container white-bg plr-30 pt-50 pb-20">
        <div class="relative">
            <div class="port-filter ">
                <a href="#" class="filter active" data-filter="*">OUR Gallery</a>
            </div>
            <ul class="port-grid port-grid-gut clearfix" id="items-grid">
                @if(count($contents) > 0)
                    @foreach($contents as $content)
                        <li class="port-item mix gallery">
                            <a href="{{ $content->media_link }}" target="_blank">
                                <div class="port-img-overlay"><img class="port-main-img" src="{{ $content->media_link }}" alt="img"></div>
                            </a>
                            <a href="{{ $content->media_link }}" target="_blank" class="lightbox mr-20">
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
<script>
    import App from "../../../public/js/app";
    export default {
        components: {App}
    }
</script>
