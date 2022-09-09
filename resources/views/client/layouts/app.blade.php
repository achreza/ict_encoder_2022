<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>ICT 2019 - Innovation of Technology</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  @include('client.layouts.css')

</head>

<body>

  @yield('content')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{URL::to('client/img/logo.svg')}}" alt="Gebyar ICT 2019">
            <p>Gebyar ICT merupakan event tahunan yang diselenggarakan oleh Himpunan Mahasiswa Jurusan Teknik
              Informatika Universitas Islam Negeri Maulana Malik Ibrahim Malang sebagai sarana untuk menyalurkan
              inovasi, kreativitas dan keterampilan mahasiswa khususnya dan masyarakat Indonesia pada umumnya di bidang
              teknologi.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Visit Other Websites</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="http://informatika.uin-malang.ac.id/">Jurusan Teknik
                  Informatika</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="http://himatif-encoder.or.id">HMJ Teknik
                  Informatika</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">

          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Sekertariat HMJ Teknik Informatika,<br>
              Gedung Student Center lt. 1,<br>
              UIN Maulana Malik Ibrahim Malang,<br>
              JL. Gajayana No. 50, Dinoyo,<br>
              Kec. Lowokwaru, Kota Malang, Jawa Timur, 65144<br>
              <strong>Phone:</strong> +62 812-9168-3445<br>
              <strong>Email:</strong> ict.encoder@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/Gebyar-ICT-2019-103520024331885/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/ict_encoder/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="mailto:ict.encoder@gmail.com" class="gmail"><i class="fa fa-envelope"></i></a>
              <a href="https://wa.me/6281291683445" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Gebyar ICT 2019</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Thetimeline
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --
        Edited by <a href="http://himatif-encoder.or.id/">Himatif Encoder</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  @include('client.layouts.js')
</body>

</html>