@extends('layouts.index')
@section('title', 'PT. PILAR MOBILE MEDIA')
@section('about', 'current')
@section('content')
<div class="page-section grey-light-bg clearfix" id="company">
  <div class="fes7-img-cont col-md-5">
    <div class="fes7-img" style="background-image: url({{ asset('images/about-us.jpg') }})"></div>
  </div>
  <div class="container">
    <div class="row main-bg-color" style="color: black">
      <div class="col-md-6 col-md-offset-6 fes7-text-cont p-80-cont">
        <h1><span class="font-light" style="color: black">TENTANG KAMI</span></h1>
        <p class="mb-30">
            {{ isset($aboutContents['about_description'])?$aboutContents['about_description']:'' }}
        </p>
      </div>
    </div>
  </div>
</div>
<hr class="mt-0 mb-0">
<div class="page-section" id="visi-misi">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 wow fadeInLeft equal-height ">
        <div class="fes2-main-text-cont">
          <div class="title-fs-45">
            <span class="bold main-text-color">VISI</span>
          </div>
          <div class="line-3-70"></div>
          <div class="fes2-text-cont" style="font-size: 24px; line-height: 30px">
            <span class="bold main-text-color">Visi</span> {{ isset($aboutContents['about_visi'])?$aboutContents['about_visi']:'' }}
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="fes2-img equal-height main-bg-color">
            <img src="{{ asset('images/visi.jpeg') }}" alt="visi">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 left-50 wow fadeInRight equal-height">
        <div class="fes2-main-text-cont">
          <div class="title-fs-45">
            <span class="bold main-text-color">MISI</span>
          </div>
          <div class="line-3-100"></div>
          <div class="fes2-text-cont" style="font-size: 24px; line-height: 30px">
            <span class="bold main-text-color">Misi</span> {{ isset($aboutContents['about_misi'])?$aboutContents['about_misi']:'' }}
          </div>
        </div>
      </div>
      <div class="col-md-6 right-50">
        <div class="row">
          <div class="fes3-img equal-height main-bg-color">
            <img src="{{ asset('images/misi.jpeg') }}" alt="misi">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page-section fes4-cont pb-0" id="layanan">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="text-center mt-0 mb-110" style="font-size: 48px"><span class="bold main-text-color">Jasa Terbaik</span> Untuk Client</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Tempat Yang Sangat Berintegrasi Untuk Tempat Promosi Pemasaran : </h3>
            <p>Mulai Dari Perusahaan Dengan Tempat Seperti Mall, Kantor, Kampus, Tempat Persiapan, Profesional SPG Tempat Kegiatan Untuk Menarik Perhatian Pengunjung, Hiburan, Gala Dinner, Outbond, Dokumentasi Acara Dan Membantu Untuk Meningkatkan Target Selama Acara Berlangsung</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="200ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Sales Force Untuk Menjual Produk : </h3>
            <p>Time Sales Forces Yang Terlatih Dengan Baik Akan Melalukan Tugas Penjualan Seperti Pengadaan dan Peminjaman Produk Untuk Membantu Klien Dalam Meningkatkan Targer</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="400ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Pengelolaan Hadian : </h3>
            <p>Membuat, Memproduksi Kebutuhan Promosi, Hadian dan Souvenir Untuk Mendukung Acara Termaksud Pengelolaan Persediaan dan Pengantaran</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Penyimpanan : </h3>
            <p>Mengatur Persediaan Merchendice dan Toko di Gudang PILAR MOBILE MEDIA</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page-section fes4-cont main-bg-color" id="pengalaman" style="color: black">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="text-center mt-0 mb-110" style="font-size: 48px"><span class="bold">Pengalaman</span> Perusahaan</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Bendahara Pengeluaran Sekretariat Badan Bekraf</h3>
            <div>
               Pengembangan Publikasi Produk Kreatif Dalam Rangka Pelaku Kreatif Yang Diberikan Pembinaan Pengembangan Pasar Dalam Negeri Di Hotel Akmani
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="200ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Direktorat Jenderal Mineral Dan Batubara</h3>
            <div>
              Koordinasi dan Sinkronisasi Program Kegiatan Direktorat Jenderal Mineral dan Batubara
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="400ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Direktorat Jenderal Mineral Dan Batubara</h3>
            <div>
              Koordinasi dan Sinkronisasi Program Kegiatan Direktorat Jenderal Mineral dan Batubara
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container" id="klien">
  <div class="row pt-50">
    <div class="col-md-12">
      <h1 class="text-center"><span class="bold main-text-color">Klien</span> Kami</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div id="owl-clients" class="owl-carousel our-clients-cont">
          @if($clients->IsNotEmpty())
              @foreach($clients as $client)
                  <div class="item">
                      <a href="{{ $client->media_link }}">
                          <div class="port-img-overlay"><img class="port-main-img" style="height: 100px" src="{{ $client->media_link }}" alt="img"></div>
                      </a>
                      <a href="{{ $client->media_link }}" class="lightbox mr-20">
                          <div class="port-overlay-cont">
                              <div class="port-btn-cont"></div>
                          </div>
                      </a>
                      <p>{{ $client->name }}</p>
                  </div>
              @endforeach
          @endif
      </div>
    </div>
  </div>
</div>
@endsection
