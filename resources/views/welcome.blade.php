<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Blonjo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

		<!--Scripts-->
		<script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		
       

        <style>
            body {
                font-family: Poppins, sans-serif;
                
                
            }
            a{
                text-decoration: none;
            }
            p{
                padding-top: 20px;
                font-size: 16px;
            }
            h1, h3{
                font-weight: bold;
            }
           .one{
                color: #3490dc;
                font-size: 53px;
			}
			.gbr{
				padding-top: 220px;
			}
            .two{
                color: #fff;
                font-size: 50px;
            }
            .section{
                height: 720px;
                padding-top: 50px;
                
            }
            .jarak{
                padding-top: 20px;
			}
			
			.kategori{
				background-color: #94F3F6;
				padding-bottom: 90px;
				padding-top: 90px;
      }
      .bawah{
        background-color: #8FD3F8;
        
        padding-top: 50px;
        padding-bottom: 30px;
      }
      .bawah i , .bawah a {
        font-size: 25px;
        padding-right: 10px;
        color: #fff;
      }
      .bawah p{
        font-size: 20px;
        color: #fff;
      }
        </style>
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow-sm col">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-Blonjo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
             <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                 <div class="navbar-nav">
                     <a class="nav-link active" href="#home">Home</a>
                     <a class="nav-link active" href="#services">Product</a>
                       <a class="nav-link active" href="#kategori-submission">Services</a>
                        <a class="nav-link active" href="#contact" >Contact Us</a>
                 </div>
         </div>
        </div>

        
            @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-group">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-group">Login</a>

                        @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="btn btn-group ml-3">Register</a>
                        @endif
                    @endauth
               
            @endif
         
    </nav>
    
    <div class="konten" id="home">
        <div class="row ">
            <div class="col-md-7 p-xl-5">
                <h1 class="one">Anda mengalami</h1> <h1 class="two"> kesulitan dalam kebutuhan sehari-hari?</h1>
                 <p>Di era pandemi seperti saat ini membuat kita tidak bisa bergerak bebas kemana-mana dan mengharuskan dirumah saja. Tapi jika dirumah saja terus kita tidak bisa memenuhi kebutuhan rumah yang mengharuskan kita bepergian, oleh karena itu kami memiliki solusi terbaik untuk anda agar tetap bisa menunjang kebutuhan anda meski tidak perlu bepergian. Anda bisa pesan kebutuhan rumah lewat smartphone dan Driver kami akan mengantar sampai kerumah anda.</p>
                <a href="#" class="btn btn-secondary">Read More</a>
             </div>
             <div class="gbr col-md-4 px-md-1 p-xl-4">
                <img src="{{ ('https://image.freepik.com/free-vector/people-standing-store-queue_23-2148594615.jpg') }}" alt="yutrew" class="home-picture">
            </div>
         </div>
    </div>

    <section id="services" class="section">
        <div class="container mt-5" data-aos="fade-up">
          <h1 class="section-title text-center"> Produk <span class="text-primary">Kami</span></h1>
          <div class="row justify-content-around ">
            <div class=" col-md-6 col-lg-3 item d-flex flex-column align-items-center hias">
              <img src="{{('https://cdn.pixabay.com/photo/2013/07/12/18/21/tea-153336_960_720.png')}}" class="jarak" alt="" height="150" width="180">
              <p class="text-center">Kami menjual beberapa produk minuman yang aman untuk kesehatan dan dapat di konsumsi setiap saat.</p>
              <h3>Minuman</h3>
            </div>
            <div class=" col-md-6 col-lg-3 item d-flex flex-column align-items-center hias">
              <img src="{{('https://cdn.pixabay.com/photo/2013/07/13/09/36/pizza-155771_960_720.png')}}" class="jarak" alt=""  height="150" width="180">
              <p class="text-center">kami juga menjual makanan yang dapat di konsumsi secara mudah dan dapat dijamin kehigenisannya.</p>
              <h3 class="mt-4">Makanan</h3>

            </div>
            <div class=" col-md-6 col-lg-3 item d-flex flex-column align-items-center hias">
              <img src="{{('https://cdn.pixabay.com/photo/2013/07/13/01/22/vegetables-155616_960_720.png')}}" class="jarak" alt="" height="150" width="180">
              <p class="text-center">Sayuran yang dijual di toko kami dijamin langsung dari petani dan dikemas kembali oleh tim kami.</p>
              <h3 class="mt-4">Sayuran</h3>

            </div>
          </div>
        </div>
      </section>

      <section class="kategori" id="kategori-submission">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<div class="section-title mb-4 pb-2">
							<h1 class="heading mb-3 text-codepolitan" data-aos="fade-up" data-aos-delay="250"><span class="text-primary">Pelayanan</span> Kami</h1>
						</div>
					</div><!--end col-->
				</div><!--end row-->

				<div class="row">
					<div class="col-12 col-md-6">
						<div class="sticky-bar position-sticky" data-aos="fade-right" data-aos-delay="260">
							<img src={{('https://image.freepik.com/free-vector/delivery-staff-ride-motorcycles-shopping-concept_1150-34879.jpg')}} class="img-fluid img-about pb-3 mx-auto d-block" alt="">
						</div>
					</div>
					<div class="col-12 col-md-6">
						
						<div class="animate__fadeInUp masi media key-feature align-items-center p-3 rounded shadow mb-2" data-aos="fade-up" data-aos-delay="265">
							<div class="icon text-center rounded-circle mr-3">
							</div>
							<div class="media-body">
								<h4 class="title mb-0" data-toggle="collapse" data-target="#collapsetwo-category" role="button">Lokasi</h4>
								<p id="collapsetwo-category" class="collapse">Lokasi kami untuk saat ini baru tersedia di wilayah Kota-kota besar di Indonesia dan lokasinya berada di tengah perkotaan</p>
							</div>
						</div>
						<div class="animate__fadeInUp masi media key-feature align-items-center p-3 rounded shadow mb-2" data-aos="fade-up" data-aos-delay="270">
							<div class="icon text-center rounded-circle mr-3">
							</div>
							<div class="media-body">
								<h4 class="title mb-0" data-toggle="collapse" data-target="#collapsethree-category" role="button">Jangkauan</h4>
								<p id="collapsethree-category" class="collapse">Jangkauan kami adalah tujuan yang lingkupnya sekitar perkotaan, untuk wilayah pelosok kami belum menjangkaunya. Ini akan menjadi Pr bagi kami</p>
							</div>
						</div>
						<div class="animate__fadeInUp masi media key-feature align-items-center p-3 rounded shadow mb-2" data-aos="fade-up" data-aos-delay="275">
							<div class="icon text-center rounded-circle mr-3">
							</div>
							<div class="media-body">
								<h4 class="title mb-0" data-toggle="collapse" data-target="#collapsefour-category" role="button">Driver</h4>
								<p id="collapsefour-category" class="collapse">Driver kami sangat ramah dan kompeten dalam mengantar produk agar sampai ke tangan konsumen.</p>
							</div>
						</div>
						<div class="animate__fadeInUp masi media key-feature align-items-center p-3 rounded shadow mb-2" data-aos="fade-up" data-aos-delay="280">
							<div class="icon text-center rounded-circle mr-3">
							</div>
							<div class="media-body">
								<h4 class="title mb-0" data-toggle="collapse" data-target="#collapsefive-category" role="button">Member Card</h4>
								<p id="collapsefive-category" class="collapse">Untuk konsumen yang memiliki kartu member akan mendapatkan promo menarik dari toko kami</p>
							</div>
					</div>
				</div><!--end row-->
			</div><!--end container-->
		</section>
    
    <section class="bawah" id="contact">
    <h1 class="section-title text-center"> Hubungi <span class="text-primary">Kami</span></h1>
          <div class="row">
            <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email anda">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kritik dan Saran</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-secondary">Submit</button>
              </div>
            </div>
            <div class="col-md-4">
                <p><i class="bi bi-geo-alt"></i> Kudus, Indonesia</p>
                <p><i class="bi bi-telephone-fill"></i> +6287832072104</p>
                <div class="sosmed-link">
                  <a href="https://www.instagram.com/adib_ardnt/"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-twitter"></i></a>
            </div>
          </div>
        </div>
      </section>
    <!-- </div> -->
   
    </body>
</html>
