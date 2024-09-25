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
        padding: 4rem;
        text-align: center;
        order: 0;
    }
    .bg-dark {
        background-color: var(--color-primary-dark);
        color: white;
    }
    .bg-gradient-light{
        background: linear-gradient(to bottom, white 80%, rgba(22, 22, 22, 0.09));
    }

    @media only screen and (min-width: 768px) and (max-width: 1024px) {
        .grid-col-4 {
            grid-template-columns: repeat(2, 1fr); 
        }
    }

    @media (max-width: 767px){
        .page-hero-content{
            height: 60vh;
            max-height: 340px;
        }
        .grid-col-4 {
            grid-template-columns: 1fr; 
        }
        .grid-col-4 .column:nth-child(3){
            order: -1;
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
$pageTitle = 'About Us'; 
$heroImage = '../assets/img/counsel.jpg'; 

include 'partials/page-hero.php';
?>

<!-- About Us -->
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

        <div class="column d-flex flex-column gap bg-dark">
            <div class="h-md">Our Vision</div>
            <div class="p-sm">To be the catalyst that transforms students, young adults, professionals, and leaders into empowered change-makers, guiding them to excel and create lasting impact in their communities.</div>
        </div>
        <div class="column d-flex flex-column gap">
            <div class="h-md">Who We Serve</div>
            <div class="p-sm">We are dedicated to empowering a diverse range of individuals, including college students seeking guidance, young adults navigating their career paths, professionals aiming for growth, and community leaders making an impact.</div>
        </div>
        <div class="column d-flex flex-column gap">
            <div class="h-md">Our Mission</div>
            <div class="p-sm">Our mission is to empower individuals from all walks of life, including university students, young adults, professionals, and community leaders. We aim to help them achieve their full potential and make a positive impact in their communities through personalized coaching, guidance, and support.</div>
        </div>
</div>
</section>


