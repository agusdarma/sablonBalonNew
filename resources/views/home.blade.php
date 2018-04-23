@extends('layouts.main')

@section('header')
<div  data-vide-bg="poster:{{asset('roasting/video/vd')}}" data-vide-options="posterType: jpg">
  <div class="banner">
    <div class="header-top">
      <div class="container">
        <div class="indicat">
          <span><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Jalan Duri Intan, Jakarta Barat, Indonesia, 11510</span>
        </div>
        <div class="detail">
          <ul>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+62 817-4816-268</li>
            <li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> Mon-Sun 8:00 am to 23:00 pm </li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="container">
      <div class="navigation">
        <div class="logo">
          <h1><a href="/">SablonBalon</a></h1>
        </div>
        <div class="navigation-right">
          <span class="menu"><img src="{{asset('roasting/images/menu.png')}}" alt=" " /></span>
          <nav class="link-effect-3" id="link-effect-3">
            <ul class="nav1 nav nav-wil">
              <li class="active"><a data-hover="Home" href="/">Home</a></li>
              <li><a data-hover="Gallery" href="#">Gallery</a></li>
              <li><a data-hover="Contact" href="/contactUs">Contact</a></li>
            </ul>
          </nav>
                <script>
                   $( "span.menu" ).click(function() {
                   $( "ul.nav1" ).slideToggle( 300, function() {

                    });
                   });
                </script>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="w3ls_banner_info">
        <h3>Selamat datang di Balon Sablon Jakarta Murah! </h3>
        <p>Selamat datang di Balon Sablon Jakarta Murah! Sejalan dengan banyaknya media promosi, kami menawarkan salah satu cara promosi yang mudah dan murah menggunakan balon. Sejauh ini media balon promosi terbukti banyak peminatnya karena efektif, mudah, murah dan efisien. Balon promosi atau balon iklan dapat digunakan untuk keperluan Grand Launching, Launching produk, pameran, expo, ulang tahun dan masih banyak lagi.
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
@section('content')
<div class="content">
  <!--best-->
  <div class="best-w3">
    <div class="container">
      <h2 class="tittle">Why choose us?? </h2>
      <div class="best-grids">
        <div class="col-md-13 best-grid1">
          <img src="{{asset('roasting/images/picrame.jpg')}}" class="img-responsive gray" alt="contoh hasil sablon balon"/>
        </div>
        <div class="col-md-8 best-grid">
          <h4>What we offer </h4>
          <p>Harga yang bersaing dan ketersediaan stock yang terjamin di dukung  pula dengan ekspedisi yang terpercaya kita akan memberikan yang terbaik untuk konsumen</p>
          <div class="best-bottom">
            <div class="col-md-6 best-left">
              <div class="icons">
                <i class="glyphicon glyphicon-time" aria-hidden="true"></i>
              </div>
              <h5>On time delivery</h5>
              <p>Kami menggunakan jasa pengiriman terpercaya sehingga sangat kecil kemungkinanannya untuk terlambat</p>
            </div>
            <div class="col-md-6 best-right">
              <div class="icons">
                <i class="glyphicon glyphicon-credit-card" aria-hidden="true"></i>
              </div>
              <h5>Reasonable Price</h5>
              <p>Harga yang di tawarkan cukup bersaing karena kami produsen bukan reseller</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="best-bottom">
            <div class="col-md-6 best-left">
              <div class="icons">
                <i class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></i>
              </div>
              <h5>Stock availability</h5>
              <p>Ketersediaan stock terjamin karena kami memproduksi produk sendiri</p>
            </div>
            <div class="col-md-6 best-right">
              <div class="icons">
                <i class="glyphicon glyphicon-certificate" aria-hidden="true"></i>
              </div>
              <h5>Best quality</h5>
              <p>Untuk memenuhi kebutuhan pelanggan pemilihan bahan baku untuk produksi dan tinta sudah menjadi prioritas kami sehingga tidak usah di ragukan lagi</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--best-->
  <!--menu-->
  <div class="special-w3">
    <div class="container">
      <h3 class="tittle1">Special Design</h3>
      <div class="special-grids">
        <div class="col-md-4 menu-grid">
          <div class="menu1">
            <img src="{{asset('roasting/images/pic14.jpg')}}" class="img-responsive gray" alt="sablon balon giant ekspres"/>
          </div>
        </div>
        <div class="col-md-4 menu-grid">
          <div class="menu1">
            <img src="{{asset('roasting/images/pic8.jpg')}}" class="img-responsive gray" alt="sablon balon popbox.asia"/>
          </div>
        </div>
        <div class="col-md-4 menu-grid">
          <div class="menu1">
            <img src="{{asset('roasting/images/pic9.jpg')}}" class="img-responsive gray" alt="sablon balon pop box"/>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="special-grids">
        <div class="col-md-4 menu-grid">
          <div class="menu1">
            <img src="{{asset('roasting/images/pic10.jpg')}}" class="img-responsive gray" alt="sablon balon hisana"/>
          </div>
        </div>
        <div class="col-md-4 menu-grid">
          <div class="menu1">
            <img src="{{asset('roasting/images/pic11.jpg')}}" class="img-responsive gray" alt="sablon balon ultah dhyara"/>
          </div>
        </div>
        <div class="col-md-4 menu-grid">
          <div class="menu1">
            <img src="{{asset('roasting/images/pic12.jpg')}}" class="img-responsive gray" alt="sablon balon RSIA UMMI"/>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--content-->
  <div class="content">
    <!--mission-->
    <div class="special-w3">
      <div class="container">
        <h3 class="tittle1">Price List</h3>
        <div class="special-grids">
          <div class="col-md-4 menu-grid">
            <div class="menu1">
              <img src="{{asset('roasting/images/harga_dove.jpg')}}" class="img-responsive gray" alt="harga paket sablon balon dove"/>
            </div>
          </div>
          <div class="col-md-4 menu-grid">
            <div class="menu1">
              <img src="{{asset('roasting/images/harga_besar.jpg')}}" class="img-responsive gray" alt="harga paket sablon balon besar"/>
            </div>
          </div>
          <div class="col-md-4 menu-grid">
            <div class="menu1">
              <img src="{{asset('roasting/images/harga_metalik.jpg')}}" class="img-responsive gray" alt="harga paket sablon balon metalik"/>
              <!-- <div class="menu-icon hvr-sweep-to-top">
                <i class="glyphicon glyphicon-filter" aria-hidden="true"></i>
              </div> -->
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!--mission-->
  </div>

</div>
@endsection
