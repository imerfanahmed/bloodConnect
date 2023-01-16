<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Connect</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        a {
           text-decoration:none !important;
        }
     </style>
        <header class="continer-fluid ">
            <div class="header-top">
                <div class="container">
                    <div class="row col-det">
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="ulleft">
                                <li>
                                    <i class="far fa-envelope"></i>
                                    info@bloodconnect.com
                                    <span>|</span></li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Service Time : 24/7</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="ulright">
                                <li>
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <a href="/login">Login</a>
                                    <span>|</span></li>
                                <li>
                                    <i class="fas fa-user"></i>
                                    <a href="/register">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo justify-item-center">
                            <img src="assets/images/logo.jpg" alt="">
                        </div>
                        <div class="col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">

                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                {{-- <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#about">About Us</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#gallery">Gallery</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="#process">Process</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#blog">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">Contact US</a>
                                        </li>
                                    </ul> --}}
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>


    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slide-02.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, <br>
                            aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                            sed sagittis at, sagittis quis neque. Praesent.</p>

                        <div class=" vbh">

                            <a href="/database" class="btn btn-success bounceInUp" role="button">Find Donor</a>
                            <a href="/login" class="btn btn-success bounceInUp" role="button">Be a Donor</a>
                            {{-- <div class="btn btn-success  bounceInUp"> <a href="/register">Be a Donor</a> </div> --}}
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/slide-03.jpg" alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, <br>
                            aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                            sed sagittis at, sagittis quis neque. Praesent.</p>

                        <div class=" vbh">

                            <div class="btn btn-danger  bounceInUp"> Donate Now </div>
                            <div class="btn btn-danger  bounceInUp"> Contact US </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

    <!--*************** About Us Starts Here ***************-->
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
               <h2>Why Donate Blood??</h2>
               {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p> --}}
           </div>
            <div class="row">
                <div class="col-md-6 text">
                        Safe blood saves lives. Blood is needed by women with complications during pregnancy and childbirth, children with severe anaemia, often resulting from malaria or malnutrition, accident victims and surgical and cancer patients.

There is a constant need for a regular supply of blood because it can be stored only for a limited period of time before use. Regular blood donation by a sufficient number of healthy people is needed to ensure that blood will always be available whenever and wherever it is needed.

Blood is the most precious gift that anyone can give to another person – the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components – red cells, platelets and plasma – which can be used individually for patients with specific conditions.


                </div>
                <div class="col-md-6 image text-center">
                    <img src="assets/images/about.jpg" alt="" width="400px">
                </div>
            </div>
       </div>
   </section>

   <section id="process" class="donation-care">
    <div class="container">
      <div class="row session-title">
          <h2>Donation Process</h2>
          <p>The donation process from the time you arrive center until the time you leave</p>
      </div>
       <div class="row">
            <div class="col-md-3 col-sm-6 vd">
               <div class="bkjiu">
                <img src="assets/images/gallery/g1.jpg" alt="">
                <h4><b>1 - </b>Registration</h4>
                <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 vd">
               <div class="bkjiu">
                <img src="assets/images/gallery/g2.jpg" alt="">
                   <h4><b>2 - </b>Seeing</h4>
                <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 vd">
               <div class="bkjiu">
                <img src="assets/images/gallery/g3.jpg" alt="">
                   <h4><b>3 - </b>Donation</h4>
                <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 vd">
               <div class="bkjiu">
                   <img src="assets/images/gallery/g4.jpg" alt="">
                   <h4><b>4 - </b>Save Life</h4>
                    <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                    <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
               </div>
            </div>
       </div>


    </div>
</section>

      <!-- ################# Gallery Start Here #######################--->

    <div id="gallery" class="gallery container-fluid">
        <div class="container">
            <div class="row session-title">
                <h2>Checkout Our Gallery</h2>
            </div>
            <div class="gallery-row row">
                    <div id="gg-screen"></div>
                    <div class="gg-box">
                            <div class="gg-element">
                                <img src="assets/images/gallery/g1.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g2.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g3.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g4.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g5.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g6.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g7.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g8.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g9.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g10.jpg">
                            </div>


                          </div>
            </div>
        </div>
    </div>



     <!-- ################# Donation Process Start Here #######################--->






         {{-- <!--################### Our Blog Starts Here #######################--->
        <div id="blog" class="blog-container contaienr-fluid">
            <div class="container">
                <div class="session-title row">
                  <h2>Latest Blog</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit velit consectetur adipiscing elit.</p>
                </div>
                <div class="row news-row">
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="assets/images/blog/blog_01.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>Latest News about Smarteye</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="assets/images/blog/blog_02.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>Apple Launch its New Phone</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="assets/images/blog/blog_03.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>About Windows 10 Update</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="assets/images/blog/blog_04.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>Latest News about Smarteye</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}





      <!--*************** Footer  Starts Here *************** -->
    <footer id="contact" class="container-fluid">
        <div class="container">

            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informatins</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>46-29 Indra Street, Southernbank, Tigaione, Toranto, 3006 Canada</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>sales@smarteyeapps.com <br> support@smarteyeapps.com</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>+91 9751791203 <br> +91 9159669599</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                   <div class="row no-margin mt-2">
                    <h2>Quick Links</h2>
                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Contacts</li>
                        <li>Pricing</li>
                        <li>Gallery</li>
                        <li>eatures</li>

                    </ul>
                    </div>
                   <div class="row no-margin mt-1">
                       <h2 class="m-t-2">More Products</h2>
                     <ul>
                        <li>Forum PHP Script</li>
                        <li>Edu Smart</li>
                        <li>Smart Event</li>
                        <li>Smart School</li>


                    </ul>
                   </div>

                </div>
                <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Quick Message</h4>
                        </div>
                        <div class="form-body">
                            <input type="text" placeholder="Enter Name" class="form-control">
                            <input type="text" placeholder="Enter Mobile no" class="form-control">
                            <input type="text" placeholder="Enter Email Address" class="form-control">
                            <input type="text" placeholder="Your Message" class="form-control">
                            <button class="btn btn-sm btn-primary w-100">Send Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Copyright © <a href="https://www.smarteyeapps.com">Smarteyeapps.com</a> | All right reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li><a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
</html>