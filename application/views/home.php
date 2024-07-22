<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Amanah Mart</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="<?php echo base_url('assets_home/images/logo-app.png');?>" rel="icon">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_home/css/vendor.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_home/style.css');?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  </head>
  <body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <defs>
        <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
          <path fill="currentColor" d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
          <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
          <path fill="currentColor" d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
          <path fill="currentColor" d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
          <path fill="currentColor" d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
          <path fill="currentColor" d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
          <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
          <path fill="currentColor" d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
          <path fill="currentColor" d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
          <path fill="currentColor" d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
          <path fill="currentColor" d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
          <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
          <path fill="currentColor" d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
          <path fill="currentColor" d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z"/>
        </symbol>
      </defs>
    </svg>

    <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div>
    
    <header>
      <div class="container-fluid">
        <div class="row py-3 border-bottom">
          
          <div class="col-sm-4 col-lg-3 text-center text-sm-start">
            <div class="main-logo">
              <a href="index.html">
                <img src="<?php echo base_url('assets_home/images/logo-product.png');?>" alt="logo" class="img-fluid" width="241" height="54">
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
            <div class="search-bar row bg-light p-2 my-2 rounded-4">
              <div class="col-md-4 d-none d-md-block">
                
                <select class="form-select border-0 bg-transparent">
                  <option>All Categories</option>
                  <?php  foreach($kategori as $kat){?>
                  <option><?php echo $kat->namaKategori; ?></option>
                  <?php } ?>
                </select>
                
              </div>
              <div class="col-11 col-md-7">
                <form id="search-form" class="text-center" action="index.html" method="post">
                  <input type="text" class="form-control border-0 bg-transparent" placeholder="What are you looking for?" />
                </form>
              </div>
              <div class="col-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/></svg>
              </div>
            </div>
          </div>
          
          <div class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
            <div class="support-box text-end d-none d-xl-block">
              <span class="fs-6 text-muted">For Support?</span>
              <h5 class="mb-0">+62 813-2953-4184</h5>
            </div>

            <ul class="d-flex justify-content-end list-unstyled m-0">
              <li>
                <a href="#" class="rounded-circle bg-light p-2 mx-1">
                  <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#user"></use></svg>
                </a>
              </li>
              <li>
                <a href="#" class="rounded-circle bg-light p-2 mx-1">
                  <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#heart"></use></svg>
                </a>
              </li>
            </ul>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row py-3">
          <div class="d-flex  justify-content-center justify-content-sm-between align-items-center">
            <nav class="main-menu d-flex navbar navbar-expand-lg">

              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header justify-content-center">
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
              
                  <select class="filter-categories border-0 mb-0 me-5">
                  <option>All Categories</option>
                  <?php  foreach($kategori as $kat){?>
                  <option><?php echo $kat->namaKategori; ?></option>
                  <?php } ?>
                  </select>
              
                  <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">
                    <li class="nav-item active">
                      <a href="#new" class="nav-link">New Arrived</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="#product" class="nav-link">Our Products</a>
                    </li>
                    <li class="nav-item">
                      <a href="#about" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="#sale" class="nav-link">Sale</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    
    <section class="py-3" style="background-image: url('<?php echo base_url('assets_home/images/background-pattern.jpg');?>');background-repeat: no-repeat;background-size: cover;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="banner-blocks">
            
              <div class="banner-ad large bg-info block-1">

                <div class="swiper main-swiper">
                  <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                      <div class="row banner-content p-5">
                        <div class="content-wrapper col-md-7">
                          <div class="categories my-3">100% Pure Cane Sugar</div>
                          <h3 class="display-4">Gulaku Yellow Cane Sugar</h3>
                          <p>Gulaku Yellow Cane Granulated Sugar 1 kg is granulated sugar produced from natural sugar cane molasses with a higher molasses content to produce a natural caramel aroma.</p>
                          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop Now</a>
                        </div>
                        <div class="img-wrapper col-md-5">
                          <img src="<?php echo base_url('assets_home/images/product-thumb-1.png');?>" class="img-fluid">
                        </div>
                      </div>
                    </div>
                    
                    <div class="swiper-slide">
                      <div class="row banner-content p-5">
                        <div class="content-wrapper col-md-7">
                          <div class="categories mb-3 pb-3">100% Cholesterol Free</div>
                          <h3 class="banner-title">Bimoli Cooking Oil Pouch 1 L</h3>
                          <p>Bimoli Cooking Oil Pouch 1 L is cooking oil made from selected palm kernels which are processed using the Multi Process Purification (PMP) stage which has six processing stages, able to retain substances that are beneficial to health so as to produce high quality cooking oil.</p>
                          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop Collection</a>
                        </div>
                        <div class="img-wrapper col-md-5">
                          <img src="<?php echo base_url('assets_home/images/product-thumb-3.png');?>" class="img-fluid">
                        </div>
                      </div>
                    </div>
                    
                    <div class="swiper-slide">
                      <div class="row banner-content p-5">
                        <div class="content-wrapper col-md-7">
                          <div class="categories mb-3 pb-3">100% Trusted Agent</div>
                          <h3 class="banner-title">LPG Gas 3 Kg</h3>
                          <p>Amanah Mart is the official agent for 3 Kg LPG Gas, the price is guaranteed to be much cheaper.</p>
                          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop Collection</a>
                        </div>
                        <div class="img-wrapper col-md-5">
                          <img src="<?php echo base_url('assets_home/images/product-thumb-2.png');?>" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="swiper-pagination"></div>

                </div>
              </div>
              
              <div class="banner-ad bg-success-subtle block-2" style="background:url('<?php echo base_url('assets_home/images/ad-image-1.png');?>') no-repeat;background-position: right bottom">
                <div class="row banner-content p-5">

                  <div class="content-wrapper col-md-7">
                    <div class="categories sale mb-3 pb-3">20% off</div>
                    <h3 class="banner-title">Kitchen Spices & Food</h3>
                    <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg width="24" height="24"><use xlink:href="#arrow-right"></use></svg></a>
                  </div>

                </div>
              </div>

              <div class="banner-ad bg-danger block-3" style="background:url('<?php echo base_url('assets_home/images/ad-image-2.png');?>') no-repeat;background-position: right bottom">
                <div class="row banner-content p-5">

                  <div class="content-wrapper col-md-7">
                    <div class="categories sale mb-3 pb-3">15% off</div>
                    <h3 class="item-title">Snacks</h3>
                    <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg width="24" height="24"><use xlink:href="#arrow-right"></use></svg></a>
                  </div>

                </div>
              </div>

            </div>
            <!-- / Banner Blocks -->
              
          </div>
        </div>
      </div>
    </section>

    <section id="new" class="py-5 overflow-hidden">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="section-header d-flex flex-wrap flex-wrap justify-content-between mb-5">
              
              <h2 class="section-title">Newly Arrived Brands</h2>

              <div class="d-flex align-items-center">
                <a href="#" class="btn-link text-decoration-none">View All Categories →</a>
                <div class="swiper-buttons">
                  <button class="swiper-prev brand-carousel-prev btn btn-yellow">❮</button>
                  <button class="swiper-next brand-carousel-next btn btn-yellow">❯</button>
                </div>  
              </div>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="brand-carousel swiper">
              <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                  <div class="card mb-3 p-3 rounded-4 shadow border-0">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="<?php echo base_url('assets_home/images/product-thumb-4.png');?>" class="img-fluid rounded" alt="Card title">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body py-0">
                          <p class="text-muted mb-0">Instant Noodles</p>
                          <h5 class="card-title">Indomie Spicy Rawon Flavor</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card mb-3 p-3 rounded-4 shadow border-0">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="<?php echo base_url('assets_home/images/product-thumb-5.png');?>" class="img-fluid rounded" alt="Card title">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body py-0">
                          <p class="text-muted mb-0">Yogurt</p>
                          <h5 class="card-title">Cimory Yogurt Squeeze</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card mb-3 p-3 rounded-4 shadow border-0">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="<?php echo base_url('assets_home/images/product-thumb-6.png');?>" class="img-fluid rounded" alt="Card title">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body py-0">
                          <p class="text-muted mb-0">Mineral Water</p>
                          <h5 class="card-title">Cheers Healthy Drinking Water</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card mb-3 p-3 rounded-4 shadow border-0">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="<?php echo base_url('assets_home/images/product-thumb-7.png');?>" class="img-fluid rounded" alt="Card title">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body py-0">
                          <p class="text-muted mb-0">Fast Food</p>
                          <h5 class="card-title">Kanzler Chicken Nugget Crispy</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card mb-3 p-3 rounded-4 shadow border-0">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="<?php echo base_url('assets_home/images/product-thumb-8.png');?>" class="img-fluid rounded" alt="Card title">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body py-0">
                          <p class="text-muted mb-0">Fast Food</p>
                          <h5 class="card-title">ABC Sardines in Chili Sauce</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card mb-3 p-3 rounded-4 shadow border-0">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="<?php echo base_url('assets_home/images/product-thumb-9.png');?>" class="img-fluid rounded" alt="Card title">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body py-0">
                          <p class="text-muted mb-0">Detergent</p>
                          <h5 class="card-title">Daia Detergent Floral Blossom</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="product" class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bootstrap-tabs product-tabs">
                        <div class="tabs-header d-flex justify-content-between border-bottom my-5">
                            <h3>Our Products</h3>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a href="#" class="nav-link text-uppercase fs-6 active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all">All</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                                <div class="product-grid d-flex flex-wrap">
                                    <?php foreach($barang as $val){ ?>
                                        <div class="product-item col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                                            <div class="card">
                                                <span class="badge bg-success position-absolute m-3">-30%</span>
                                                <a href="#" class="btn-wishlist">
                                                    <svg width="24" height="24">
                                                        <use xlink:href="#heart"></use>
                                                    </svg>
                                                </a>
                                                <figure>
                                                    <a href="#" title="Product Title">
                                                        <img src="<?php echo base_url('assets/product-image/'.$val->gambarBarang); ?>" class="tab-image">
                                                    </a>
                                                </figure>
                                                <div class="card-body">
                                                    <h3><?php echo $val->namaBarang; ?></h3>
                                                    <span class="qty"><?php echo $val->stokBarang; ?> items</span>
                                                    <span class="rating"><svg width="24" height="24" class="text-primary"></svg></span>
                                                    <span class="price">Rp <?php echo $val->hargaJual; ?></span>
                                                    <br>
                                                    <div class="d-flex align-items-center justify-content-between mt-2">
                                                        <a href="https://wa.me/6281329534184?text=Halo%20Admin%20Amanah%20Mart" class="nav-link">
                                                            <img src="<?php echo base_url('assets_home/images/whatsapp.png'); ?>" width="25" height="25"> Contact us
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="sale" class="py-5">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-6">
            <div class="banner-ad bg-danger mb-3" style="background: url('<?php echo base_url('assets_home/images/ad-image-3.png');?>');background-repeat: no-repeat;background-position: right bottom;">
              <div class="banner-content p-5">

                <div class="categories text-primary fs-3 fw-bold">Upto 25% Off</div>
                <h3 class="banner-title">Eid Hamper Box</h3>
                <p>Box contains 5 assorted Eid cakes.</p>
                <a href="#" class="btn btn-dark text-uppercase">Show Now</a>

              </div>
            
            </div>
          </div>
          <div class="col-md-6">
            <div class="banner-ad bg-info" style="background: url('<?php echo base_url('assets_home/images/ad-image-4.png');?>');background-repeat: no-repeat;background-position: right bottom;">
              <div class="banner-content p-5">

                <div class="categories text-primary fs-3 fw-bold">Upto 25% Off</div>
                <h3 class="banner-title">All Le Minarele Products</h3>
                <p>Contains natural minerals that are good for your body.</p>
                <a href="#" class="btn btn-dark text-uppercase">Show Now</a>

              </div>
            
            </div>
          </div>
             
        </div>
      </div>
    </section>

    <section id="about" class="py-5">
      <div class="container-fluid">
        <div class="bg-secondary py-5 my-5 rounded-5" style="background: url('<?php echo base_url('assets_home/images/bg-leaves-img-pattern.png');?>') no-repeat;">
          <div class="row banner-content p-5">
            <div class="content-wrapper col-md-7">
              <div class="categories my-3">About Us</div>
                <h3 class="display-4">Amanah Mart</h3>
                  <p>Amanah Mart is a wholesale store dedicated to providing quality products at affordable wholesale prices. We are committed to providing the best service and establishing good relationships with customers and the surrounding community. By using modern technology, we ensure an easy and efficient shopping process. Amanah Mart, the right choice for safe and reliable wholesale shopping.</p>
                  <a href="https://maps.app.goo.gl/t1gBpL8uvsmqxRxn6?g_st=iw" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Our Location</a>
              </div>
              <div class="img-wrapper col-md-5">
                <img src="<?php echo base_url('assets_home/images/aboutus.png');?>" width="600" height="452" class="img-fluid">
              </div>
          </div>
        </div>
      </div>
    </section>

    <section id="blog" class="py-5">
      <div class="container-fluid">
        <div class="row">
          <div class="section-header d-flex align-items-center justify-content-between my-5">
            <h2 class="section-title">Our Recent Blog</h2>
            <div class="btn-wrap align-right">
              <a href="#" class="d-flex align-items-center nav-link">Read All Articles <svg width="24" height="24"><use xlink:href="#arrow-right"></use></svg></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect">
                <a href="#">
                  <img src="<?php echo base_url('assets_home/images/post-thumb-1.png');?>" alt="post" class="card-img-top">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>18 Jul 2024</div>
                  <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>health</div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none">Cooking Oil: A Necessity for Cooking</a>
                  </h3>
                  <p>Cooking oils, such as palm, coconut, and corn oil, are used in a variety of cooking techniques. Wise use and proper storage can help maintain health by avoiding the risks of oils that are used repeatedly, because it can increase the risk of heart disease and cancer.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect">
                <a href="#">
                  <img src="<?php echo base_url('assets_home/images/post-thumb-2.png');?>" alt="post" class="card-img-top">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>22 Jul 2022</div>
                  <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>trending</div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none">Rice: Main Source of Carbohydrates</a>
                  </h3>
                  <p>Rice is a staple food which is the main source of energy. Different types of rice, such as white, red, and black rice, offer different nutritional benefits. Good storage is important to maintain quality and availability.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post-item card border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect">
                <a href="#">
                  <img src="<?php echo base_url('assets_home/images/post-thumb-3.png');?>" alt="post" class="card-img-top">
                </a>
              </div>
              <div class="card-body">
                <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                  <div class="meta-date"><svg width="16" height="16"><use xlink:href="#calendar"></use></svg>28 Jul 2022</div>
                  <div class="meta-categories"><svg width="16" height="16"><use xlink:href="#category"></use></svg>health</div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <a href="#" class="text-decoration-none">Sugar: Energy Source and Sweetener</a>
                  </h3>
                  <p>Sugar is an important sweetener in food and drinks, but it must be used with caution to prevent health problems such as obesity and diabetes. White sugar, brown sugar and granulated sugar have different uses and characteristics in everyday cooking.</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container-fluid">
      <h2 class="my-5">People are also looking for</h2>
      <a href="#" class="btn btn-warning me-2 mb-2">Rice</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Cooking Oil</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Granulated Sugar</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Chicken Eggs</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Chicken Meat</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Beef</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Salt</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Wheat Flour</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Soy Sauce</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Chili Sauce</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Powdered Milk</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Instant Noodles</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Ground Coffee</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Tea Bags</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Canned Fish</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Corned Beef</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Instant Porridge</a>
      <a href="#" class="btn btn-warning me-2 mb-2">Sweetened Condensed Milk</a>
      </div>
    </section>

    <section class="py-5">
    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-5">
        <div class="col">
          <div class="mb-3">
            <div class="row">
              <div class="col-md-2 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M21.5 15a3 3 0 0 0-1.9-2.78l1.87-7a1 1 0 0 0-.18-.87A1 1 0 0 0 20.5 4H6.8l-.33-1.26A1 1 0 0 0 5.5 2h-2v2h1.23l2.48 9.26a1 1 0 0 0 1 .74H18.5a1 1 0 0 1 0 2h-13a1 1 0 0 0 0 2h1.18a3 3 0 1 0 5.64 0h2.36a3 3 0 1 0 5.82 1a2.94 2.94 0 0 0-.4-1.47A3 3 0 0 0 21.5 15Zm-3.91-3H9L7.34 6H19.2ZM9.5 20a1 1 0 1 1 1-1a1 1 0 0 1-1 1Zm8 0a1 1 0 1 1 1-1a1 1 0 0 1-1 1Z"/></svg>
              </div>
              <div class="col-md-10">
                <div class="p-0">
                  <h5>Free delivery</h5>
                  <p class="card-text">Provide delivery with a minimum purchase.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <div class="row">
              <div class="col-md-2 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M19.63 3.65a1 1 0 0 0-.84-.2a8 8 0 0 1-6.22-1.27a1 1 0 0 0-1.14 0a8 8 0 0 1-6.22 1.27a1 1 0 0 0-.84.2a1 1 0 0 0-.37.78v7.45a9 9 0 0 0 3.77 7.33l3.65 2.6a1 1 0 0 0 1.16 0l3.65-2.6A9 9 0 0 0 20 11.88V4.43a1 1 0 0 0-.37-.78ZM18 11.88a7 7 0 0 1-2.93 5.7L12 19.77l-3.07-2.19A7 7 0 0 1 6 11.88v-6.3a10 10 0 0 0 6-1.39a10 10 0 0 0 6 1.39Zm-4.46-2.29l-2.69 2.7l-.89-.9a1 1 0 0 0-1.42 1.42l1.6 1.6a1 1 0 0 0 1.42 0L15 11a1 1 0 0 0-1.42-1.42Z"/></svg>
              </div>
              <div class="col-md-10">
                <div class="p-0">
                  <h5>100% secure payment</h5>
                  <p class="card-text">Payment can be made directly.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <div class="row">
              <div class="col-md-2 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M22 5H2a1 1 0 0 0-1 1v4a3 3 0 0 0 2 2.82V22a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-9.18A3 3 0 0 0 23 10V6a1 1 0 0 0-1-1Zm-7 2h2v3a1 1 0 0 1-2 0Zm-4 0h2v3a1 1 0 0 1-2 0ZM7 7h2v3a1 1 0 0 1-2 0Zm-3 4a1 1 0 0 1-1-1V7h2v3a1 1 0 0 1-1 1Zm10 10h-4v-2a2 2 0 0 1 4 0Zm5 0h-3v-2a4 4 0 0 0-8 0v2H5v-8.18a3.17 3.17 0 0 0 1-.6a3 3 0 0 0 4 0a3 3 0 0 0 4 0a3 3 0 0 0 4 0a3.17 3.17 0 0 0 1 .6Zm2-11a1 1 0 0 1-2 0V7h2ZM4.3 3H20a1 1 0 0 0 0-2H4.3a1 1 0 0 0 0 2Z"/></svg>
              </div>
              <div class="col-md-10">
                <div class="p-0">
                  <h5>Quality guarantee</h5>
                  <p class="card-text">We sell products whose quality is guaranteed.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <div class="row">
              <div class="col-md-2 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M12 8.35a3.07 3.07 0 0 0-3.54.53a3 3 0 0 0 0 4.24L11.29 16a1 1 0 0 0 1.42 0l2.83-2.83a3 3 0 0 0 0-4.24A3.07 3.07 0 0 0 12 8.35Zm2.12 3.36L12 13.83l-2.12-2.12a1 1 0 0 1 0-1.42a1 1 0 0 1 1.41 0a1 1 0 0 0 1.42 0a1 1 0 0 1 1.41 0a1 1 0 0 1 0 1.42ZM12 2A10 10 0 0 0 2 12a9.89 9.89 0 0 0 2.26 6.33l-2 2a1 1 0 0 0-.21 1.09A1 1 0 0 0 3 22h9a10 10 0 0 0 0-20Zm0 18H5.41l.94-.94a1 1 0 0 0 0-1.42a1 1 0 0 0-1.41 0l-1 1a8.09 8.09 0 0 1-1.75-3.18a1 1 0 0 0-.19-.36A8 8 0 1 1 12 20Zm7.71-4.29a1 1 0 0 0-1.42 0l-.64.65a1 1 0 0 0 0 1.41a1 1 0 0 0 1.42 0l.64-.64a1 1 0 0 0 0-1.42ZM18 10a1 1 0 0 0 1-1V7a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1Zm3 2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm-3 3a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1Zm-7-9a1 1 0 0 0 1-1V5a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1Zm-7 5H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm1.29-7.71a1 1 0 0 0 1.42 0l.64-.64a1 1 0 0 0 0-1.42a1 1 0 0 0-1.42 0l-.64.64a1 1 0 0 0 0 1.42Z"/></svg>
              </div>
              <div class="col-md-10">
                <div class="p-0">
                  <h5>Customer support</h5>
                  <p class="card-text">Your satisfaction is our priority.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <div class="row">
              <div class="col-md-2 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M20 2H4a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h7v2H8a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2h-3v-2h7a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3ZM4 4h16a1 1 0 0 1 1 1v4H3V5a1 1 0 0 1 1-1Zm16 14H4a1 1 0 0 1-1-1V11h18v6a1 1 0 0 1-1 1Z"/></svg>
              </div>
              <div class="col-md-10">
                <div class="p-0">
                  <h5>Delivery on time</h5>
                  <p class="card-text">Delivery on time according to schedule.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <footer class="py-5">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-menu">
              <img src="<?php echo base_url('assets_home/images/logo-product.png');?>" alt="logo" width="241" height="54">
              <div class="social-links mt-5">
                <ul class="d-flex list-unstyled gap-2">
                  <li>
                    <a href="#" class="btn btn-outline-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M15.12 5.32H17V2.14A26.11 26.11 0 0 0 14.26 2c-2.72 0-4.58 1.66-4.58 4.7v2.62H6.61v3.56h3.07V22h3.68v-9.12h3.06l.46-3.56h-3.52V7.05c0-1.05.28-1.73 1.76-1.73Z"/></svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-outline-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M22.991 3.95a1 1 0 0 0-1.51-.86a7.48 7.48 0 0 1-1.874.794a5.152 5.152 0 0 0-3.374-1.242a5.232 5.232 0 0 0-5.223 5.063a11.032 11.032 0 0 1-6.814-3.924a1.012 1.012 0 0 0-.857-.365a.999.999 0 0 0-.785.5a5.276 5.276 0 0 0-.242 4.769l-.002.001a1.041 1.041 0 0 0-.496.89a3.042 3.042 0 0 0 .027.439a5.185 5.185 0 0 0 1.568 3.312a.998.998 0 0 0-.066.77a5.204 5.204 0 0 0 2.362 2.922a7.465 7.465 0 0 1-3.59.448A1 1 0 0 0 1.45 19.3a12.942 12.942 0 0 0 7.01 2.061a12.788 12.788 0 0 0 12.465-9.363a12.822 12.822 0 0 0 .535-3.646l-.001-.2a5.77 5.77 0 0 0 1.532-4.202Zm-3.306 3.212a.995.995 0 0 0-.234.702c.01.165.009.331.009.488a10.824 10.824 0 0 1-.454 3.08a10.685 10.685 0 0 1-10.546 7.93a10.938 10.938 0 0 1-2.55-.301a9.48 9.48 0 0 0 2.942-1.564a1 1 0 0 0-.602-1.786a3.208 3.208 0 0 1-2.214-.935q.224-.042.445-.105a1 1 0 0 0-.08-1.943a3.198 3.198 0 0 1-2.25-1.726a5.3 5.3 0 0 0 .545.046a1.02 1.02 0 0 0 .984-.696a1 1 0 0 0-.4-1.137a3.196 3.196 0 0 1-1.425-2.673c0-.066.002-.133.006-.198a13.014 13.014 0 0 0 8.21 3.48a1.02 1.02 0 0 0 .817-.36a1 1 0 0 0 .206-.867a3.157 3.157 0 0 1-.087-.729a3.23 3.23 0 0 1 3.226-3.226a3.184 3.184 0 0 1 2.345 1.02a.993.993 0 0 0 .921.298a9.27 9.27 0 0 0 1.212-.322a6.681 6.681 0 0 1-1.026 1.524Z"/></svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-outline-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M23 9.71a8.5 8.5 0 0 0-.91-4.13a2.92 2.92 0 0 0-1.72-1A78.36 78.36 0 0 0 12 4.27a78.45 78.45 0 0 0-8.34.3a2.87 2.87 0 0 0-1.46.74c-.9.83-1 2.25-1.1 3.45a48.29 48.29 0 0 0 0 6.48a9.55 9.55 0 0 0 .3 2a3.14 3.14 0 0 0 .71 1.36a2.86 2.86 0 0 0 1.49.78a45.18 45.18 0 0 0 6.5.33c3.5.05 6.57 0 10.2-.28a2.88 2.88 0 0 0 1.53-.78a2.49 2.49 0 0 0 .61-1a10.58 10.58 0 0 0 .52-3.4c.04-.56.04-3.94.04-4.54ZM9.74 14.85V8.66l5.92 3.11c-1.66.92-3.85 1.96-5.92 3.08Z"/></svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-outline-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2Zm4.6 2.42a7.59 7.59 0 0 0-.46-2.43a4.94 4.94 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.78 4.78 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.78 4.78 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.59 7.59 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12ZM20.14 16a5.61 5.61 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.19 3.19 0 0 1-1.15.75a5.61 5.61 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.73 5.73 0 0 1-1.94-.3a3.27 3.27 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.54 5.54 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.54 5.54 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.14 3.14 0 0 1 1.1-.8A5.73 5.73 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.61 5.61 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.06 3.06 0 0 1 .75 1.1a5.61 5.61 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4ZM12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87Zm0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33Z"/></svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-outline-light">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M1.04 17.52q.1-.16.32-.02a21.308 21.308 0 0 0 10.88 2.9a21.524 21.524 0 0 0 7.74-1.46q.1-.04.29-.12t.27-.12a.356.356 0 0 1 .47.12q.17.24-.11.44q-.36.26-.92.6a14.99 14.99 0 0 1-3.84 1.58A16.175 16.175 0 0 1 12 22a16.017 16.017 0 0 1-5.9-1.09a16.246 16.246 0 0 1-4.98-3.07a.273.273 0 0 1-.12-.2a.215.215 0 0 1 .04-.12Zm6.02-5.7a4.036 4.036 0 0 1 .68-2.36A4.197 4.197 0 0 1 9.6 7.98a10.063 10.063 0 0 1 2.66-.66q.54-.06 1.76-.16v-.34a3.562 3.562 0 0 0-.28-1.72a1.5 1.5 0 0 0-1.32-.6h-.16a2.189 2.189 0 0 0-1.14.42a1.64 1.64 0 0 0-.62 1a.508.508 0 0 1-.4.46L7.8 6.1q-.34-.08-.34-.36a.587.587 0 0 1 .02-.14a3.834 3.834 0 0 1 1.67-2.64A6.268 6.268 0 0 1 12.26 2h.5a5.054 5.054 0 0 1 3.56 1.18a3.81 3.81 0 0 1 .37.43a3.875 3.875 0 0 1 .27.41a2.098 2.098 0 0 1 .18.52q.08.34.12.47a2.856 2.856 0 0 1 .06.56q.02.43.02.51v4.84a2.868 2.868 0 0 0 .15.95a2.475 2.475 0 0 0 .29.62q.14.19.46.61a.599.599 0 0 1 .12.32a.346.346 0 0 1-.16.28q-1.66 1.44-1.8 1.56a.557.557 0 0 1-.58.04q-.28-.24-.49-.46t-.3-.32a4.466 4.466 0 0 1-.29-.39q-.2-.29-.28-.39a4.91 4.91 0 0 1-2.2 1.52a6.038 6.038 0 0 1-1.68.2a3.505 3.505 0 0 1-2.53-.95a3.553 3.553 0 0 1-.99-2.69Zm3.44-.4a1.895 1.895 0 0 0 .39 1.25a1.294 1.294 0 0 0 1.05.47a1.022 1.022 0 0 0 .17-.02a1.022 1.022 0 0 1 .15-.02a2.033 2.033 0 0 0 1.3-1.08a3.13 3.13 0 0 0 .33-.83a3.8 3.8 0 0 0 .12-.73q.01-.28.01-.92v-.5a7.287 7.287 0 0 0-1.76.16a2.144 2.144 0 0 0-1.76 2.22Zm8.4 6.44a.626.626 0 0 1 .12-.16a3.14 3.14 0 0 1 .96-.46a6.52 6.52 0 0 1 1.48-.22a1.195 1.195 0 0 1 .38.02q.9.08 1.08.3a.655.655 0 0 1 .08.36v.14a4.56 4.56 0 0 1-.38 1.65a3.84 3.84 0 0 1-1.06 1.53a.302.302 0 0 1-.18.08a.177.177 0 0 1-.08-.02q-.12-.06-.06-.22a7.632 7.632 0 0 0 .74-2.42a.513.513 0 0 0-.08-.32q-.2-.24-1.12-.24q-.34 0-.8.04q-.5.06-.92.12a.232.232 0 0 1-.16-.04a.065.065 0 0 1-.02-.08a.153.153 0 0 1 .02-.06Z"/></svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="footer-menu">
              <p>Amanah Mart is a one-stop shop that provides various daily needs with wholesale and retail services. With a commitment to providing cheap and affordable prices, Amanah Mart offers quality products ranging from food ingredients, household equipment, to electronic goods. This store is known for its friendly and efficient service, making it a top choice for consumers looking for convenience and competitive prices in shopping.</p>
            </div>
          </div>
          
          <div class="col-md-2 col-sm-6">
            <div class="footer-menu">
              <h5 class="widget-title">Our Address</h5>
              <p>Bratasena Street, Jagan RT 23 RW 08 Kroyo, Karangmalang, Sragen, Jawa Tengah</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-menu">
              <h5 class="widget-title">Contact Us</h5>
              <p>Contact us Contact us for further information.</p>
              <a href="#" class="nav-link"><img src="<?php echo base_url('assets_home/images/whatsapp.png');?>" width="25" height="25"> +62 813-2953-4184</a>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
    <div id="footer-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 copyright">
            <p>© 2024 Amanah Mart. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url('assets_home/js/jquery-1.11.0.min.js');?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets_home/js/plugins.js');?>"></script>
    <script src="<?php echo base_url('assets_home/js/script.js');?>"></script>
  </body>
</html>