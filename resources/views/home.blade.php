
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Blonjo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

		<!--Scripts-->
		<script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <!-- CSS only -->
       
        <style>

        </style>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    </head>
<body class="container">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow-sm col">
                <div class="container-lg">
                    <a class="navbar-brand" href="{{ url('/') }}">E-blonjo</a>
                    <div class="">
                        <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Mau Belanja Apa Hari Ini?" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">cari <i class="bi bi-search"></i></button>
                        </form>
                    </div>  
                        
                            <li class="nav-item dropdown">
                             <div class="row">
                                <h3 class="mr-4"><i class="bi bi-cart-fill"></i></h3>
                                <h3 id="notif" class="mr-4"  data-toggle="" role="button"><i class="bi bi-bell-fill"></i></h3>
                                <p id="notifikasi" aria-labelledby="notif" class="collapse">fghfgfgfg</p>
                                <h3><i class="bi bi-person-circle"></i></h3>
                                    
                                    
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item"  href="#">{{ __('Profile') }}</a>
                                            <a class="dropdown-item"  href="#">{{ __('Setting') }}</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                </div>
                             </li>   
                 </div>
        </nav>
    <div class="container overflow-hidden">
    <div class="row gx-5 py-5">
        <div class="col-lg-9">
        <div class="p-3 border bg-white-q shadow-lg ">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
            </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{('https://image.freepik.com/free-photo/glass-orange-juice-person-squeezing-orange-it_181624-1070.jpg')}}" class="bg-white-q d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{('https://image.freepik.com/free-photo/vegetables-from-basket-wooden-table_155003-5607.jpg')}}" class="bg-white-q d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{('https://image.freepik.com/free-photo/healthy-hearty-salad-tuna-green-beans-tomatoes-eggs-potatoes-black-olives-close-up-bowl-table_2829-4485.jpg')}}" class="bg-white-q d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{('https://image.freepik.com/free-photo/kitchen-utensils_74190-7094.jpg')}}" class="bg-white-q d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="bi bi-arrow-left-square" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="bi bi-arrow-right-square" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </a>
            </div>
        </div>
        </div>
            <div class="col-lg-3 mt-2">
                <div class="py-4 border bg-white-q shadow-lg ">
                    <h5 class="text-center mt-lg-2 mb-5">Kategori</h5>
                    <table class="table text-center table-borderless">
                        <tbody>
                            <tr>
                                <td class="btn btn-block">Alat Masak</td>
                            </tr>
                            <tr>
                                <td class="btn btn-block">Bahan Masak</td>
                            </tr>
                            <tr>
                                <td class="btn btn-block">Cemilan</td>
                            </tr>
                            <tr>
                                <td class="btn btn-block">Rumah Tangga</td>
                            </tr>
                            <tr>
                                <td class="btn btn-block">Sayur & Buah</td>
                            </tr>
                            <tr>
                                <td class="btn btn-block">Makanan Jadi</td>
                            </tr>
                            <tr>
                                <td class="btn btn-block">Resep Masak</td>
                            </tr>
                        </tbody>
                    </table>        
                </div>
            </div>
            </div>
    </div>

    <h2 class="mb-4">Sedang Populer</h2>
        <div class="container">
        <div class="row justify-content-center">
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="btn btn-block-q p-4 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://images.pexels.com/photos/112781/pexels-photo-112781.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')}}" width="150" height="120" class="" alt="">
                <h5 class="mt-3 mr-3 text-center">Daging Sapi</h5>
            </div>
            <div class="btn btn-block-q p-4 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://images.pexels.com/photos/5907899/pexels-photo-5907899.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')}}" width="150" height="120" class="" alt="">
                <h5 class="mt-3 mr-3 text-center">Bumbu Masak</h5>
            </div>
            <div class="btn btn-block-q p-4 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/metal-press-meat-cutlets-hamburger-mold-isolated-white-background-top-view_116441-16015.jpg')}}" width="150" height="120" class="" alt="">
                <h5 class="mt-3 mr-3 text-center">Alat Masak</h5>
            </div>
            <div class="btn btn-block-q p-4 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/assortment-different-fresh-vegetables_23-2148655292.jpg')}}" width="150" height="120" class="" alt="">
                <h5 class="mt-3 mr-3 text-center">Sayuran</h5>
            </div>
            <div class="btn btn-block-q p-4 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/cosmetic-containers-with-green-herbal-leaves-white-towels-blank-label-package-branding-mock-up-moisturizing-cream-shampoo-tonic-face-body-skin-care_99272-3160.jpg')}}" width="150" height="120" class="" alt="">
                <h5 class="mt-3 mr-3 text-center">Perawatan Tubuh</h5>
            </div>
            <div class="btn btn-block-q p-4 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/banana-cupcakes-mixed-with-chocolate-chip-white-plate_1150-20921.jpg')}}" width="150" height="120" class="" alt="">
                <h5 class="mt-3 mr-3 text-center">CupCake</h5>
            </div>
            
        </div>
        </div>
        </div>

    <!---Harga barang 1-->
        <h2 class="mb-4 mt-5">Mungkin Anda Mencarinya</h2>
        <div class="container">
        <div class="row justify-content-center">
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="btn p-3 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/coffee-beans-with-props-making-coffee_1220-4536.jpg')}}" width="270" height="200" class="" alt="">
                <h5 class="mt-3 mr-3 text-left">Kopi Bubuk Muria</h5>
                <h6 class="mt-2 mr-3 p-1 text-left bg-dark">Diskon 30%</h6>
                <h5 class="mt-3 mr-3 text-left text-bold">Rp. 70.000</h5>
                <div class="text-left text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="mt-2 mr-3 p-1 w-75 text-left btn-success">
                    <h5 class="mt-2">Beli Sekarang</h5>
                </div>
            </div>
            <div class="btn p-3 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/glass-jar-pure-honey-with-honey-dipper-isolated-white-background_252965-49.jpg')}}" width="270" height="200" class="" alt="">
                <h5 class="mt-3 mr-3 text-left">Madu Tawon Murni</h5>
                <h6 class="mt-2 mr-3 p-1 text-left bg-dark">Diskon 20%</h6>
                <h5 class="mt-3 mr-3 text-left text-bold">Rp. 67.000</h5>
                <div class="text-left text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="mt-2 mr-3 p-1 w-75 text-left btn-success">
                    <h5 class="mt-2">Beli Sekarang</h5>
                </div>
            </div>
            <div class="btn p-3 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/ceramic-tableware-collection_23-2148861800.jpg')}}" width="270" height="200" class="" alt="">
                <h5 class="mt-3 mr-3 text-left">Gelas Kaca & Keramik</h5>
                <h6 class="mt-2 mr-3 p-1 text-left bg-dark">Diskon 60%</h6>
                <h5 class="mt-3 mr-3 text-left text-bold">Rp. 250.000</h5>
                <div class="text-left text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="mt-2 mr-3 p-1 w-75 text-left btn-success">
                    <h5 class="mt-2">Beli Sekarang</h5>
                </div>
            </div>
            <div class="btn p-3 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/close-up-fresh-wet-green-cabbage_1831-1499.jpg')}}" width="270" height="200" class="" alt="">
                <h5 class="mt-3 mr-3 text-left">Sayur Kol Segar</h5>
                <h6 class="mt-2 mr-3 p-1 text-left bg-dark">Diskon 5%</h6>
                <h5 class="mt-3 mr-3 text-left text-bold">Rp. 26.000</h5>
                <div class="text-left text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="mt-2 mr-3 p-1 w-75 text-left btn-success">
                    <h5 class="mt-2">Beli Sekarang</h5>
                </div>
            </div>
            </div>
        </div>
        </div>

    <!---harga barng 2-->
        <div class="container">
        <div class="row justify-content-center">
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="btn p-3 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/noodles-spicy-bowl-with-ingredients-black-cement-surface_1150-19806.jpg')}}" width="270" height="200" class="" alt="">
                <h5 class="mt-3 mr-3 text-left">Mie Jepang</h5>
                <h6 class="mt-2 mr-3 p-1 text-left bg-dark">Diskon 2%</h6>
                <h5 class="mt-3 mr-3 text-left text-bold">Rp. 20.000</h5>
                <div class="text-left text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="mt-2 mr-3 p-1 w-75 text-left btn-success">
                    <h5 class="mt-2">Beli Sekarang</h5>
                </div>
            </div>
            <div class="btn p-3 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/empty-food-plastic-container-with-lid-isolated-white_105428-1417.jpg')}}" width="270" height="200" class="" alt="">
                <h5 class="mt-3 mr-3 text-left">Tupperware</h5>
                <h6 class="mt-2 mr-3 p-1 text-left bg-dark">Diskon 40%</h6>
                <h5 class="mt-3 mr-3 text-left text-bold">Rp. 130.000</h5>
                <div class="text-left text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="mt-2 mr-3 p-1 w-75 text-left btn-success">
                    <h5 class="mt-2">Beli Sekarang</h5>
                </div>
            </div>
            <div class="btn p-3 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://image.freepik.com/free-photo/fresh-oranges-fruit-table_74190-6153.jpg')}}" width="270" height="200" class="" alt="">
                <h5 class="mt-3 mr-3 text-left">5Kg Jeruk Mandarin</h5>
                <h6 class="mt-2 mr-3 p-1 text-left bg-dark">Diskon 15%</h6>
                <h5 class="mt-3 mr-3 text-left text-bold">Rp. 70.000</h5>
                <div class="text-left text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="mt-2 mr-3 p-1 w-75 text-left btn-success">
                    <h5 class="mt-2">Beli Sekarang</h5>
                </div>
            </div>
            <div class="btn p-3 border bg-white-q shadow-lg bd-highlight ml-4">
                <img src="{{('https://i0.wp.com/sumbersehat.com/wp-content/uploads/2020/08/manfaat-sirup-parijoto.png')}}" width="270" height="200" class="" alt="">
                <h5 class="mt-3 mr-3 text-left">Sirup Parijoto khas Muria</h5>
                <h6 class="mt-2 mr-3 p-1 text-left bg-dark">Diskon 10%</h6>
                <h5 class="mt-3 mr-3 text-left text-bold">Rp. 90.000</h5>
                <div class="text-left text-warning">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="mt-2 mr-3 p-1 w-75 text-left btn-success">
                    <h5 class="mt-2">Beli Sekarang</h5>
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="container mt-6">
            <div class="row mt-5">
                <div class="col-3">
                <h5 class="text-bold text-center text-gray">E-Blonjo</h5>
                    <ul>
                        <a class="li-down mb-4" href=""><li>Tentang E-Blonjo</li></a>
                        <a class="li-down" href=""><li>Karir</li></a>
                        <a class="li-down" href=""><li>Blog</li></a>
                        <a class="li-down" href=""><li>Website</li></a>
                        <a class="li-down" href=""><li>Belanja</li></a>
                        <a class="li-down" href=""><li>Driver</li></a>
                        <a class="li-down" href=""><li>Ongkir</li></a>
                        <a class="li-down" href=""><li>Jangkauan</li></a>
                        <a class="li-down" href=""><li>Cabang</li></a>
                        <a class="li-down" href=""><li>Stok</li></a>
                    </ul>
                </div>
                <div class="col-3">
                        <h5 class="text-bold text-gray">Produk</h5>
                        <a class="li-down" href=""><li>Makanan</li></a>
                        <a class="li-down" href=""><li>Minuman</li></a>
                        <a class="li-down" href=""><li>Sayuran</li></a>

                        <h5 class="text-bold text-gray mt-4">Ikuti Kami</h5>
                        <a class="li-down" href=""><li><i class="bi bi-facebook mr-2"></i>facebook</li></a>
                        <a class="li-down" href=""><li><i class="bi bi-instagram mr-2"></i>instagram</li></a>
                        <a class="li-down" href=""><li><i class="bi bi-twitter mr-2"></i>Twitter</li></a>
                        <a class="li-down" href=""><li><i class="bi bi-linkedin mr-2"></i>Linkedln</li></a>
                </div>
                <div class="col-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1981.1495666040819!2d110.83237670058084!3d-6.7333131157184996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dbc06b60950b%3A0xab9af80f82f58cc5!2sJl.%20Raya%20Kedungsari%2C%20Sampet%2C%20Kedungsari%2C%20Kec.%20Gebog%2C%20Kabupaten%20Kudus%2C%20Jawa%20Tengah%2059333!5e0!3m2!1sid!2sid!4v1613057715718!5m2!1sid!2sid" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col align-self-center text-center mt-4 mb-5">
                    Copyright 2021 || E-Blonjo
                </div>
            </div>
        </div>
 
       

        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</body>
</html>
