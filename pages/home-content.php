<?php include 'config.php'; ?>

<!-- HomeContent -->
<section class="hero container">
    <div class="content">
        <div class="flex-col align-center">
            <h1 class="h-xs" style="margin-top:10vh;">Social Empowerment Hub</h1>
            <h2 class="h-xl">
                You are Empowered. <span>You are Capable. </span><br>You are Unstoppable.
            </h2>
            <p class="p-sm">Explore our resources, join our community, and get ready to unlock your full potential!</p>
            <div class="hero-buttons">
                <a class="btn btn-accent-fill" href="#">What We Offer</a>
            </div> 
        </div>
    </div>
</section>
<div class="hero-bg-image scaleAnimation">
    <div class="overlay"></div>
</div>

<section class="bg-color-dark">
    <div class="hero-cards container scrollbar-custom">
    <div class="hero-card">
        <div><i class="uil uil-star"></i></div>
        <div class="content">
            <h3 class="h-xs">Academic Support</h3>
            <p class="p-xs">Elevate Your Learning Journey</p>
        </div>
    </div>
    <div class="hero-card">
        <div><i class="uil uil-shield-check"></i></div>
        <div class="content">
            <h3 class="h-xs">Career Counselling</h3>
            <p class="p-xs">Receive professional support</p>
        </div>
    </div>
    <div class="hero-card">
        <div><i class="uil uil-thumbs-up"></i></div>
        <div class="content">
            <h3 class="h-xs">Mentorship Schemes</h3>
            <p class="p-xs">Career Advancement</p>
        </div>
    </div>  
    <div class="hero-card">
        <div><i class="uil uil-thumbs-up"></i></div>
        <div class="content">
            <h3 class="h-xs">Personalized Coaching</h3>
            <p class="p-xs">Expert Guidance</p>
        </div>
    </div>  
    </div>      
</section>

<main>
    <!-- About -->
    <section id="about" class="cs-section container row gap-md">
        <div class="content flex-col gap-lg">
        <div class="d-flex gap-md">
            <div 
                class="image-container" style="background-image: url('../assets/img/about-img.jpg')">
            </div>
            <div class="flex-col flex-grow gap">
                <h2 class="h-xs">About Us</h2>
                <h3 class="h-md text-blue">We Support Your Goals</h3>
                <div class="hr hr-thick hr-md hr-accent"></div>
                <p class="p-sm" style="text-align: justify;">At Empowerment Hub, we believe in the power of community, support, and resources to help you achieve your goals and dreams. Our platform is designed to empower you with the tools, knowledge, and connections you need to succeed. <br><br>
                Whether you’re a student, professional, or simply looking for personal growth, we’re here to support you every step of the way. Our community is built on values of inclusivity, diversity, and empathy, and we’re committed to creating a safe and supportive environment for all.</p>
                <a href="#" style="width: fit-content;" class="p-sm btn btn-accent-fill">Read More <i class="uil uil-angle-right-b" style="font-size: 1rem;;"></i></a>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Services -->
    <?php include('partials/_services.php') ?>
    <!-- Services End -->

    <!-- Contact Us -->
    <section id="contact" class="cs-section contact-us contact-bg-image" style="background-image: url('../assets/img/contact-img.jpg');">
        <div class="container flex-col gap align-center">
            <div class="text-center flex-col justify-center align-center gap">
                <h2 class="h-xs text-white">Contact Us</h2>
                <h3 class="h-md text-white">Have questions or inquiries? Feel free to reach out to us!</h3>
                <!-- <div class="hr hr-thick hr-md hr-accent"></div> -->
            </div>
            <div class="d-flex gap-lg content text-white align-top">
                <div class="contact-info flex-col gap-md">
                    <h3 class="h-md">Contact Info</h3>
                    <div class="flex justify-start p-xs">
                        <i class="uil uil-map-marker"></i>
                        <span class="word-wrap">
                            19 Dzanifio Street, Bawaleshie, East – Legon
                        </span>
                    </div>
                    <div class="flex justify-start p-xs">
                        <i class="uil uil-envelope-alt"></i>
                        <span class="word-wrap">
                            info@socialempowermenthub.com
                        </span>
                    </div>
                    <div class="flex justify-start p-xs">
                        <i class="uil uil-clock-nine"></i>
                        <span>
                            Mon - Fri, 9 a.m. – 5 p.m.
                        </span>
                    </div>
                    <!-- <p class="p-sm text-white" style="width: 50%;">Our dedicated team is here to assist you with any queries you may have regarding our services or anything else. </p> -->
                </div>  
                <hr class="hr-y" style="background-color: rgba(255, 255, 255, 0.5);">
                <form method="post" id="contactForm" class="form gap flex-grow">
                    <div class="flex row">
                        <div class="formInput">
                            <label for="firstname" class="required">First Name</label>
                            <input type="text" name="firstname" id="firstname" class="contact-form-field" placeholder="John" required>
                        </div>
                        <div class="formInput">
                            <label for="lastname" class="required">Last Name</label>
                            <input type="text" name="lastname" id="lastname" class="contact-form-field" placeholder="Doe" required>
                        </div>
                    </div>
                    <div class="formInput">
                        <label for="email" class="required">Email</label>
                        <input type="email" name="email" id="email" class="contact-form-field" placeholder="johndoe@example.com" required>
                    </div>
                    <div class="formInput">
                        <label for="message" class="required">How can we help you?</label>
                        <textarea name="message" id="message" class="contact-form-field" rows="4" placeholder="Your message" required></textarea>
                    </div>
                    <button id="btnSpinner" class="btn btn-primary-dark-fill" type="button" onClick="submitForm()">
                        <span class="btn-spinner">Send Message <i class="uil uil-message text-accent"></i></span>
                    </button>
                </form>
            
            </div>
        </div>
    </section>
    <!-- Contact Us End -->

    <!-- Testimonials -->

    
    <section class="cs-section">
        <div class="text-center flex-col justify-center align-center gap">
            <h2 class="h-xs text-center">Testimonials</h2>
            <h3 class="h-md">Hear what our clients have to say about us.</h3>
        </div>
        <?php 
            $items = include BASE_PATH . '/db_files/testimonials-data.php';
            include BASE_PATH . '/partials/_scroll-carousel.php'
        ?>            
    </section>
    <!-- Testimonials End -->
</main>
<!-- Home Content End -->