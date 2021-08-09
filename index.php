<?php
  include('includes/header.php');
  include('includes/info.php');
  include('includes/navigation.php');
  include('dbconnect.php');
?>
    
    <!-- image slides begin -->
    <section class="slider">
      <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="asset/images/slider-image1.jpg" class="d-block w-100" alt="Never stop learning">
            </div>
            <div class="carousel-item">
              <img src="asset/images/slider-image2.jpg" class="d-block w-100" alt="Library">
            </div>
            <div class="carousel-item">
              <img src="asset/images/slider-image3.jpg" class="d-block w-100" alt="Resources">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- image slides end -->
    <!-- services section begins -->
    <section class="services text-center">
      <div class="container">
        <p class="h4 pt-5">This is what we offer</p>
        <center><div class="border"></div></center>
        <p class="text-top text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
        <div class="row pt-5">
          <div class="col-sm-12 col-lg-4">
            <i class="fas fa-handshake-slash"></i>
            <p class="h5 fw-bold pt-4">Brighter Future</p>
            <center><div class="border"></div></center>
            <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
          </div>
          <div class="col-sm-12 col-lg-4">
            <i class="fas fa-people-carry"></i>
            <p class="h5 fw-bold pt-4">Qualified Teachers</p>
            <center><div class="border"></div></center>
            <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
          </div>
          <div class="col-sm-12 col-lg-4">
            <i class="fas fa-book-open"></i>
            <p class="h5 fw-bold pt-4">Modern Facilities</p>
            <center><div class="border"></div></center>
            <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
          </div>
        </div>
      </div>
    </section>
    <!-- services section ends -->
    <!-- our excellence section begins -->
    <section class="excellence bg-light py-5">
      <div class="container-fluid px-lg-5 px-sm-0">
        <p class="h4 text-dark text-center">Our Excellence</p>
        <center><div class="border"></div></center>
        <div class="row">
          <div class="col-sm-12 col-lg-5 text-sm-center text-lg-end">
            <img src="asset/images/excellence-image.jpg" alt="students learning">
          </div>
          <div class="text-column col-sm-12 col-lg-7 p-5 text-sm-center text-lg-start">
            <p class="fw-bold text-dark">Science Olympiad</p>
            <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p class="award-date fw-bold"><i class="fas fa-calendar pe-2"></i>Awarded on: 12th June 2021</p>
          </div>
        </div>
      </div>
    </section>
    <!-- our excellence section ends -->
    <!-- faculty section begins -->
    <section class="our-faculty text-light">
      <div class=" faculty-image container-fluid p-5">
        <div class="row text-center py-5">
          <div class="col-sm-12 col-lg-4">
            <p class="h1 fw-bold">1200</p>
            <center><div class="border"></div></center>
            <p>Students</p>
          </div>
          <div class="col-sm-12 col-lg-4">
            <p class="h1 fw-bold">171</p>
            <center><div class="border"></div></center>
            <p>Teachers</p>
          </div>
          <div class="col-sm-12 col-lg-4">
            <p class="h1 fw-bold">39</p>
            <center><div class="border"></div></center>
            <p>Departments</p>
          </div>
        </div>
      </div>
    </section>
    <!-- faculty section ends -->
    <!-- latest news section begins -->
    <section class="latest-news bg-light">
      <div class="container-fluid py-5">
        <p class="h4 text-dark text-center">Latest News</p>
        <center><div class="border"></div></center>
        <div class="row m-lg-5 m-sm-2">
          <?php

        $fetchNews = "SELECT * FROM news ORDER BY created_at DESC LIMIT 3";
        $runQuery = mysqli_query($connection, $fetchNews);

        if(mysqli_num_rows($runQuery) > 0){
          while($news = mysqli_fetch_assoc($runQuery)){
            echo '<div class="col-lg-4 col-sm-12 py-1">
                    <a href="#">
                      <div class="card p-2">
                        <img src="asset/images/card-image1.jpg" class="card-img-top" alt="road">
                        <div class="card-body">
                          <p class="fw-light text-secondary text-center fs-6">' . date_format(date_create($news['created_at']), "jS F Y") . ', by ' . $news['created_by'] . '</p>
                          <div class="date-bottom-border"></div>
                          <p class="fw-bold text-dark">' . $news['title'] . '</p>
                          <p class="card-text text-secondary">' . substr($news['message'], 0, 100) . '... </p>
                         </div>
                      </div>
                    </a>
                  </div>';
          }

        }


          ?>
        </div>
        <!-- code for button in latest news section begins -->
        <div class="news-button container-fluid text-center">
          <button type="button" class="btn btn-success btn-sm" >
            <p class="fw-bold"><i class="fas fa-eye"></i> View More</p>
          </button>
        </div>
        <!-- code for button in latest news section ends -->
      </div>
    </section>
    <!-- latest news section ends -->
<?php

include('includes/scripts.php');

?>