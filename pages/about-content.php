<?php include 'config.php'; ?>

<style>
    .page-hero-image{
        height: calc(50vh + 4rem);
        max-height: 380px;
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
        height: 28vh;
        max-height: 380px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card i{
        font-size: 1.5rem;
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
        .bg-dark-md{
            background-color: var(--color-primary-dark-alt);
            color: white;
        }
    }

    @media (max-width: 767px){
        .page-hero-content{
            height: 40vh;
            max-height: 340px;
        }
    }

    @media (max-width: 500px){
    }
</style>


<!-- Contact Content -->
<!-- <?php
$pageTitle = 'About Us'; 
$heroImage = '../assets/img/counsel.jpg'; 

include 'partials/_page-hero.php';
?> -->

<!-- <section style="background-image: url('../assets/img/counsel.jpg'); height: 50vh; margin-top: -130px; background-size: cover;
        background-repeat: no-repeat;
        background-position: center 25%; background-color: grey; background-blend-mode: multiply;">
</section>

<section class="position-relative mb-4 pb-4" style="display: grid; place-items:center;height: 100px;">
<div class="container d-flex justify-content-center align-items-center" style="position: absolute; top: -120px;">
    <div class="col-md-4 col-12 p-4" style="background-color: var(--color-primary-dark);">
        <div class="px-4 text-white" style="padding: 3rem;">
            <h1 class="h-lg mb-0 px-4 py-1">About <span class="text-accent">Us</span></h1>
            <p class="px-4" style="opacity: 0.7; font-size: 0.8rem;">Who we are and what we do</p>
        </div>
    </div>
    <div class="col-md-6 col-12 p-4" style="background-color: white; padding: 8rem; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px">
        <div style="padding: 4rem;">
            <div class="h-xs h-title">What we stand for</div>
            <br>
            <p class="p-sm">We help you succeed. Whether you're a student, professional, or leader, we guide you to make a lasting impact and unlock your potential.</p>
        </div>
    </div>
</div>
</section> -->

<section class="background-image-section" style="background-image: url('../assets/img/counsel.jpg');"></section>

<section class="position-relative mb-4 pb-4 page-hero-section">
    <div class="row container d-flex justify-content-center">
        <div class="col-md-4 col-12 p-4 dark-background">
            <div class="content-padding">
                <h1 class="h-lg mb-0 px-2 py-1">About <span class="text-accent">Us</span></h1>
                <p class="px-2 opacity-text">What we stand for</p>
            </div>
        </div>
        <div class="col-md-6 col-12 p-2 white-background content-shadow">
            <div class="scope-content">
                <p class="p-sm">We help you succeed. Whether you're a student, professional, or leader, we guide you to make a lasting impact and unlock your potential.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Us -->
<!-- <section class="position-relative d-flex justify-content-center">
    <div class="page-intro">
        <h2 class="h-md text-lg-center text-center">
            Empowering individuals to reach their full potential and make a positive community impact.
        </h2>
    </div>
</section> -->

<section class="cs-section">
    <div class="container row g-4">
        <div class="col-lg-4 col-12">

            <div class="about-card d-flex flex-column gap">
                <div class="icon">
                    <i class="bi bi-briefcase"></i>
                </div>
                <div class="h-sm">What We Stand For</div>
                <div class="p-sm">We help you succeed. Whether you're a student, professional, or leader, we guide you to make a lasting impact and unlock your potential.</div>
            </div>
            <!-- <div class="card flex-fill h-100 d-flex align-items-center flex-column gap p-4">
                <i class="bi bi-flag"></i>
                <div class="h-sm">What We Stand For</div>
                <div class="p-sm text-center">At Empowerment Hub, we believe in the power of personalized coaching and mentorship. Whether you’re a student, young adult, professional, or community leader, we’re here to help you shape your success and make a lasting impact. Join us on this journey to empowerment and discover what you can achieve with the right support and guidance.</div>
            </div> -->
        </div>
        <div class="col-lg-4 col-12">
            <div class="card flex-fill h-100 d-flex align-items-center flex-column gap p-4">
                <i class="bi bi-briefcase"></i>
                <div class="h-sm">What We Do</div>
                <div class="p-sm text-center">At Empowerment Hub, we are dedicated to providing the guidance and support that students and young adults need to thrive. Founded by Ivy Aidoo, a passionate coach and mentor, our mission is to help individuals unlock their full potential and make a positive impact in their communities.</div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card flex-fill h-100 d-flex align-items-center flex-column gap bg-dark p-4">
                <i class="bi bi-award"></i>
                <div class="h-sm">Our Mission</div>
                <div class="p-sm text-center">Our mission is to empower individuals from all walks of life, including university students, young adults, professionals, and community leaders. We aim to help them achieve their full potential and make a positive impact in their communities through personalized coaching, guidance, and support.</div>
            </div>
        </div>

        <div class="col-lg-4 col-12">
            <div class="card flex-fill h-100 d-flex align-items-center flex-column gap bg-dark-md p-4">
                <i class="bi bi-compass"></i>
                <div class="h-sm">Our Vision</div>
                <div class="p-sm text-center">To be the catalyst that transforms students, young adults, professionals, and leaders into empowered change-makers, guiding them to excel and create lasting impact in their communities.</div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card flex-fill h-100 d-flex align-items-center flex-column gap p-4">
                <i class="bi bi-stars"></i>
                <div class="h-sm">Who We Serve</div>
                <div class="p-sm text-center">We are dedicated to empowering a diverse range of individuals, including college students seeking guidance, young adults navigating their career paths, professionals aiming for growth, and community leaders making an impact.</div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card flex-fill h-100 d-flex align-items-center flex-column gap bg-accent p-4">
                <i class="bi bi-globe"></i>
                <div class="h-sm">Community Support</div>
                <div class="p-sm text-center">We gather and distribute gently used clothing, shoes, and personal items to individuals in need, uplifting vulnerable populations while fostering dignity and self-esteem.</div>
                <a href="#" class="btn btn-accent-fill">Learn More</a>
        </div>
        </div>
    </div>
</section>

<section id="about" class="cs-section container">
    <div class="row align-items-stretch">
        <!-- Image Section -->
        <div 
            class="col-md-5 col-12 d-flex" 
            style="background-image: url('../assets/img/about-img.jpg'); background-size: cover; background-position: center; min-height: 300px; border-radius: 1rem;">
        </div>
        <!-- Content Section -->
        <div class="col-md-6 col-12 d-flex flex-column" style="margin-left: auto;">
            <h2 class="h-xs h-title">Meet Ivy Aidoo</h2>
            <h3 class="h-md">The Founder</h3>
            <br>
            <p class="text-justify p-sm"> 
            Ivy’s journey to becoming a coach began with her own transformative experience. She discovered the power of coaching and mentorship, which inspired her to pursue a career dedicated to helping others. With expertise in productivity, motivation, and wellness, Ivy combines her passion for empowering others with practical strategies for success.
            </p>
            <br>
            <a href="#" class="btn btn-accent-outline align-items-center mt-auto" style="width: fit-content;">
                Read More <i class="uil uil-angle-right-b ms-2"></i>
            </a>
        </div>
    </div>
</section>

<section class="cs-section pt-4 bg-primary-light">
    <div class="container py-4 mb-4 ms-mb-2">
        <div class="text-center flex-col justify-center align-center gap">
            <h2 class="h-xs h-title">Meet the Team</h2>
            <h3 class="h-md">Your Partners in Progress!</h3>
        </div>
    </div>
    <div class="container row justify-content-center g-5">
        <?php
            $teamMembers = include BASE_PATH . '/db_files/team-members.php';
            ?>
        <?php foreach($teamMembers as $member): ?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="image-card border-bottom-accent-4 rounded">
                    <div class="card-image" style="background-image:url('../assets/img/user.png')"></div>
                    <div class="card-body">
                        <div class="card-title h-xs"><?php echo htmlspecialchars($member['name']); ?></div>
                        <div class="card-subtitle p-xs">
                            <span><?php echo htmlspecialchars($member['title']); ?></span>
                        </div>
                        <div style="cursor:pointer"
                        data-bs-toggle="modal"
                        data-bs-target="#bioModal"
                        data-name="<?php echo htmlspecialchars($member['name']); ?>"
                        data-position="<?php echo htmlspecialchars($member['title']); ?>"
                        data-image="../assets/img/user.png"
                        data-bio="<?php echo htmlspecialchars($member['bio']); ?>">
                        See Bio
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="bioModal" tabindex="-1" aria-labelledby="bioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="bioModalLabel">Bio Details</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column flex-sm-row gap-md">
                        <div class="col-md-4 col-12">
                            <div class="image-card">
                                <div id="modalImage" class="card-image"></div>
                                <div class="card-body">
                                    <div id="modalName" class="card-title h-sm">...</div>
                                    <div class="card-subtitle p-xs">
                                        <span id="modalPosition">...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column p-2 pb-0">
                            <div  id="modalBio" class="p-sm"></div>
                            <div class="d-flex mt-auto pt-3 text-accent" style="gap: 5px;">
                                <i class="uil uil-linkedin" style="font-size: 1.5rem;"></i>
                                <i class="uil uil-twitter" style="font-size: 1.5rem;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cs-section">
    <div class="flex gap justify-center">
        <a href="services.php" class="btn btn-primary-dark-fill">Our Services</a>
    </div>
</section>

<style>
    .image-card{
        width: 100%;
        box-shadow: rgba(14, 63, 126, 0.04) 0px 0px 0px 1px, rgba(42, 51, 69, 0.04) 0px 1px 1px -0.5px, rgba(42, 51, 70, 0.04) 0px 3px 3px -1.5px, rgba(42, 51, 70, 0.04) 0px 6px 6px -3px, rgba(14, 63, 126, 0.04) 0px 12px 12px -6px, rgba(14, 63, 126, 0.04) 0px 24px 24px -12px;
        color: var(--color-primary-dark-alt);
    }
    .image-card .card-image{
        height: 200px;
        background-size: cover;
        background-position: 50% 40%;
    }
    .image-card .card-body{
        padding: 0.8rem 1rem;
    }
    .image-card .card-title{
        font-size: 1.2rem;
    }
    .border-bottom-accent-4{
        border-bottom: 4px solid var(--color-accent);
    }

    .about-card{
        border-radius: 1rem;
        border: 3px solid rgba(14, 63, 126, 0.04);;
        padding: 2rem 2.5rem;
        font-size: 0.9rem;
    }
    .about-card .icon{
        width: 80px;
        height: 80px;
        display: grid;
        place-items: center;
        background-color: rgba(14, 63, 126, 0.04);
        border-radius: 50%;
        font-size: 1.5rem;
        color: grey;
    }
    
    </style>