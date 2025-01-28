<!-- Contact Content -->

<style>
    /* Container for the section */
.video-section {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  color: white; /* Text color for visibility */
  height: 100vh;
  max-height: 900px;
  width: 100%;
  position: absolute;
  top: 0;
  z-index: -1;
}

/* Background video styling */
.background-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensures video covers the entire section */
  z-index: -1;
}

/* Overlay styling */
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(22, 22, 22, 0.7); /* Semi-transparent dark overlay */
  z-index: 2;
}

/* Content styling */
.video-hero .content {
  position: relative;
  z-index: 3;
  text-align: center;
  height: 70vh;
}

.bg-color-dark .hero-card{
  min-width: 250px;
  scroll-margin-left: 100px !important;
  padding: 2rem;
  /* border-radius: 50%; */
}

.bg-color-dark .hero-card:hover{
  background-color: var(--color-primary-light);
  color: var(--color-primary-dark);
}

.thin-card{
  background-color: #fff;
  margin-bottom: 4px;
  padding: 0.4rem;
  border-radius: 4px;
  box-shadow: 0px 0px 40px 0px #6E82D01A;
  transition: all 0.3s ease-in-out;
  text-transform: capitalize;
}

.number{
  background-color: var(--color-accent);
  color: var(--color-primary-dark);
  height: 2.7rem;
  width: 2.7rem;
  min-height: 2.7rem;
  min-width: 2.7rem;
  border-radius: 50%;
  font-size: 1.4rem;
  font-weight: 600;
  font-family: 'Exo', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.4s ease-in-out;
}

.thin-card .title{
  text-transform: uppercase;
  font-size: 1.1rem;
  font-weight: 600;
}

.thin-card:hover{
  transform: scale(1.07);
}

.thin-card:hover .number {
  transform: rotate(360deg);
}

.thin-card .number {
  transform: rotate(0deg);
}


@media only screen and (min-width: 768px) and (max-width: 1024px){
  .video-section{
    height: 90vh;
  }
}

@media (max-width: 767px){
  .video-section{
    height: 75vh;
  }
}

</style>

<section class="video-hero py-lg-4">
  <div class="container content d-flex flex-column align-items-center justify-content-center">
    <h2 class="h-xs h-title text-accent" style="margin-top:10vh;">We Provide</h2>
    <h1 class="h-xl text-white">Compassionate Care for Seniors</h1>
    <p class="p-sm text-white">Let us help your loved ones live life to the fullest</p>
    <a href="" class="btn btn-accent-fill mt-4" style="width: fit-content;">
      Join Our Caring Family
    </a>
  </div>
</section>

<div class="video-section">
  <video class="background-video" autoplay muted loop playsinline>
    <source src="../assets/img/video/services-vid-all.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="overlay"></div>
</div>

<section class="cs-section">
  <div class="row container pt-4 mt-4 d-flex">
    <div class="col-lg-6 col-12 mb-4">
      <div style="min-height: 200px; background-image: url('../assets/img/old-man-2.jpg'); background-size:cover; height: 100%; width: 100%; border-radius: 2rem 2rem 0 2rem"></div>
    </div>
    <div class="col-lg-6 col-12 px-lg-4 px-2 mx-lg-2">
      <h2 class="h-md">We provide personalized care services for seniors, empowering them to live fulfilling lives.</h2>
      <p class="h-xs mt-4">Our compassionate care givers offer:</p>
      <div class="d-flex align-items-center gap-3 py-1 p-sm">
        <span style="font-size: 120%;"
        ><i class="bi bi-check-circle-fill text-accent"></i></span>
        <span>Memory Care (Alzheimer's, Dementia)</span>
      </div>
      <div class="d-flex align-items-center gap-3 py-1 p-sm">
        <span style="font-size: 120%;"
        ><i class="bi bi-check-circle-fill text-accent"></i></span>
        <span>Pain Management (chronic pain, medication management)</span>
      </div>
      <div class="d-flex align-items-center gap-3 py-1 p-sm">
        <span style="font-size: 120%;"
        ><i class="bi bi-check-circle-fill text-accent"></i></span>
        <span>Physical Therapy (mobility, balance)</span>
      </div>
      <div class="d-flex align-items-center gap-3 py-1 p-sm">
        <span style="font-size: 120%;"
        ><i class="bi bi-check-circle-fill text-accent"></i></span>
        <span>Social Support (companionship, transportation)</span>
      </div>
      <div class="d-flex align-items-center gap-3 py-1 p-sm">
        <span style="font-size: 120%;"
        ><i class="bi bi-check-circle-fill text-accent"></i></span>
        <span>Mental Health Services (depression, anxiety)</span>
      </div>
      <div class="d-flex align-items-center gap-3 py-1 p-sm">
        <span style="font-size: 120%;"
        ><i class="bi bi-check-circle-fill text-accent"></i></span>
        <span>Fall Prevention (home safety, balance training)</span>
      </div>
    </div>
  </div>
</section>

<section class="cs-section bg-primary-light">
  <div class="container mt-4 mb-4 pb-4 row gap">
    <div class="row">
      <div class="col-lg-6 col-12 d-flex flex-column mr-lg-4">
        <div class="h-xs h-title">
          Our Service Packages
        </div>
        <br>
        <h3 class="h-lg">Designed to meet diverse needs and preferences</h3>
        <br>
        <p class="p-sm">Whether it's health, wellness, or empowerment, our solutions are designed to provide the best care and support with flexibility and compassion.</p>
      </div>
      <div class="col-lg-6 col-12 ml-lg-5 pb-4 d-flex flex-column gap-3">
        <div class="thin-card px-3 py-3 d-flex gap-3">
          <div class="number">
            <span><p class="mb-0">1</p></span>
          </div>
          <div>
            <span class="h-lg title">Basic Care</span>
            <p class="p-sm mb-0">
            memory care <span><i class="bi bi-dot"></i></span> social support
            </p>
          </div>
        </div>
        <div class="thin-card px-3 py-3 d-flex gap-3">
          <div class="number">
            <span><p class="mb-0">2</p></span>
          </div>
          <div>
            <span class="h-lg title">Premium Care</span>
            <p class="p-sm mb-0">
              basic package <span><i class="bi bi-dot"></i></span>
              pain management <span><i class="bi bi-dot"></i></span> physical therapy
            </p>
          </div>
        </div>
        <div class="thin-card px-3 py-3 d-flex gap-3">
          <div class="number">
            <span><p class="mb-0">3</p></span>
          </div>
          <div>
            <span class="h-lg title">Comprehensive Care</span>
            <p class="p-sm mb-0">
              premium package <span><i class="bi bi-dot"></i></span> mental health services <span><i class="bi bi-dot"></i></span> fall prevention
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cs-section py-4 bg-color-dark">
  <div class="container pt-4 my-4">
    <h3 class="h-lg text-white text-center">Why Choose Us?</h3>
    <p class="p-sm text-white text-center">We offer you and your loved ones:</p>
  </div>
  <div class="hero-cards container scrollbar-custom mx-auto px-1">
    <div class="hero-card d-flex flex-column align-items-center">
        <div><i class="uil uil-shield-check"></i></div>
        <div class="content">
          <h3 class="h-xs text-center">Experienced caregivers</h3>
        </div>
      </div>
      <div class="hero-card d-flex flex-column align-items-center">
        <div><i class="uil uil-shield-check"></i></div>
        <div class="content">
          <h3 class="h-xs text-center">Customized care plans</h3>
        </div>
      </div>
      <div class="hero-card d-flex flex-column align-items-center">
        <div><i class="uil uil-shield-check"></i></div>
        <div class="content">
          <h3 class="h-xs text-center">Flexible scheduling</h3>
        </div>
      </div>
      <div class="hero-card d-flex flex-column align-items-center">
        <div><i class="uil uil-shield-check"></i></div>
        <div class="content">
          <h3 class="h-xs text-center">Compassionate, empathetic approach</h3>
        </div>
      </div>
      <div class="hero-card d-flex flex-column align-items-center">
        <div><i class="uil uil-shield-check"></i></div>
        <div class="content">
          <h3 class="h-xs text-center">Continuous training and support</h3>
        </div>
      </div>
    </div>
</section>

<section class="cs-section" >
<div class="container">
  <p class="h-md">
  Get Started Today!
  </p>
  <p class="h-xs">Call: 054 794 7841</p>
  <p>Join our caring family</p>
</div>
</section>
