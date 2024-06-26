<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>TravelIQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <!-- link relationships -->
    <link rel="stylesheet" href="../../css/styles.css" />

    <!-- Font Awesome Cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <!-- Bootrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
    <!-- Google Fonts -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  <!-- Dropdown  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="../../js/index.js"></script>
  </head>
  <body>
  <header id="Home">
    <div class="container-fluid">
        <!-- Navigation bar  -->
        <nav class="navbar navbar-expand-lg navbar-light text-light fixed-top ">
            <div class="container-fluid">
                <!-- put logo here  -->
                <a class="navbar-brand" href="#"><span class="text-warning" id="d">Travel</span><span class="iq-text">IQ</span></a>
                <!-- hamburger navbar  -->
                <button class="navbar-toggler bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- links  -->
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav d-flex flex-column flex-lg-row align-items-center mx-auto  mb-lg-0 ">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#Home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Services">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Gallery">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="customer-booking.php">Book</a>
        </li>
        <li class="nav-item d-lg-none"> <!-- Show only on smaller screens -->
            <a href="customer-Account-Information.php" class="nav-link text-warning ">Account</a>
        </li>
        <li class="nav-item d-lg-none"> <!-- Show only on smaller screens -->
            <a href="customer-overview.php" class="nav-link text-warning ">Overview</a>
        </li>
        <li class="nav-item d-lg-none"> <!-- Show only on smaller screens -->
            <a href="function-logout.php" class="nav-link text-warning ">Logout</a>
        </li>
    </ul>

  
    <!-- Move the icon to the right -->
    <ul class="navbar-nav align-items-center">
    <!-- Icon (or Account link) for larger screens -->
    <li class="nav-item d-none d-lg-block"> <!-- Show only on larger screens -->
        <div class="dropdown">
            <a class="nav-link text-warning fs-3 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi text-warning bi-person-circle "></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="customer-Account-Information.php">Profile</a></li>
                <li><a class="dropdown-item" href="customer-overview.php">Overview</a></li>
                <li><a class="dropdown-item" href="function-logout.php">Logout</a></li>
            </ul>
        </div>
    </li>
</ul>
</div>

            </div>
        </nav>
    </div>
</header>
      <!-- navbar end -->
  
    

    <!-- Carousel -->
    <div>
      <div
        id="carouselExampleCaptions"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <!-- 1st carousel item  -->
        <div class="carousel-inner">
          <div class="carousel-item active c-item vh-100">
            <img src="../../../pics/boracay.png" class="d-block w-100 c-img" />
            <div class="carousel-caption top-0 d-flex flex-column justify-content-center align-items-center">
            <p class="fs-5 mt-5 ">Don't know where to go?</p>
            <h1 class="display-6 fw-semibold text-uppercase"> 
              <span class="text-warning">Boracay</span> is just few clicks away
</h1>
              
              
              <!-- Buttons for booking -->
              <div class="slider-btn">
        
                <a href="customer-booking.php" class="btn  px-4 py-2 fs-5 mt-5 book-btn">Take me</a>
                 
                
              </div>
              <div class="carousel-caption text-uppercase bottom-0">
      <p > Scroll down to see more</p>
    </div>
            </div>
          </div>
          <div class="carousel-item c-item vh-100">
            <img src="../../../pics/palawan.png" class="d-block w-100 c-img" />
            <div class="carousel-caption top-0 d-flex flex-column justify-content-center align-items-center">
            <p class="fs-5 mt-5 ">Don't know where to go?</p>
            <h1 class="display-6 fw-semibold text-uppercase"> 
              <span class="text-warning">Palawan</span> is just few clicks away
</h1>
              <!-- Buttons for booking -->
              <div class="slider-btn">
        
        <a href="customer-booking.php" class="btn  px-4 py-2 fs-5 mt-5 book-btn">Take me</a>
         
        
      </div>
              <div class="carousel-caption text-uppercase bottom-0">
      <p > Scroll down to see more</p>
    </div>
            </div>
          </div>
          <div class="carousel-item c-item vh-100">
            <img src="../../../pics/siargao.png" class="d-block w-100 c-img" />
            <div class="carousel-caption top-0 d-flex flex-column justify-content-center align-items-center">
            <p class="fs-5 mt-5 ">Don't know where to go?</p>
            <h1 class="display-6 fw-semibold text-uppercase"> 
              <span class="text-warning">Siargao</span> is just few clicks away
</h1>
              <!-- Buttons for booking -->
              <div class="slider-btn">
        
        <a href="customer-booking.php" class="btn  px-4 py-2 fs-5 mt-5 book-btn">Take me</a>
         
        
      </div>
              <div class="carousel-caption text-uppercase bottom-0">
      <p > Scroll down to see more</p>
    </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>


    <!-- Gallery  -->
    <section class="gallery  pb-5 pt-5 " id="Gallery">
      <div class="container-sm mt-5 pb-5 gallery-bg">
        <div class="main-txt">
          <h1 class="text-center display-6 fw-bold text-capitalized h1-text">
            Popular Destinations in the <span class="ph-text">Philippines </span>
          </h1>
        </div>
        <!-- Cebu -->
        <div class="row" style="margin-top: 30px">
          <div class="col-md-4 py-3 py-md-0">
           
            <div class="card card-gal">
            <a href="customer-booking.php" style="display: block;">
              <div class="image-overlay"></div>
              
              <img src="../../../pics/Gallery/cebu.png" alt="" height="230px" />
              
              <div class="card-img-overlay card-img">
                
                <h5 class="card-title fw-semibold">Cebu</h5>
              </div>
              </a>
            </div>
          </div>
          <!-- Bohol --><div class="col-md-4 py-3 py-md-0">
  <div class="card card-gal">
    <div class="image-overlay"></div>
    <a href="customer-booking.php" style="display: block;">
      <img src="../../../pics/Gallery/bohol.png" alt="" height="230px" />
      <div class="card-img-overlay card-img">
        <h5 class="card-title fw-semibold">Bohol</h5>
      </div>
    </a>
  </div>
</div>


          <!-- Pagudpud  -->
          <div class="col-md-4 py-3 py-md-0">
            
            <div class="card card-gal">
              
              <div class="image-overlay"></div>
              <a href="customer-booking.php" style="display: block;">
              <img src="../../../pics/Gallery/pagudpud.png" alt="" height="230px" />
              
              <div class="card-img-overlay card-img">
                <h5 class="card-title fw-semibold">Pagudpud</h5>
              </div>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Vigan  -->
        <div class="row" style="margin-top: 30px">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card card-gal">
            <a href="register-page-1.php" style="display: block;">
              <div class="image-overlay"></div>
              <img src="../../../pics/Gallery/vigan.png" alt="" height="230px" />
              <div class="card-img-overlay card-img">
                <h5 class="card-title fw-semibold">Vigan</h5>
              </div>
              </a>
            </div>
          </div>
          <!-- Puerto Gallera  -->
          <div class="col-md-4 py-3 py-md-0">
            <div class="card card-gal">
            <a href="web/php/register-page-1.php" style="display: block;">
              <div class="image-overlay"></div>
              <img src="../../../pics/Gallery/puerto.png" alt="" height="230px" />
              <div class="card-img-overlay card-img">
                <h5 class="card-title fw-semibold">Puerto Gallera</h5>
              </div>
              </a>
            </div>
          </div>
          <!-- Sagada -->
          <div class="col-md-4 py-3 py-md-0">
            <div class="card card-gal">
            <a href="register-page-1.php" style="display: block;">
              <div class="image-overlay"></div>
              <img src="../../../pics/Gallery/sagada.png" alt="" height="230px" />
              <div class="card-img-overlay card-img">
                <h5 class="card-title fw-semibold">Sagada</h5>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Search  -->
  <section class="search section-padding about-us " id="search">
  <div class="container py-5 ">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading text-center mb-4">
          <h1 class="display-4 fw-bolder">Can't find your next adventure?</h1>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <form class="search-form">
          <div class="input-group input-group-sm mb-3">
            <input type="text" class="form-control form-control-sm narrower-input" placeholder="Search..." aria-label="Search" aria-describedby="button-addon2">
            <button class="btn btn-sm narrower-button" type="button" id="button-addon2">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


    <!-- Footer -->

    <footer class="footer-bg text-center">
      <!-- Grid container -->
      <div class="container p-4 pt-5">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn btn-primary btn-floating m-1 i-icons"
            style="background-color: #3b5998"
            href="#!"
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>

          <!-- Twitter -->
          <a
            class="btn btn-primary btn-floating m-1 i-icons"
            style="background-color: #55acee"
            href="#!"
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>

          <!-- Google -->
          <a
            class="btn btn-primary btn-floating m-1 i-icons"
            style="background-color: #dd4b39"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn btn-primary btn-floating m-1 i-icons"
            style="background-color: #ac2bac"
            href="#!"
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>
        </section>

        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            distinctio earum repellat quaerat voluptatibus placeat nam, commodi
            optio pariatur est quia magnam eum harum corrupti dicta, aliquam
            sequi voluptate quas.
          </p>
        </section>
        <!-- Section: Text -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2024 Copyright:
        <a class="text-dark" href="#">TravelIQ</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </body>
</html>
<script>
  //Nav Bar Scrolling

  const navEl = document.querySelector(".navbar");
  const textIQ = document.querySelector(".iq-text");

  window.addEventListener("scroll", () => {
    if (window.scrollY >= 2) {
      navEl.classList.add("navbar-scrolled");
      textIQ.classList.add("iq-texts");
    } else if (window.scrollY < 2) {
      navEl.classList.remove("navbar-scrolled");
      textIQ.classList.remove("iq-texts");
    }
  });
</script>

