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

    @media (max-width: 767px){
        .page-hero-content{
            height: 60vh;
            max-height: 340px;
        }
    }

    @media (max-width: 500px){
        
    }
</style>


<!-- Contact Content -->
<?php
$pageTitle = 'Contact Us'; 
$heroImage = '../assets/img/contact-img.jpg'; 

include 'partials/_page-hero.php';
?>

<!-- Contact Us -->
<section id="contact" class="cs-section contact-us" style="padding-bottom: 0;">
    <div class="container flex-col gap align-center">
        <div class="text-center flex-col justify-center align-center gap">
            <h3 class="h-md py-2">We'd love to hear from you! Reach out to us anytime.</h3>
            <!-- <div class="hr hr-thick hr-md hr-accent"></div> -->
        </div>
        <div class="d-flex gap-lg content align-top">
            <div class="contact-info flex-col gap">
                <h3 class="h-md">Contact Info</h3>
                <div class="flex justify-start p-xs text">
                    <span class="text-accent">
                        <i class="uil uil-map-marker"></i>
                    </span>
                    <span class="word-wrap">
                        19 Dzanifio Street, Bawaleshie, East – Legon
                    </span>
                </div>
                <div class="flex justify-start p-xs">
                    <span class="text-accent">
                        <i class="uil uil-envelope-alt"></i>
                    </span>
                    <span class="word-wrap">
                        info@socialempowermenthub.com
                    </span>
                </div>
                <div class="flex justify-start p-xs">
                    <span class="text-accent">
                        <i class="uil uil-clock-nine"></i>
                    </span>
                    <span>
                        Mon - Fri, 9 a.m. – 5 p.m.
                    </span>
                </div>
                <div class="d-flex flex-col gap-1">
                    <h3 class="h-xs">Follow us on our social platforms:</h3>
                    <ul class="d-flex gap" style="opacity: 0.5;">
                        <li><i class="uil uil-facebook-f hover-accent"></i></li>
                        <li><i class="uil uil-twitter hover-accent"></i></li>
                        <li><i class="uil uil-instagram hover-accent"></i></li>
                        <li><i class="uil uil-whatsapp hover-accent"></i></li>
                    </ul>
                </div>
                <!-- <p class="p-sm text-white" style="width: 50%;">Our dedicated team is here to assist you with any queries you may have regarding our services or anything else. </p> -->
            </div>  
            <hr class="hr-y" style="background-color: rgba(0, 0, 0, 0.3);">
            <form method="post" id="contactForm" class="form gap flex-grow text-primary-dark">
                <div class="flex row">
                    <div class="formInput">
                        <label for="firstname" class="required-accent">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="contact-form-field" placeholder="John" required>
                    </div>
                    <div class="formInput">
                        <label for="lastname" class="required-accent">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="contact-form-field" placeholder="Doe" required>
                    </div>
                </div>
                <div class="formInput">
                    <label for="email" class="required-accent">Email</label>
                    <input type="email" name="email" id="email" class="contact-form-field" placeholder="johndoe@example.com" required>
                </div>
                <div class="formInput">
                    <label for="message" class="required-accent">How can we help you?</label>
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

<section>
    <!-- <gmp-map
        center="37.4220656,-122.0840897"
        zoom="10"
        map-id="DEMO_MAP_ID"
        style="height: 400px"
        ></gmp-map> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.2869323481086!2d-0.15828452496660425!3d5.671591594309971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9d995380f175%3A0x2a4472d4491506ee!2sHouse%20of%20Miracle%20Ministry!5e0!3m2!1sen!2sgh!4v1727286292645!5m2!1sen!2sgh" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>











