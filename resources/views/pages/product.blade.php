@extends('layouts.index')
@section('content')
<div class="page-title-cont page-title-small grey-light-bg">
    <div class="relative container align-left">
      <div class="row">

        <div class="col-md-8">
          <h1 class="page-title">PORTFOLIO</h1>
        </div>

        <div class="col-md-4">
          <div class="breadcrumbs">
            <a href="index.html">Home</a><span class="slash-divider">/</span><a href="#">PAGES & FEATURES</a><span class="slash-divider">/</span><span class="bread-current">PORTFOLIO</span>
          </div>
        </div>

      </div>
    </div>
  </div>

<div class="main-bg-color plr-30 plr-0-767 clearfix">
    <div class="white-bg plr-30 pt-50 pb-20">
        <div class="row">
            @if(count($contents) > 0)
                @foreach($contents as $content)
                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeIn pb-70" data-wow-delay="600ms">
                        <div class="post-prev-img">
                            <a href="{{ url('product').'/'.$content->id }}"><img src="{{ $content->media_link }}" alt="img"></a>
                        </div>
                        <div class="post-prev-title mb-5">
                            <h3><a class="button medium gray btn-5 btn-5bb" href="{{ url('product').'/'.$content->id }}">{{ $content->name }}</a></h3>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
