@extends('client.layouts.app')

@section('content')
	<!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="{{route('home')}}" class="scrollto"><img src="{{URL::to('client/img/logo.svg')}}" alt="" title="Gebyar ICT 2019"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="login"><a href="{{route('auth.register')}}">REGISTER</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page events-page">

    <!--==========================
      Events Details Section
    ============================-->
    <section id="event-details" class="wow fadeIn">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <img src="{{URL::to('client/img/events/events-drone.svg')}}" alt="Drone" class="img-fluid" width="80%">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2>Micro Drone Race</h2>
              <p>Micro Drone Race Competition merupakan lomba yang bertujuan melatih
                ketangkasan peserta dalam adu skill mengendalikan drone pada wahana balap. Sekaligus menjadi daya
                tarik bagi masyarakat dalam menyaksikan salah satu kemajuan teknologi wahana terbang.</p>

              <p>Informasi Lebih Lanjut :</p>
              <ul class="contact-person">
                <li><a href="https://wa.me/6282245227801">082245227801 (Rizki)</a></li>
              </ul>
            </div>
            <a href="{{URL::to('juknis/Micro%20Drone%20Race%20Competition.pdf')}}" class="ict-btn scrollto" target="_blank">Download Juknis</a>
          </div>

        </div>
      </div>

    </section>

    <!--==========================
      Timeline Section
    ============================-->
    <section id="timeline" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Timeline</h2>
        </div>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row timeline-item">
              <div class="col-md-2"><time>8 Sep 2019</time></div>
              <div class="col-md-10">
                <h4>Online Registration</h4>
                <p>Registrasi dilaksanakan pada 8 September - 12 Oktober secara online di Website Gebyar ICT 2019</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>12 Okt 2019</time></div>
              <div class="col-md-10">
                <h4>Closing Online Registration</span></h4>
                <p>Registrasi Online ditutup</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>19 Okt 2019</time></div>
              <div class="col-md-10">
                <h4>OTS Registration</span></h4>
                <p>Registrasi On The Spot dilaksanakan Maksimal pukul 07.00</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>19 Okt 2019</time></div>
              <div class="col-md-10">
                <h4>Competition Day</span></h4>
                <p>Pelaksanaan Micro Drone Race dan pengumuman pemenang.</p>
              </div>
            </div>
          </div>
          <!-- End Schdule Day -->
        </div>
      </div>
    </section>

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <ul id="faq-list">

              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">Apakah Drone sudah dirakit dari rumah?
                  <i class="fa fa-minus-circle"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p>
                    Benar, Drone yang dibawa dan siap dikarantina (seleksi dimensi) harus sudah siap.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Apakah boleh memakai Micro Drone selain
                  berjenis FPV? <i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                    Tidak boleh, ketentuannya harus menggunakan Micro Drone berjenis FPV.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Apakah dari panitia menyediakan Drone yang
                  boleh dipinjam/dibeli? <i class="fa fa-minus-circle"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p>
                    Tidak, panitia tidak menyediakan. Jadi mohon calon peserta bisa merakit sebelum hari dimana
                    kompetisi berlangsung.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">Apakah keuntungan jika mendaftar sebelum sesi
                  OTS?<i class="fa fa-minus-circle"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                  <p>
                    Keuntungannya peserta akan mendapat konsumsi. Jadi untuk pendaftaran, panitia memiliki dua sesi
                    pendaftaran, Online(presale) maupun ditempat ketika acara akan dimulai (OTS), dengan biaya yang
                    sama. Tentunya fasilitas yang diberikan berbeda disetiap sesi pendaftaran. Berbeda dengan sesi OTS,
                    pada sesi presale pendaftar mendapatkan fasilitas berupa konsumsi.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section>

  </main>
@endsection