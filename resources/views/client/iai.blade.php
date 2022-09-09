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
            <img src="{{URL::to('client/img/events/events-apps.svg')}}" alt="Apps Idea" class="img-fluid text-center" width="80%">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2 class="font-weight-bold">Innovative Apps Idea</h2>
              <p>Innovative App Idea adalah kompetisi yang bertujuan menantang para peserta
                untuk dapat menuangkan ide, inovasi dan strategi bisnis dalam mengembangkan suatu aplikasi dan juga
                dapat memberi manfaat bagi masyarakat luas melalui fungsionalitasnya berbasis Web atau Mobile</p>

              <p>Informasi Lebih Lanjut :</p>
              <ul class="contact-person">
                <li><a href="https://wa.me/6285707799317">085707799317 (Adam)</a></li>
                <li><a href="https://wa.me/6285648375667">085648375667 (Rofi)</a></li>
              </ul>

            </div>
            <a href="{{URL::to('juknis/Innovative%20App%20Idea.pdf')}}" class="ict-btn scrollto" target="_blank">Download Juknis</a>
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
              <div class="col-md-2"><time>28 Ags 2019</time></div>
              <div class="col-md-10">
                <h4>Registration</h4>
                <p>Pendaftaran, submit proposal dan unggah prototype ke website Gebyar ICT 2019 sampai tanggal 12 Oktober</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>12 Okt 2019</time></div>
              <div class="col-md-10">
                <h4>Closing Registration and Submit File</h4>
                <p>Registrasi, submit proposal dan unggah prototype terakhir pukul 23.59</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>18 Okt 2019</time></div>
              <div class="col-md-10">
                <h4>Finalist Announcement</h4>
                <p>Finalis akan diumumkan di website Gebyar ICT 2019</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>26 Okt 2019</time></div>
              <div class="col-md-10">
                <h4>Final Day and Winner Announcement</span></h4>
                <p>Finalis akan melakukan presentasi kepada juri, lalu pengumuman juara</p>
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
                <a data-toggle="collapse" class="collapsed" href="#faq1">Apakah pembuatan prototype aplikasi dilakukan
                  saat lomba berlangsung?
                  <i class="fa fa-minus-circle"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p>
                    Tidak, pembuatan prototype aplikasi di buat sebelum lomba berlangsung, saat lomba berlangsung hanya
                    presentasi prototype yang telah dibuat dan penjurian
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Dapatkah saya mendaftar secara individu
                  jika tidak memiliki tim?<i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                    Iya, peserta diperbolehkan tim yang maksimal berjumlah 3 orang ataupun perseorangan
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Apa saja yang harus saya bawa saat
                  pelaksanaan final lomba?<i class="fa fa-minus-circle"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p>
                    Anda membawa laptop dan juga keperluan tambahan yang di butuhkan untuk mendukung kebutuhan
                    presentasi aplikasi anda
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">Siapa pemilik solusi (Intelectual Property)
                  setelah lomba selesai?<i class="fa fa-minus-circle"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                  <p>
                    Peserta akan sepenuhnya memiliki ide / produk setelah lomba selesai
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq5" class="collapsed">Apakah anggota tim boleh dari
                  universitas/institusi berbeda?<i class="fa fa-minus-circle"></i></a>
                <div id="faq5" class="collapse" data-parent="#faq-list">
                  <p>
                    Ya, anggota tim boleh dari universitas/institusi berbeda
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq6" class="collapsed">Apakah prototype aplikasi yang dilombakan harus
                  aplikasi jadi?<i class="fa fa-minus-circle"></i></a>
                <div id="faq6" class="collapse" data-parent="#faq-list">
                  <p>
                    Tidak, peserta hanya membuat bentuk prototype aplikasi yang akan dilombakan untuk didemokan saat
                    presentasi tahap final.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq6" class="collapsed">Apakah aplikasi yang dibuat boleh untuk
                  platform selain Web atau Mobile?<i class="fa fa-minus-circle"></i></a>
                <div id="faq6" class="collapse" data-parent="#faq-list">
                  <p>
                    Tidak, Pada tahun ini platform selain Web dan Mobile (android atau ios) tidak diperbolehkan
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq6" class="collapsed">Apa saja tahapan kompetisi Innovative App
                  Idea ?<i class="fa fa-minus-circle"></i></a>
                <div id="faq6" class="collapse" data-parent="#faq-list">
                  <p>
                    Terdapat 2 tahapan dalam kompetisi Innovative App Idea, pertama adalah tahap submisi ide, peserta
                    diharapkan mengirimkan file proposal serta bentuk prototype aplikasi yang sudah dibuat pada halaman
                    peserta ICT 2019, kedua adalah tahap finalis dimana para peserta finalis akan mempresentasikan hasil
                    prototype aplikasi dihadapan juri.
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