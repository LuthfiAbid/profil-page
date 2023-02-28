<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with JohnDoe landing page.">
  <meta name="author" content="Devcrud">
  <title>Welcome to my Profil Page</title>
  <!-- font icons -->
  <link rel="stylesheet" href="{{url('assets/vendors/themify-icons/css/themify-icons.css')}}">
  <!-- Bootstrap + JohnDoe main styles -->
  <link rel="stylesheet" href="{{url('assets/css/johndoe.css')}}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
  <header class="header">
    <div class="container">
      <ul class="social-icons pt-3">
        <li class="social-item">
          <a class="social-link text-light" href="https://twitter.com/Abeeeed7">
            <i class="ti-twitter" aria-hidden="true"></i>
          </a>
        </li>
        <li class="social-item">
          <a class="social-link text-light" href="https://www.instagram.com/luthfiabid87/">
            <i class="ti-instagram" aria-hidden="true"></i>
          </a>
        </li>
        <li class="social-item">
          <a class="social-link text-light" href="https://www.linkedin.com/in/luthfi-abid-9016b2179/">
            <i class="ti-linkedin" aria-hidden="true"></i>
          </a>
        </li>
        <li class="social-item">
          <a class="social-link text-light" href="https://github.com/LuthfiAbid" target="_blank">
            <i class="ti-github" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
      <div class="header-content">
        <h4 class="header-subtitle">Hello, I am</h4>
        <h1 class="header-title">Luthfi Abid</h1>
        <h6 class="header-mono">Web Developer</h6>
        <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button>
      </div>
    </div>
  </header>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
    <div class="container">
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#resume" class="nav-link">Resume</a>
          </li>
        </ul>
        <ul class="navbar-nav brand">
          <img src="assets/imgs/avatar.jpg" alt="" class="brand-img">
          <li class="brand-txt">
            <h5 class="brand-title">Luthfi Abid</h5>
            <div class="brand-subtitle">Web Developer</div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#portfolio" class="nav-link">Portfolio</a>
          </li>
          <li class="nav-item last-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div id="about" class="row about-section">
      <div class="col-lg-4 about-card">
        <h3 class="font-weight-light">Who am i ?</h3>
        <span class="line mb-5"></span>
        <p>
        <p style="font-size: 1em;text-align:justify;" class="mb-3">
          Currenly based on Batu City, East Java Indonesia. My interest about Web Developer PHP Laravel since 2018,
          learn from my Telkom High School in Malang. I learn many (specifically PHP Laravel and Codeigniter). Now im
          remote working on Software House based on Central Jakarta Indonesia.
        </p>
        {{-- <p class="mt-20">Currently </p> --}}
        <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</button>
      </div>
      <div class="col-lg-4 about-card">
        <h3 class="font-weight-light">Personal Info</h3>
        <span class="line mb-5"></span>
        <ul class="mt40 info list-unstyled">
          <li><span>Email</span> : luthfiabid27@gmail.com</li>
          <li><span>Phone</span> : + (62) 81359478818</li>
          <li><span>Address</span> : Gondorejo Street 132 Batu City, East Java Indonesia</li>
        </ul>
        <ul class="social-icons pt-3">
          <li class="social-item">
            <a class="social-link" href="https://twitter.com/Abeeeed7">
              <i class="ti-twitter" aria-hidden="true"></i>
            </a>
          </li>
          <li class="social-item">
            <a class="social-link" href="https://www.instagram.com/luthfiabid87/">
              <i class="ti-instagram" aria-hidden="true"></i>
            </a>
          </li>
          <li class="social-item">
            <a class="social-link" href="https://www.linkedin.com/in/luthfi-abid-9016b2179/">
              <i class="ti-linkedin" aria-hidden="true"></i>
            </a>
          </li>
          <li class="social-item">
            <a class="social-link" href="https://github.com/LuthfiAbid">
              <i class="ti-github" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 about-card">
        <h3 class="font-weight-light">My Expertise</h3>
        <span class="line mb-5"></span>
        <div class="row">
          <div class="col-1 text-danger pt-1">
            <i class="ti-paint-bucket icon-lg"></i>
          </div>
          <div class="col-10 ml-auto mr-3">
            <h6>Web Development</h6>
            <p class="subtitle">Developing Web and make it good on performance</p>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Resume Section-->
  <section class="section" id="resume">
    <div class="container">
      <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="card">
            <div class="card-header">
              <div class="mt-2">
                <h4>Expertise</h4>
                <span class="line"></span>
              </div>
            </div>
            <div class="card-body">
              <h6 class="title text-danger">November 2021 - Present</h6>
              <p>PT. Candi Berkah Tehnologi - Web Developer</p>
              <ul>
                <li style="text-align: justify;" class="mb-2">Developing website <a class="subtitle"
                    href="https://siroum.pom.go.id/">Siroum</a> for internal data National Agency of Drug and Food
                  Control using Codeigniter</li>
                <li style="text-align: justify;" class="mb-2">Developing website <a class="subtitle"
                    href="https://perpustakaan.pom.go.id/">e-Library</a> for electronic library of National Agency of
                  Drug and Food Control using Codeigniter and <a href="https://slims.web.id/web/">Slims</a> library</li>
                <li style="text-align: justify;" class="mb-2">Developing website <a class="subtitle"
                    href="https://jdih.pom.go.id/">JDIH</a> for legal documentation and information network of National
                  Agency of Drug and Food Control using Codeigniter</li>
                <li style="text-align: justify;" class="mb-2">Developing website Simppu for internal legal documentation
                  and information network of National Agency of Drug and Food Control using Laravel</li>
              </ul>
              <hr>
              <h6 class="title text-danger">August - November 2020</h6>
              <p>FINEOZ - Junior Back-end Developer</p>
              <P class="subtitle">Developing API for automation Credit Scoring using Express Js</p>
              <hr>
              <h6 class="title text-danger">November 2019 - July 2020</h6>
              <p>PT. Klakklik Inovasi Digital - Web Developer</p>
              <ul>
                <li style="text-align: justify;" class="mb-2">Developing Helpdesk website that connecting to our client,
                  so client can request about bug or something else that our working on</li>
                <li style="text-align: justify;" class="mb-2">Developing website Human Resources Development Agency
                  "Simdiklat" Jakarta</li>
              </ul>
              <hr>
              <h6 class="title text-danger">April 2019 - September 2019</h6>
              <p>Codehunter Academy - Trainee</p>
              <ul>
                <li style="text-align: justify;" class="mb-2">Developing payment gateway (with API Paypal Sandbox) with
                  Laravel</li>
                <li style="text-align: justify;" class="mb-2">Learn how to make a good website with Laravel</li>
              </ul>
              <hr>
              <h6 class="title text-danger">July 2018 - September 2018</h6>
              <p>Quantum Leap Global Solution - Internship School Program</p>
              <ul>
                <li style="text-align: justify;" class="mb-2">Learn ERP warehouse workflow with Laravel</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card">
            <div class="card-header">
              <div class="mt-2">
                <h4>Education</h4>
                <span class="line"></span>
              </div>
            </div>
            <div class="card-body">
              <h6 class="title text-danger">2019 - Present</h6>
              <p>Information System College Student in Binus University</p>
              <hr>
              <h6 class="title text-danger">2016 - 2018</h6>
              <p>Telkom High School Malang</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <div class="pull-left">
                <h4 class="mt-2">Skills</h4>
                <span class="line"></span>
              </div>
            </div>
            <div class="card-body pb-2">
              <h6>HTML5 &amp; CSS3</h6>
              <div class="progress mb-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h6>JavaScript</h6>
              <div class="progress mb-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 79%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h6>PHP</h6>
              <div class="progress mb-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="50"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h6>SQL</h6>
              <div class="progress mb-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="75"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="pull-left">
                <h4 class="mt-2">Languages</h4>
                <span class="line"></span>
              </div>
            </div>
            <div class="card-body pb-2">
              <h6>English</h6>
              <div class="progress mb-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h6>Indonesia</h6>
              <div class="progress mb-3">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="section bg-dark py-5">
    <div class="container text-center">
      <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
      <button class="btn bg-primary w-lg">Hire me</button>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="section bg-custom-gray" id="portfolio">
    <div class="container">
      <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
      <div class="portfolio">
        <div class="filters">
          <a href="#" data-filter=".new" class="active">
            New
          </a>
          <a href="#" data-filter=".advertising">
            Advertising
          </a>
          <a href="#" data-filter=".branding">
            Branding
          </a>
          <a href="#" data-filter=".web">
            Web
          </a>
        </div>
        <div class="portfolio-container">
          <div class="col-md-6 col-lg-4 web new">
            <div class="portfolio-item">
              <img src="assets/imgs/web-1.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">WEB</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 web new">
            <div class="portfolio-item">
              <img src="assets/imgs/web-2.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">WEB</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 advertising new">
            <div class="portfolio-item">
              <img src="assets/imgs/advertising-2.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">ADVERSTISING</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 web">
            <div class="portfolio-item">
              <img src="assets/imgs/web-4.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">WEB</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 advertising">
            <div class="portfolio-item">
              <img src="assets/imgs/advertising-1.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">ADVERSITING</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 web new">
            <div class="portfolio-item">
              <img src="assets/imgs/web-3.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">WEB</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 advertising new">
            <div class="portfolio-item">
              <img src="assets/imgs/advertising-3.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/advertising-3.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">ADVERSITING</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 advertising new">
            <div class="portfolio-item">
              <img src="assets/imgs/advertising-4.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/advertising-4.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">ADVERTISING</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 branding new">
            <div class="portfolio-item">
              <img src="assets/imgs/branding-1.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">BRANDING</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 branding">
            <div class="portfolio-item">
              <img src="assets/imgs/branding-2.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">BRANDING</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 branding new">
            <div class="portfolio-item">
              <img src="assets/imgs/branding-3.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">BRANDING</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 branding">
            <div class="portfolio-item">
              <img src="assets/imgs/branding-4.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">BRANDING</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 branding">
            <div class="portfolio-item">
              <img src="assets/imgs/branding-5.jpg" class="img-fluid"
                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
              <div class="content-holder">
                <a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
                <div class="text-holder">
                  <h6 class="title">BRANDING</h6>
                  <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of portfolio section -->

  <div class="section contact" id="contact">
    <div id="map" class="map"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="contact-form-card">
            <h4 class="contact-title">Send a message</h4>
            <form action="">
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Name *" required>
              </div>
              <div class="form-group">
                <input class="form-control" type="email" placeholder="Email *" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" id=" placeholder=" Message *" rows="7" required></textarea>
              </div>
              <div class="form-group ">
                <button type="submit" class="form-control btn btn-primary">Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-info-card">
            <h4 class="contact-title">Get in touch</h4>
            <div class="row mb-2">
              <div class="col-1 pt-1 mr-1">
                <i class="ti-mobile icon-md"></i>
              </div>
              <div class="col-10 ">
                <h6 class="d-inline">Phone : <br> <span class="text-muted">+ (123) 456-789</span></h6>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-1 pt-1 mr-1">
                <i class="ti-map-alt icon-md"></i>
              </div>
              <div class="col-10">
                <h6 class="d-inline">Address :<br> <span class="text-muted">12345 Fake ST NoWhere AB Country.</span>
                </h6>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-1 pt-1 mr-1">
                <i class="ti-envelope icon-md"></i>
              </div>
              <div class="col-10">
                <h6 class="d-inline">Email :<br> <span class="text-muted">info@website.com</span></h6>
              </div>
            </div>
            <ul class="social-icons pt-4">
              <li class="social-item">
                <a class="social-link text-dark" href="https://twitter.com/Abeeeed7">
                  <i class="ti-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="social-item">
                <a class="social-link text-dark" href="https://www.instagram.com/luthfiabid87/">
                  <i class="ti-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="social-item">
                <a class="social-link text-dark" href="https://www.linkedin.com/in/luthfi-abid-9016b2179/">
                  <i class="ti-linkedin" aria-hidden="true"></i>
                </a>
              </li>
              <li class="social-item">
                <a class="social-link text-dark" href="https://github.com/LuthfiAbid" target="_blank">
                  <i class="ti-github" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
  <footer class="footer py-3">
    <div class="container">
      <p class="small mb-0 text-light">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script> Created With <i class="ti-heart text-danger"></i> By
        <a href="http://devcrud.com" target="_blank"><span class="text-danger"
            title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a>
      </p>
    </div>
  </footer>

  <!-- core  -->
  <script src="{{url('assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
  <script src="{{url('assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

  <!-- bootstrap 3 affix -->
  <script src="{{url('assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

  <!-- Isotope  -->
  <script src="{{url('assets/vendors/isotope/isotope.pkgd.js')}}"></script>

  <!-- Google mpas -->
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

  <!-- JohnDoe js -->
  <script src="{{url('assets/js/johndoe.js')}}"></script>

</body>

</html>