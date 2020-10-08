@extends('layouts.app')

@section('content')

  {{-- script smooth scroll --}}
  <script type="text/javascript">
    // $(function(){
    //   $("a").on('click', function(event) {
    //     if (this.hash !== "") {
    //       event.preventDefault();
    //       var hash = this.hash;
    //       $('html, body').animate({
    //         scrollTop: $(hash).offset().top
    //       }, 100, function(){
    //         window.location.hash = hash;
    //       });
    //     }
    //   });
    // })
  </script>

  {{-- Banner --}}
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br><br><br><br><br><br><br>
        <h1 class="header center white-text"><b class="deep-orange-text">INDO</b>Cemara</h1>
        <div class="row center" style="margin-top: -20px">
          <h5 class="header col s12 light white-text">Hidupkan sejarah keluarga Anda dengan menjelajahi kehidupan orang-orang yang datang sebelum Anda.</h5>
        </div>
        <div class="row center">
          <center>
            <a href="#feature" class="btn-large waves-effect waves-light deep-orange" style="border-radius: 50px">Read More</a>
          </center>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax">
        <img src="https://raw.githubusercontent.com/rifqyar/indocemara/master/public/images/first_bg.png">
    </div>
  </div>

  <hr class="container" style="margin-top: 50px;margin-bottom: 50px">

  {{-- Feature --}}
  <div class="row deep-orange accent-3" id="feature" style="margin-bottom: 0">
    <div class="container" style="padding-top: 150px;">
      <div class="col s12 m6 white-text" style="padding-bottom: 200px"> 
        <h3>     
          Temukan kisah keluarga Anda <br> melalui catatan sejarah.
        </h3>
        <p>Hidupkan sejarah keluarga Anda dengan menjelajahi kehidupan orang-orang yang datang sebelum Anda.</p>
      </div>

      <div class="col s12 m6" style="padding-bottom: 200px; margin-top: 20px">
        <img src="{{ asset('img/history1.png') }}" class="img-fluid">
      </div>
    </div>
  </div>

  <hr class="container" style="margin-top: 50px;margin-bottom: 50px">
  
  <div class="parallax-container valign-wrapper" style="height: 400px; margin-top: 0">
    <div class="row">
      <div class="col s2"></div>
      <div class="col s8">
        <div class="section no-pad-bot" style="width: 100%">
          <div class="row center">
            <h2 class="bold white-text">Hai, Kita Indo Cemara. Kita dapat membantu aanda menemukan silsilah keluarga Anda</h2>
            <div class="container">
              <hr>
            </div>
          </div>
        </div>    
      </div>
      <div class="col s2"></div>
    </div>
    
    <div class="parallax"><img src="https://raw.githubusercontent.com/rifqyar/indocemara/master/public/images/photo-1588979355313-6711a095465f.jpg"></div>
  </div>


  <div class="container" id="read-more">
    <div class="section">
      <div class="row center" style="padding-bottom: 40px; padding-top: 40px">
        <br>
         <div class="col-xl-6 mx-auto text-center">
            <div class="section-title mb-100">
               <h4>Layanan Kami</h4>
            </div>
         </div>
      </div>
      <!--   Icon Section   -->
      <div class="row">

        <div class="col s12 m4">
          <div class="card">
            <div class="card-content center card-panel deep-orange">
              <h5 class='row-center white-text'>Layanan Kesehatan + Keturunan</h5>
              <p>
                <small class="white-text row-center">
                  Dapatkan wawasan genetik tentang nenek moyang Anda, sifat dan kesehatan yang dapat membantu memudahkan Anda untuk mengambil tindakan terhadap kesehatan Anda.
                </small>
              </p>
            </div>
            <div class="card-content center">
              <h2 class='blue-text '><small>Rp. </small>3.000.000</h2>
            </div>
            <ul class='collection center'>
              <li class='collection-item'>
                <strong>150+</strong> laporan yang dipersonalisasi
              </li>
              <li class='collection-item'>
                Layanan Leluhur + Sifat
              </li>
              <li class='collection-item'>
                Laporan resmi FDA
              </li>
              <li class='collection-item'>
                Kelayakan FSA / HSA **
              </li>
            </ul>
            <div class="card-content center">
              <div class="row">
                <div class="col s12">
                  <button class='btn-large green waves-effect waves-light' style="border-radius: 10px">Detail</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card" >
            <div class="card-content center card-panel yellow darken-4" style="padding-bottom: 68px">
              <h5 class='row-center white-text'>Layanan Ancestry + Traits</h5>
              <p>
                <small class="white-text row-center">
                  Kit DNA terbaik dengan rincian leluhur paling komprehensif dan 30+ laporan sifat.
                </small>
              </p>
            </div>
            <div class="card-content center">
              <h2 class='blue-text '><small>Rp. </small>1.500.000</h2>
            </div>
            <ul class='collection center'>
              <li class='collection-item'>
                <strong>80+</strong> laporan hasil personalisasi
              </li>
              <li class='collection-item'>
                Persentase keturunan (ke 0,1%)
              </li>
              <li class='collection-item'>
                <strong>2000+</strong> wilayah geografis
              </li>
              <li class='collection-item'>
                Peningkatan kesehatan
              </li>
            </ul>
            <div class="card-content center">
              <div class="row">
                <div class="col s12">
                  <button class='btn-large green waves-effect waves-light' style="border-radius: 10px">Detail</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-content center card-panel deep-orange">
              <h5 class='row-center white-text'>Layanan Kesehatan + Keturunan VIP</h5>
              <p>
                <small class="white-text row-center">
                  Dapatkan wawasan genetik tentang nenek moyang Anda, sifat dan kesehatan yang dapat membantu memudahkan Anda untuk mengambil tindakan terhadap kesehatan Anda.
                </small>
              </p>
            </div>
            <div class="card-content center">
              <h2 class='blue-text '><small>Rp. </small>7.500.000</h2>
            </div>
            <ul class='collection center'>
              <li class='collection-item'>
                <strong>150+</strong> laporan yang dipersonalisasi
              </li>
              <li class='collection-item'>
                Memiliki fitur VIP tambahan 
              </li>
              <li class='collection-item'>
                Premium Customer Support
              </li>
              <li class='collection-item'>
                Menjadi Prioritas dalam pemrosesan
              </li>
            </ul>
            <div class="card-content center">
              <div class="row">
                <div class="col s12">
                  <button class='btn-large green waves-effect waves-light' style="border-radius: 10px">Detail</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <br><br><br>
    <hr>
  </div>

  <br><br><br>

  <div class="container">
    <div class="section">
      <div class="row center" style="padding-bottom: 40px; padding-top: 40px">
        <br>
         <div class="col-xl-6 mx-auto text-center">
            <div class="section-title mb-100">
               <h4>Tertarik Dengan Layanan Kami?</h4>
            </div>
            <h4>Segera Daftar dan Nikmati layanan yang kami berikan</h4>
            <br><br>
            <a class="btn-large white waves-effect waves-light" style="border-radius: 50px; border: 1px solid #ff5722; "><span class="deep-orange-text">Sign Up</span></a>
         </div>
      </div>
    </div>
  </div>

@endsection
