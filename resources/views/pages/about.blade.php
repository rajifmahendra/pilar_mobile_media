@extends('layouts.index')
@section('title', 'PT. PILAR MOBILE MEDIA')
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
          Berdiri Sejak 11 Februari 2016 PT. PIlAR MOBILE MEDIA Menyediakan Jasa Event Organizer, Mice(Meeting, Incentives, Conference, Exhibitions), Advertising, Talk Show. Dengan Kemampuan Multimedia Disetiap Bidangnya Yang Lain.
        </p>
        <p>
          Kami Telah Sangat Berpengalaman dan Expert Dibidang Ini Serta Memiliki Team Yang Solid dan Kreatif, Karena Team Kami Sudah Ratusan Kali Mengadakan Event Untuk Perusahaan - Perusahaan Besar Baik di Jakarta Maupun di Wilayah Lainnya di Indonesia. Team Kami Telah Dipercaya Oleh Banyak Perusahaan - Perusahaan Untuk Menangani Event - Event Yang Berskala Nasional Serta Karya dan Kreasi Kami Telah Dinilai Oleh Klien - Klient Kami Sangat Kreatif dan Fantastis, Sehingga Seluruh Klien Kami Merasa Puas dengan Pelayanan dan Kreativitas Team Kami.
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
            <span class="bold main-text-color">Visi</span> Menjadi Penyedia Produk Layanan Berkualitas Tinggi dan Layanan Dengan Harga Kompetitif, Berkomitmen Untuk Transparan dan Dapat Diandalkan Dipercaya Dalam Bekerja Kepada Semua Klien dan Pemangku Kepentingan
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
            <span class="bold main-text-color">Misi</span> Menjadi Perusahaan Yang Berkomitmen dan Selalu Menyediakan Layanan Terbaik dan Dapat Diandalkan di Indonesia Dari Bidang Yang Kami Sediakan Untuk Bekerja Sama Dengan Baik
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
            <h3>Penyedia Pariwisata</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="200ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Penyedia Transportasi & Ticketing</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="400ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Penerbitan Surat Kabar, Jurnal & Buletin atau Majalah</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="600ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Produksi Film, Video & Program Televisi</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Distribusi Film, Video & Program Televisi</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="1000ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Periklanan</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="600ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Penyewaan & Sewa Guna Mobil, Bus, Truk & Sejenisnya</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="600ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Event Organizer</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="1000ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Penyelenggaraan Pertemuan, Perjalanan Insentif, Konferensi & Pameran</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Penyediaan Sumber Daya Manusia & Manajemen Fungsi Sumber Daya Manusia</h3>
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
        <h1 class="text-center mt-0 mb-110" style="font-size: 48px"><span class="bold">Pengalaman</span> Kami</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.389.196.500</h3>
            <div>
              Belanja Jasa Konsultasi Event
              Organizer Kegiatan Pelaksanaan
              Event-Event Lingkungan Hidup
              2011
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
            <h3>Rp.647.115.600,-</h3>
            <div>
              Kemitraan Dengan Media Massa (Dialog
              TV 7 Kali dan Dialog Radio 14 Kali
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
            <h3>Rp.2.022.460.000,-</h3>
            <div>
              Tayangan Kampanye Perubahan Iklim di Televisi 2010
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="600ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.994.400.000,-</h3>
            <div>
              TV Magazine Jakarta untuk Semua
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.1.150.737.500,-</h3>
            <div>
              Visualisasi dan Publikasi Kegiatan
              Program Pemberdayaan Masyarakat
              dan Desa di Pusat & Daerah
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="1000ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.1.788.977.320,-</h3>
            <div>
              Penyampaian Informasi Hasil
              Pembangunan di Provinsi DKI Jakarta
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="600ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.2.512.559.500,-</h3>
            <div>
              Peningkatan Kehumasan BNPB Melalui Radio
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="600ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.1.567.685.460,-</h3>
            <div>
              Pekerjaan TV Magazine Jakarta Untuk Semua
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="1000ms">
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.1.300.683.950,-</h3>
            <div>
              Pemasangan Iklan Pariwisata Pada
              Media Elektonik Dalam Negeri
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.740.500.000,-</h3>
            <div>
              Pembuatan Film Pengenalan Daya Tarik Wisata
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.710.380.000,-</h3>
            <div>
              Sosilisasi & Ujian Sertifikasi Keppress 80
              Tahun 2003 Tentang Barang & Jasa,
              Penyegaran Mutu SDM di Bidang PPNS
              serta Penyegaran Mutu SDM di Bidang
              Penegakan Hukum
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.1.375.030.000,-</h3>
            <div>
              Sabang Jass Festival
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.4.773.725.000,-</h3>
            <div>
              Penyelenggaraan Publikasi Media Elektronik
              Publik Dalam Rangka Peningkatan
              Pelayanan KPU/USO
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.2.950.832.500,-</h3>
            <div>
              Pengembangan dan Tayangan Film Untuk Remaja Tentang Perubahan Iklim
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.2.801.452.500,-</h3>
            <div>
              Penayangan Iklan Pariwisata & Budaya
              di Media Elektronik Dalam Negeri
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.1.479.126.000,-</h3>
            <div>
              Penyelenggaraan Pengembangan
              Konten Aplikasi Promosi Digital Portal
              Ekonomi Kreatif Indonesia TA 2012
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.2.811.050.000,-</h3>
            <div>
              Produksi & Penayangan Profil Destinasi Golf
              Jakarta & Sekitarnya di Media Elektronik/TV
              Luar Negeri
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.5.198.316.750,-</h3>
            <div>
              Pelatihan Peningkatan Kapasitas Tenaga
              Pendamping Desa Lot X (Region 10)
              (Provinsi NTB, Sulawesi Utara & Sulawesi
              Tenggara)
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.2.793.571.000,-</h3>
            <div>
              Pendukung Administrasi Penyelenggaraan
              Angkutan Motor Gratis, Pada Masa Lebaran
              Tahun 2017
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.1.798.249.200,-</h3>
            <div>
              Public Awarness Tentang Pentingnya Wilayah
              Pesisir, Laut dan Pulau-Pulau Kecil
              (WPLPPK) Sebagai Penggerak Ekonomi
              Wilayah
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
          <div class="fes8-title-cont" >
            <div class="fes8-box-icon">
              <div class="icon icon-basic-paperplane"></div>
            </div>
            <h3>Rp.7.986.825.000,-</h3>
            <div>
              Peningkatan Kapasitas Kehumasan BNPB Melalui Tayangan Televisi
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
        <div class="item"><img src="{{ asset('images/bekraf.png') }}" alt="client"></div>
        <div class="item"><img src="{{ asset('images/bkkbn.jpg') }}" alt="client"></div>
        <div class="item"><img src="{{ asset('images/dewan-iklim.jpg') }}" alt="client"></div>
        <div class="item"><img src="{{ asset('images/dishub.png') }}" alt="client"></div>
        <div class="item"><img src="{{ asset('images/jakarta-raya.png') }}" alt="client"></div>
        <div class="item"><img src="{{ asset('images/kementrian-desa.png') }}" alt="client"></div>
        <div class="item"><img src="{{ asset('images/kementrian-koperasi.jpg') }}" alt="client"></div>
        <div class="item"><img src="{{ asset('images/kementrian-negri.png') }}" alt="client"></div>
        <div class="item"><img src="{{ asset('images/kominfo.png') }}" alt="client"></div>
        <div class="item"><img src="{{ asset('images/unknown.png') }}" alt="client"></div>
      </div>
    </div> 
  </div>        
</div>
@endsection