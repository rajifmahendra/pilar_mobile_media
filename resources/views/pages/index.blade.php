@extends('layouts.index')
@section('title', 'PT. PILAR MOBILE MEDIA')
@section('home', 'current')
@section('content')

<div id="about" class="page-section">
  <div class="container fes1-cont">
    <div class="row">
      <div class="col-md-4 fes1-img-cont wow fadeInUp mb-20">
        {{-- <img src="/template/html/images/phone-with-arrow.png" alt="img" > --}}
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
            <div class="fes1-main-title-cont wow fadeInDown">
              <div class="title-fs-60">
                IZIN<br>
                <span class="bold main-text-color">USAHA</span>
              </div>
              <div class="line-3-100"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="fes1-box wow fadeIn" >
              <div class="fes1-box-icon">
                <div class="icon icon-basic-lightbulb main-text-color"></div>
              </div>
              <h3>SIUP</h3>
              <p>Surat izin usaha perdagangan</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="fes1-box wow fadeIn" data-wow-delay="200ms">
              <div class="fes1-box-icon">
                <div class="icon icon-basic-lightbulb main-text-color"></div>
              </div>
              <h3>NIB</h3>
              <p>Nomor induk berusaha</p>
            </div>
          </div>
        </div>
        <div class="row">      
          <div class="col-md-6 col-sm-6">
            <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
              <div class="fes1-box-icon">
                <div class="icon icon-basic-lightbulb main-text-color"></div>
              </div>
              <h3>NIB</h3>
              <p>Nomor induk berusaha</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6" style="margin-top: 25px">
            <div class="fes1-box wow fadeIn pl-0" data-wow-delay="600ms">
              <a href="/about" class="button medium hover-thin deeporange">SELENGKAPNYA</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<hr>
<div class="page-section fes4-cont pb-0">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn">
          <h2 class="section-title">PENGALAMAN <span class="bold main-text-color">KAMI</span></h2>
        </div>
      </div>            
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn" data-wow-delay="200ms">
          <div class="fes4-title-cont" >
            <div class="fes4-box-icon">
              <div class="icon icon-basic-share main-text-color"></div>
            </div>
            <p>
              Bendahara Pengeluaran Sekretariat Badan Bekraf - Pengembangan Publikasi Produk Kreatif Dalam Rangka Pelaku Kreatif Yang Diberikan Pembinaan Pengembangan Pasar Dalam Negeri Di Hotel Akmani
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn" data-wow-delay="400ms">
          <div class="fes4-title-cont" >
            <div class="fes4-box-icon">
              <div class="icon icon-basic-share main-text-color"></div>
            </div>
            <p>
              Direktorat Jenderal Mineral Dan Batubara - Koordinasi dan Sinkronisasi Program Kegiatan Direktorat Jenderal Mineral dan Batubara
            </p>
          </div>
        </div>
      </div>    
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
          <div class="fes4-title-cont" >
            <div class="fes4-box-icon">
              <div class="icon icon-basic-share main-text-color"></div>
            </div>
            <p>
              Direktorat Jenderal Mineral Dan Batubara - Koordinasi dan Sinkronisasi Program Kegiatan Direktorat Jenderal Mineral dan Batubara
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
@endsection
