<?php include 'config.php'; ?>

<!-- Contact Content -->
<?php
$pageTitle = 'Contact Us'; 
$heroImage = '../assets/img/contact-img.jpg'; 

// include 'partials/_page-hero.php';
?>

<section class="background-image-section" style="background-image: url('../assets/img/contact-img.jpg');"></section>

<section class="position-relative mb-4 pb-4 page-hero-section">
    <div class="row container d-flex justify-content-center">
        <div class="col-md-4 col-12 p-4 dark-background">
            <div class="content-padding">
                <h1 class="h-lg mb-0 px-2 py-1">Contact <span class="text-accent">Us</span></h1>
            </div>
        </div>
        <div class="col-md-6 col-12 p-2 white-background content-shadow">
            <div class="scope-content">
                <p class="p-sm">We are more than happy to hear from you. Reach out to us anytime!</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us -->
<section class="cs-section contact-us pb-2 mt-4">
    <div class="container flex-col gap align-center">
        <div class="d-flex gap-lg content align-top">
            <div class="contact-info flex-col gap">
                <h3 class="h-md">Contact Info</h3>
                <div class="flex justify-start p-xs text">
                    <span class="text-accent">
                        <!-- <i class="uil uil-map-marker"></i> -->
                        <i class="bi bi-pin-map"></i>
                    </span>
                    <span class="word-wrap">
                        19 Dzanifio Street, Bawaleshie, East – Legon
                    </span>
                </div>
                <div class="flex justify-start p-xs">
                    <span class="text-accent">
                        <!-- <i class="uil uil-envelope-alt"></i> -->
                        <i class="bi bi-envelope-at"></i>
                    </span>
                    <span class="word-wrap">
                        info@socialempowermenthub.com
                    </span>
                </div>
                <div class="flex justify-start p-xs">
                    <span class="text-accent">
                        <!-- <i class="uil uil-clock-nine"></i> -->
                        <i class="bi bi-clock"></i>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.464748715718!2d-0.1673615249667962!3d5.645694094335571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9ca76aeb41d3%3A0x6f88589a29964ff6!2sDzanifio%20St%2C%20Accra!5e0!3m2!1sen!2sgh!4v1738042754559!5m2!1sen!2sgh" width="600" height="450" style="border:0; width: 100%; height:50vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.2869323481086!2d-0.15828452496660425!3d5.671591594309971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9d995380f175%3A0x2a4472d4491506ee!2sHouse%20of%20Miracle%20Ministry!5e0!3m2!1sen!2sgh!4v1727286292645!5m2!1sen!2sgh" width="" height="" style="border:0; width: 100%; height:50vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
</section>











