<?php
include 'config.php'; 
$pageTitle = 'Services'; 
// $heroImage = '../assets/img/corporate-people-colored.jpg'; 

// include 'partials/_page-hero.php';
?>



<section class="background-image-section" style="background-image: url('../assets/img/corporate-people-colored.jpg');"></section>

<section class="position-relative mb-4 pb-4 page-hero-section">
    <div class="row container d-flex justify-content-center">
        <div class="col-md-4 col-12 p-2 dark-background" style="">
            <div class="content-padding">
                <h1 class="h-lg mb-0 px-2 py-1"><span class="text-accent">Our</span> Services</h1>
                <p class="px-2 opacity-text">What we offer</p>
            </div>
        </div>
        <div class="col-md-6 col-12 p-2 white-background content-shadow">
            <div class="scope-content">
                <p class="p-sm">We serve students, parents raising children, young individuals through their childhood, and the elderly, offering support across all stages of life.</p>
            </div>
        </div>
    </div>
</section>
<div class="mt-4" style="height: 120px;"></div>
<!-- Services -->
<section class="cs-section mt-4">
  <?php include('partials/_services.php') ?>
</section>
<!-- Services End -->
    
<!-- <section class="cs-section">
    <div class="row container">
        <div class="bg-dark" style="border-radius: 2rem; height: 400px;"></div>
        <div style="margin-top: 2rem;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vel sequi obcaecati dolor molestias delectus fuga facilis optio, ea illum ut vero aliquam est nesciunt omnis beatae tenetur nam perspiciatis accusamus non. Autem minima minus sapiente! Odit fugit dolores eveniet, inventore error possimus iste nulla qui sapiente nam eaque, ullam suscipit. Neque nihil velit doloribus, fugit reprehenderit provident, ducimus quibusdam ipsum totam vitae, laborum maxime illum voluptatem! Repudiandae dolore reiciendis architecto quia sed necessitatibus, officiis recusandae! Non eaque saepe ut, exercitationem est vel omnis, quisquam dolores tenetur officia consequuntur deleniti error! Obcaecati sint quasi facere suscipit dolore facilis neque architecto.
        </div>
    </div>
</section> -->


<section class="cs-section bg-light" id="parents-corner">
  <div class="container pt-4 mt-4">
    <div class="row align-items-stretch">
      <!-- Image Column -->
      <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 d-flex">
        <div
          class="w-100"
          style="
            background-image: url('../assets/img/baby.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 1rem;
          "
        ></div>
      </div>

      <!-- Content Column -->
      <div class="col-lg-6 col-md-12 px-lg-4 px-md-3 px-2">
        <h2 class="h-md mb-3 text-center text-md-start">Parent's Corner</h2>
        <p class="p-sm text-center text-md-start text-justify mb-4">
          Our Parents’ Corner is your go-to space for resources, guidance, and support to help navigate the journey of raising children. We offer:
        </p>
        <!-- List Items -->
        <ul class="list-unstyled p-sm">
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span><strong>Expert Advice:</strong> Articles, blogs, and webinars on parenting topics and skills.</span>
          </li>
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span><strong>Support Networks:</strong> Online groups for sharing experiences and finding encouragement.</span>
          </li>
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span><strong>Milestone Guidance:</strong> Tools for tracking developmental stages and understanding growth.</span>
          </li>
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span><strong>Health and Nutrition Tips: </strong>Guidance on healthy eating and wellness for parents and children</span>
          </li>
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span><strong>Creative Play Ideas: </strong>Fun and engaging activities tailored to different age groups.</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<section class="cs-section" id="childrens-corner">
  <div class="container pt-4 mt-4">
    <div class="row align-items-stretch flex-lg-row-reverse">
      <!-- Image Column -->
      <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 d-flex">
        <div
          class="w-100"
          style="
            background-image: url('../assets/img/kids.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 1rem;
          "
        ></div>
      </div>

      <!-- Content Column -->
      <div class="col-lg-6 col-md-12 px-lg-4 px-md-3 px-2">
        <h2 class="h-md mb-3 text-center text-md-start">Children's Corner</h2>
        <p class="h-xs mb-4 text-center text-md-start">Nurturing Growth, One Child at a Time</p>
        <!-- List Items -->
        <ul class="list-unstyled p-sm">
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span>Online resources for kids</span>
          </li>
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span>Homework help and tutoring</span>
          </li>
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span>Skill-building activities</span>
          </li>
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span>Counseling services for children</span>
          </li>
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span>Bullying prevention and support</span>
          </li>
          <li class="d-flex align-items-start gap-3 py-1">
            <i class="bi bi-check-circle-fill text-accent fs-5"></i>
            <span>Emotional intelligence and self-awareness resources</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>




<section class="cs-section bg-primary-light">
    <div class="text-center flex-col justify-center align-center gap">
        <h2 class="h-xs h-title text-center">Testimonials</h2>
        <h3 class="h-md">Hear what our clients have to say about us.</h3>
    </div>
    <?php 
        $items = include BASE_PATH . '/db_files/testimonials-data.php';
        include BASE_PATH . '/partials/_scroll-carousel.php'
    ?>            
</section>