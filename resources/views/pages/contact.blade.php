@extends('layouts.index')
@section('title', 'PT. PILAR MOBILE MEDIA')
@section('contact', 'current')
@section('content')
<div class="page-title-cont page-title-big grey-light-bg">
  <div class="relative container align-left">
    <div class="row">
      <div class="col-md-8">
        <h1 class="page-title">CONTACT</h1>
        <div class="page-sub-title">&nbsp;</div>
      </div>
      <div class="col-md-4">
        <div class="breadcrumbs">
          <a href="index.html">Home</a><span class="slash-divider">/</span><a href="#">PAGES</a><span class="slash-divider">/</span><span class="bread-current">CONTACT</span>
        </div>
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div data-latitude="37.792888" data-longitude="-122.404041" id="google-map"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-form-cont">
            <div class="mb-40">
              <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
            </div>
            <div>
            <form id="contact-form" action="{{ route('store.contact') }}" method="POST">
              @csrf
              <input type="hidden" name="web_url" value="{{ url('/') }}">
              <div class="row">
                  <div class="col-md-12 mb-30">
                    <!-- <label>Your name *</label> -->
                    <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-30">
                    <!-- <label>Your email address *</label> -->
                    <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-30">
                    <!-- <label>Your email address *</label> -->
                    <input type="text" value="" data-msg-required="Please enter your phone number, Ex: 628123456789" data-msg-required="Please enter a valid phone number" maxlength="100" class="controled" name="phone" id="phone" placeholder="PHONE : 628123456789" required>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-40">
                    <!-- <label>Message *</label> -->
                    <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required></textarea>
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-30">
                        <select name="category" class="controled">
                            <option value="other">Other</option>
                            <option value="kritik">Kritik dan Saran</option>
                            <option value="daftar">Daftar Mitra Kerja PT. PILAR MOBILE MEDIA</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center-xxs">
                    <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="checkbox small">
                      <label><input type="checkbox" value="privacy" data-msg-required="Please accept the terms" id="agree" name="agree" class="checkbox" required>I agree to the terms of service</label>
                    </div>
                  </div>
                </div>
              </form>
              <div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
                Thanks, your message has been sent to us.
              </div>

              <div class="alert alert-danger hidden animated shake" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="mt-0 mb-0">
  <div id="contact-link" class="page-section p-110-cont grey-light-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="cis-cont">
            <div class="cis-icon">
              <div class="icon icon-basic-map"></div>
            </div>
            <div class="cis-text">
              <h3><span class="bold">ADDRESS</span></h3>
              <p>
                Jl. Cipto Mangunkusumo No.3, RT.001/RW.006, Parung Serab, Kec. Ciledug, Kota Tangerang, Banten 15153
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="cis-cont">
            <div class="cis-icon">
              <div class="icon icon-basic-mail"></div>
            </div>
            <div class="cis-text">
              <h3><span class="bold">EMAIL</span></h3>
              <p><a href="mailto:pilarmobilemedia@yahoo.com">pilarmobilemedia@yahoo.com</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="cis-cont">
            <div class="cis-icon">
              <div class="icon icon-basic-smartphone"></div>
            </div>
            <div class="cis-text">
              <h3><span class="bold">CALL US</span></h3>
              <p>021 - 7333352</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<script src="https://maps.google.com/maps/api/js?key=INSERT-YOUR-API-KEY-HERE"></script>
<script src="{{ asset('template/html/js/gmap3.min.js') }}"></script>
<script src="{{ asset('template/html/js/jquery.validate.min.js') }}"></script>
{{--<script src="{{ asset('template/html/js/contact-form-validation.js') }}"></script>--}}
@endpush
