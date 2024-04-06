<!doctype html>
<html lang="en">
  <head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <!-- Bootstrap icon -->
        <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
      </head>
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img class="logo" src="/image/logo-SIS-PNG-white.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-5">
              <a class="nav-link" aria-current="page" href="#section-1">IS Case Study Club Member</a>
              <a class="nav-link" aria-current="page" href="#section-2">IS Part-Time Lab Assistant</a>
              <a class="nav-link" aria-current="page" href="#section-3">IS Project Member</a>
              <a class="nav-link ms-lg-6 " aria-current="page" href="#">Sign-In
                <img class="icon-signin" src="/image/icon-signin.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </nav>
     <!-- Navbar end -->

     <!-- Main Page -->
      <section class="main-page"">
        <div class="container-fluid ms-0 me-0">
            <div class="row" id="section-1">
                <div class="col-md-6" id="hero">
                    <img src="/image/image-6.png" alt="">
                </div>
                <div class="col-md-6 mb-4" id="content">
                    <h1 class="mt-3">Information Systems Laboratory <br> Assistant </h1>
                    <p>
                        Information Systems Laboratory Assistants are members of the 
                        <br> 
                        information Systems Laboratory who are specifically tasked to 
                        <br>
                        conduct teaching in practicum classes along with potentially
                        <br>
                        assisting lecturers in teaching their classes
                        <br>
                        <br>
                        In addition to teaching, IS Laboratory Assistants are also expected
                        <br>
                        to grade students laboratory assignments and to help students
                        <br>
                        with their general understanding of systems design expected from
                        <br>
                        a student from the School of Information Systems.
                    </p>
                    <button class="btn">Register Now</button>
                </div>
            </div>
            <div class="row d-flex" id="section-2">
                <div class="col-md-6 mb-4 order-sm-2 order-md-1" id="content">
                    <h1 class="mt-3">Information Systems Case Study <br> Club Member</h1>
                    <p>
                        Information Systems Case Study Club Members are members of
                        <br> 
                        the Information Systems Laboratory who mainly focus on
                        <br>
                        developing their problem solving skills and implementing them 
                        <br>
                        within national and international competitions under the guidance
                        <br>
                        of senior IS Lab members and lecturers. The problems Case Study
                        <br>
                        Club Members tackle range from business problems (often related
                        <br>
                        to IT) to UI/UX design challenges
                        <br>
                    </p>
                    <button class="btn">Register Now</button>
                </div>
                <div class="col-md-6 order-sm-1 order-md-2" id="hero">
                    <img src="/image/image-9.png" alt="">
                </div>
            </div>
            <div class="row" id="section-3">
                <div class="col-md-6" id="hero">
                    <img src="/image/image-8.png" alt="">
                </div>
                <div class="col-md-6 mb-4" id="content">
                    <h1 class="mt-3">Information Systems Project <br> Member </h1>
                    <p>
                        Information Systems Project Members are members of the
                        <br> 
                        Information Systems Laboratory concerned with developing their
                        <br>
                        skills in real-world projects. In order to accomplish this, Project
                        <br>
                        Members are given training on web development and research
                        <br>
                        before then implementing it on real-world projects by the IS Lab 
                        <br>
                        and academic research to be published.
                        <br>
                        <br>
                        Furthermore, Project Members are also given the chance to show
                        <br>
                        their technical skills in web development competitions, while
                        <br>
                        receiving guidance from senior IS Lab members.
                    </p>
                    <button class="btn">Register Now</button>
                </div>
            </div>
        </div>
      </section>
      <!-- Main Page End -->

      <!-- Footer start -->
      <footer class="container-fluid text-end d-flex align-items-center justify-content-end" style="height: 150px; background-color:rgb(31, 32, 32)">
      <div class="row">
        <div class="col me-4">
          <h3 class="text-white mt-3">SCHOOL OF INFORMATION SYSTEM</h3>
          <p class="text-white ">Copyright © BINUS Higher Education. All rights reserved</p>
        </div>
      </div>
    </footer>
    <!-- footer end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>