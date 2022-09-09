@extends('client.layouts.app')

@section('content')
	<!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="i{{route('home')}}" class="scrollto"><img src="{{URL::to('client/img/logo.svg')}}" alt="" title="Gebyar ICT 2019"></a>
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
            <img src="{{URL::to('client/img/events/events-cinema.svg')}}" alt="Cinema" class="img-fluid" width="80%">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2>Cinematography</h2>
              <p>Cinematography Competition bertujuan untuk memberikan kesempatan berkompetisi bagi para sineas muda
                agar dapat menjalin kerjasama antar tim, berkreatif dalam membuat suatu film yang memiliki makna dan
                pesan untuk disampaikan.</p>

              <p>Informasi Lebih Lanjut :</p>
              <ul class="contact-person">
                <li><a href="https://wa.me/6285608887368">085608887368 (Lexy)</a></li>
                <li><a href="https://wa.me/62895396121350">0895396121350 (Afif)</a></li>
              </ul>
            </div>
            <a href="{{URL::to('juknis/Cinematography.pdf')}}" class="ict-btn scrollto" target="_blank">Download Juknis</a>
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
              <div class="col-md-2"><time>26 Ags 2019</time></div>
              <div class="col-md-10">
                <h4>Registration and Submit Film</h4>
                <p>Pendaftaran dan submit film di website Grbyar ICT 2019 sampai 12 Oktober 2019</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>12 Okt 2019</time></div>
              <div class="col-md-10">
                <h4>Closing Registration and Submit Film</h4>
                <p>Registrasi ditutup pada pukul 23.59</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>19 Okt 2019</time></div>
              <div class="col-md-10">
                <h4>Finalist Announcement</span></h4>
                <p>Pengumuman finalis akan disampaikan di website dan email</p>
              </div>
            </div>

            <div class="row timeline-item">
              <div class="col-md-2"><time>27 Okt 2019</time></div>
              <div class="col-md-10">
                <h4>Final Day and Winner Announcement</h4>
                <p>Finalis akan mengikuti babak final dan penjurian</p>
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
                <a data-toggle="collapse" class="collapsed" href="#faq1">Bagaimana cara untuk mendaftar?
                  <i class="fa fa-minus-circle"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p>
                    Peserta dapat mendaftar melalui website kemudian input judul, nama tim, ketua dan anggota tim.
                    Setelah itu melakukan pembayaran ke rekening yang sudah ditentukan.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Dapatkah saya mendaftar secara individu jika
                  tidak memiliki tim? <i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                    Boleh, peserta diperbolehkan tim yang maksimal berjumlah 3 orang ataupun perseorangan. Jika peserta
                    mendaftar secara individu, maka peserta harus mengisi judul film, nama tim, dan hanya nama ketua
                    saja. Kemudias melakukan pembayaran.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Apakah peseta diwajibkan untuk mengupload poster? Dan, dimana peserta harus mengupload poster?<i class="fa fa-minus-circle"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p>
                      Iya wajib, sebagai bukti bahwa peserta serius dalam mengikuti lomba, kemudian cara menguploadnya di instagram dan ketua tim wajib untuk mengupload.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">Apakah anggota tim boleh berasal dari sekolah/universitas/instansi yang berbeda? <i class="fa fa-minus-circle"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                  <p>
                    Boleh, Anggota tim boleh berasal dari sekolah/universitas/instansi yang berbeda.
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