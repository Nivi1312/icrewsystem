<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />

    <!-- Bootstrap Js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js"></script>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Roboto+Slab:wght@200;400;600;900&display=swap"
      rel="stylesheet"
    />

    <title>Portfolio</title>
  </head>
  <body>
    <div class="container navigation pt-3">
      <div class="row">
        <div class="col-6 d-flex justify-content-start align-items-center">
          <i class="fas fa-code fa-2x text-warning pb-3"></i>
          <h5 class="d-inline pl-2 text-white">Portfolio</h5>
        </div>
        <div class="col-6 pt-2">
          <div
            class="row text-center p-0 d-flex justify-content-end align-items-center">
            <div class="col-3">
              <a href="#about" class="text-white navigation-link">About</a>
            </div>
            <div class="col-3">
              <a href="#social-media" class="text-white navigation-link"
                >Social Media</a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Main Container -->
    <div class="main-container container">
      <div class="row main_row">
        <div class="col-6">
          <h2 class="text-white">Hey, I'm</h2>
          <h1 class="text-warning m-heading">Nivi</h1>
          <h2 class="text-white">Web Developer</h2>
        </div>
        <div class="col-6">
          <img
            src="images/InShot_20190227_195538629.jpg"
            class="img-fluid"
          />
        </div>
      </div>
    </div>

    <!-- About Section -->
    <div id="about" class="container about p-5">
      <div class="row">
        <div class="col-6">
          <img src="./images/about_img.svg" class="img-fluid" />
        </div>
        <div class="col-6 pl-5 pt-5 pb-5 text-white">
          <h3 class="text-warning">About Me</h3>
          <h1 class="m-heading">A little bit about me</h1>
          <p>
            Vanakkam!! Myself Nivetha u can call me as Nivi :) and I am from chennai
            currently I am Pursuing B.E CSE 3rd in Saveetha Engineering College.
            Then also doing an Internship in <b class="text-warning">ICREWSYSTEMS</b>
            Organization as a Junior Developer.

          </p>
          <button class="btn btn-outline-warning">Learn More</button>
        </div>
      </div>
    </div>

    

    <!-- Social Media Section -->
    <div id="social-media" class="container-fluid">
      <div class="container text-white py-5">
        <h4 class="text-warning">Social Media</h4>
        <h1 class="m-heading">lets be Buddy</h1>
        <div class="row pt-5">
          <div class="col-3 media_link btn" href="#">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-white">Twitter</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fab fa-twitter fa-2x text-secondary"></i>
              </div>
            </div>
          </div>

          <div class="col-3 media_link btn">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-white">Github</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fab fa-github fa-2x text-secondary"></i>
              </div>
            </div>
          </div>

          <div class="col-3 media_link btn">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-white">Instagram</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fab fa-instagram fa-2x text-secondary"></i>
              </div>
            </div>
          </div>

          <div class="col-3 media_link bg-warning btn">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-dark">Email</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fas fa-envelope fa-2x text-secondary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>