<?php
  include('includes/header.php');
  include('includes/info.php');
  include('includes/navigation.php');
?>
    
    <!-- top image with page name begins -->
    <section class="contact-banner text-center">
      <div class="container-fluid">
        <div class="banner-message">
          <p class="h1 text-white">Contact us</p>
          <p class="text-light">Talk to us today</p>        
        </div>
        
      </div>
    </section>
    <!-- top image with page name ends -->
    <!-- contact form and information section begins -->
    <section class="contact-form">
      <div class="container">
        <p class="h4 pt-5 text-center">Get in Touch</p>
        <center><div class="border"></div></center>
        <div class="row pt-5">
          <!-- contact form begins -->
          <div class="col-sm-12 col-md-8">
            <form action="code.php" method="POST">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" name="user-name" class="form-control" placeholder="Your name">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="text" name="email" class="form-control" placeholder="Your email">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3"><i class="fas fa-pen"></i></span>
                </div>
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon4"><i class="fas fa-comment-alt"></i></span>
                </div>
                <textarea name="message" id="message" class="form-control" placeholder="Message" cols="30" rows="5"></textarea>
              </div>
              <button type="submit" name="send" class="btn btn-success">Send message</button>
            </form>
          </div>
          <!-- contact form ends -->
          <!-- contact information begins -->
          <div class="contact-info col-sm-12 col-md-4 bg-light">
            <p class="fw-bold my-2">Contact Details</p>
            <div class="row p-2 text-secondary">
              <div class="col-4 text-center pt-4">
                <i class="fas fa-home fa-lg"></i>
              </div>
              <div class="col-8">
                <a href="#" class="text-secondary" style="text-decoration: none;">
                  <p>Rosslyn, Lavington</p>
                  <p class="contact-extra-info">Address 232211</p>
                </a>
              </div>              
            </div>
            <div class="row p-2 text-secondary">
              <div class="col-4 text-center pt-4">
                <i class="fas fa-phone fa-lg"></i>
              </div>
              <div class="col-8">
                <a href="#" class="text-secondary" style="text-decoration: none;">
                  <p>+254 7123456789</p>
                  <p class="contact-extra-info">Mon to Fri 9.00am-6.00pm</p>
                </a>
              </div>
            </div>
            <div class="row p-2 text-secondary">
              <div class="col-4 text-center pt-4">
                <i class="fas fa-comment-alt fa-lg"></i>
              </div>
              <div class="col-8">
                <a href="#" class="text-secondary" style="text-decoration: none;">
                  <p>support@ststephen.ac.ke</p>
                  <p class="contact-extra-info">Always there to help</p>
                </a>
              </div>
            </div>
          </div>
          <!-- contact information ends -->
      </div>
    </section>
    <!-- contact form and information section begins -->

<?php

include('includes/scripts.php');

?>