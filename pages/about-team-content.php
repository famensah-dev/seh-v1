<?php include 'config.php'; ?>

<style>
    .page-hero-image{
        height: calc(50vh + 4rem);
        max-height: 450px;
        width: 100%;
        position: absolute;
        top: 0;
        z-index: -1;
        background-image: url('../assets/img/about-img.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center 25%;
    }
    .page-hero-image::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7); 
        z-index: -1;
    }
    .page-hero-content{
        color: white;
        height: 42vh;
        max-height: 380px;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* GRID */

    .grid-col-4 {
        display: grid;
        grid-template-columns: repeat(3, 1fr); 
    }

    .column {
        padding: clamp(3rem, 5vw, 4rem);
        text-align: center;
        order: 0;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .bg-dark {
        background-color: var(--color-primary-dark-alt);
        color: white;
    }

    .bg-accent{
        background-color: var(--color-accent);
        color: var(--color-primary-dark);
    }
    .bg-gradient-light{
        background: linear-gradient(to bottom, white 80%, rgba(22, 22, 22, 0.09));
    }

    @media(max-width: 1024px) {
        .grid-col-4 {
            grid-template-columns: repeat(2, 1fr); 
        }
        .bg-dark-md{
            background-color: var(--color-primary-dark-alt);
            color: white;
        }
    }

    @media (max-width: 767px){
        .page-hero-content{
            height: 60vh;
            max-height: 340px;
        }
        .grid-col-4 {
            grid-template-columns: 1fr; /* One column on mobile */
        }
        
        .grid-col-4 .column {
            order: 0; /* Reset the order for all items */
        }

        .grid-col-4 .column:nth-child(2) {
            order: 2; /* Move the second item to the third position */
        }

        .grid-col-4 .column:nth-child(3) {
            order: 1; /* Move the third item to the second position */
        }

        /* Keep the order of other items unchanged */
        .grid-col-4 .column:nth-child(1) {
            order: 0; /* First item remains first */
        }
        
        .grid-col-4 .column:nth-child(4) {
            order: 3; /* Fourth item remains fourth */
        }

        .grid-col-4 .column:nth-child(5) {
            order: 4; /* Fifth item remains fifth */
        }

        .grid-col-4 .column:nth-child(6) {
            order: 5; /* Sixth item remains sixth */
        }
    }

    @media (max-width: 500px){
        .column{
            padding: 2.5rem 2rem;
        }
    }
</style>


<!-- Contact Content -->
<?php
$pageTitle = 'Meet the Team'; 
$heroImage = '../assets/img/counsel.jpg'; 

include 'partials/_page-hero.php';
?>

<!-- About Us -->
<section class="cs-section">
<div class="container" style="width: 70%;;">
    <h2 class="text-center">
    <span class="text-accent">Empowering</span> individuals to reach their full potential and make a positive community impact.
    </h2>
</div>
</section>
<section>
    <div class="grid-col-4 bg-gradient-light">
        <div class="column d-flex flex-column gap">
            <div class="h-md">What We Stand For</div>
            <div class="p-sm">At Empowerment Hub, we believe in the power of personalized coaching and mentorship. Whether you’re a student, young adult, professional, or community leader, we’re here to help you shape your success and make a lasting impact. Join us on this journey to empowerment and discover what you can achieve with the right support and guidance.</div>
        </div>
        <div class="column d-flex flex-column gap">
            <div class="h-md">What We Do</div>
            <div class="p-sm">At Empowerment Hub, we are dedicated to providing the guidance and support that students and young adults need to thrive. Founded by Ivy Aidoo, a passionate coach and mentor, our mission is to help individuals unlock their full potential and make a positive impact in their communities.</div>
        </div>
        <div class="column d-flex flex-column gap bg-dark">
            <div class="h-md">Our Mission</div>
            <div class="p-sm">Our mission is to empower individuals from all walks of life, including university students, young adults, professionals, and community leaders. We aim to help them achieve their full potential and make a positive impact in their communities through personalized coaching, guidance, and support.</div>
        </div>

        <div class="column d-flex flex-column gap bg-dark-md">
            <div class="h-md">Our Vision</div>
            <div class="p-sm">To be the catalyst that transforms students, young adults, professionals, and leaders into empowered change-makers, guiding them to excel and create lasting impact in their communities.</div>
        </div>
        <div class="column d-flex flex-column gap">
            <div class="h-md">Who We Serve</div>
            <div class="p-sm">We are dedicated to empowering a diverse range of individuals, including college students seeking guidance, young adults navigating their career paths, professionals aiming for growth, and community leaders making an impact.</div>
        </div>
        <div class="column d-flex flex-column gap bg-accent">
            <div class="h-md">Community Support</div>
            <div class="p-sm">We gather and distribute gently used clothing, shoes, and personal items to individuals in need, uplifting vulnerable populations while fostering dignity and self-esteem.</div>
            <a href="#" class="btn btn-accent-fill">Learn More</a>
        </div>
    </div>
</section>

<section id="about" class="cs-section row gap-md">
    <div class="container content flex-col gap-lg">
    <div class="d-flex gap-md mx-auto" style="width: 80%;">
        <div 
            class="image-container" style="width: 60%; background-image: url('../assets/img/about-img.jpg')">
        </div>
        <div class="flex-col flex-grow gap">
            <h2 class="h-xs">Meet Ivy Aidoo</h2>
            <h3 class="h-md text-blue">The Founder</h3>
            <div class="hr hr-thick hr-md hr-accent"></div>
            <p class="p-sm" style="text-align: justify;">Ivy’s journey to becoming a coach began with her own transformative experience. She discovered the power of coaching and mentorship, which inspired her to pursue a career dedicated to helping others. With expertise in productivity, motivation, and wellness, Ivy combines her passion for empowering others with practical strategies for success.</p>
            <a href="#" style="width: fit-content;" class="p-sm btn btn-accent-fill">Meet the Team <i class="uil uil-angle-right-b" style="font-size: 1rem;;"></i></a>
        </div>
    </div>
</section>

<section class="cs-section bg-primary-light">
    <div class="flex gap justify-center">
        <div class="custom-card d-flex align-center" style="gap: 0.4rem;">
            <span>Our Team</span>
            <span style="font-size:1.5rem;"><i class="uil uil-arrow-circle-right"></i></span>
        </div>
        <div class="custom-card d-flex align-center" style="gap: 0.4rem;">
            <span>Our Services</span>
            <span style="font-size:1.5rem;"><i class="uil uil-arrow-circle-right"></i></span>
        </div>
        <div class="custom-card d-flex align-center" style="gap: 0.4rem;">
            <span>Charities</span>
            <span style="font-size:1.5rem;"><i class="uil uil-arrow-circle-right"></i></span>
        </div>
    </div>
</section>


