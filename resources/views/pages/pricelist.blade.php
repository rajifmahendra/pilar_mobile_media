@extends('layouts.index')
@section('content')
    <div class="main-bg-color plr-30 plr-0-767 clearfix">
        <div class="white-bg plr-30 pt-50 pb-20">
            <div class="relative">
                <div class="row">
                    @if($contents->isNotEmpty())
                        @foreach($contents as $content)
                            <div class="col-sm-6 col-md-3 col-lg-3 wow fadeIn pb-70">
                                <div class="post-prev-more-cont clearfix">
                                    <div class="shop-add-btn-cont">
                                        <button type="button"  class="button medium primary-light shop-add-btn" data-toggle="modal" data-target="#modal{{$content->id}}">
                                            <b>{{ $content->original_name }}</b>
                                        </button>
                                        <div class="modal fade bd-example-modal-lg" id="modal{{$content->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="{{ env('MBS_URL').'/'.'show-pdf?pdf_file='.$content->content }}" width="100%" height="480">
                                                        </iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
