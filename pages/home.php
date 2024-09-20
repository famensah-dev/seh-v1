<!-- HomeContent -->
<section class="hero container">
        <div class="content">
            <div class="flex-col align-center">
                <h1 class="h-md font-caveat"> Welcome to Social Empowerment Hub</h1>
                <hr class="hr hr-md hr-thick hr-accent">
                <h2 class="h-xl">
                    You are Empowered! <br>
                    <span class="text-color-accent">You are Capable!</span> <br>
                    You are Unstoppable!
                </h2>
                <p class="p-sm font-caveat">Explore our resources, join our community, and get ready to unlock your full potential!</p>
                <div class="hero-buttons">
                    <a class="btn btn-primary-dark-fill" href="#">What We Offer</a>
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
                <h3 class="h-sm">Academic Support</h3>
                <p class="p-sm">Elevate Your Learning Journey</p>
            </div>
        </div>
        <div class="hero-card">
            <div><i class="uil uil-shield-check"></i></div>
            <div class="content">
                <h3 class="h-sm">Career Counselling</h3>
                <p class="p-sm">Receive professional support</p>
            </div>
        </div>
        <div class="hero-card">
            <div><i class="uil uil-thumbs-up"></i></div>
            <div class="content">
                <h3 class="h-sm">Mentorship Schemes</h3>
                <p class="p-sm">Career Advancement</p>
            </div>
        </div>  
        <div class="hero-card">
            <div><i class="uil uil-thumbs-up"></i></div>
            <div class="content">
                <h3 class="h-sm">Personalized Coaching</h3>
                <p class="p-sm">Expert Guidance</p>
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
                    class="image-container">
                </div>
                <div class="flex-col flex-grow gap">
                    <h2 class="h-md font-caveat">About Us</h2>
                    <div class="hr hr-thick hr-md hr-accent"></div>
                    <h3 class="h-md text-blue">We Support Your Goals</h3>
                    <p class="p-sm" style="text-align: justify;">At Empowerment Hub, we believe in the power of community, support, and resources to help you achieve your goals and dreams. Our platform is designed to empower you with the tools, knowledge, and connections you need to succeed. <br><br>
                    Whether you’re a student, professional, or simply looking for personal growth, we’re here to support you every step of the way. Our community is built on values of inclusivity, diversity, and empathy, and we’re committed to creating a safe and supportive environment for all.</p>
                    <a href="#" style="width: fit-content;" class="p-sm">READ MORE <i class="uil uil-angle-right-b"></i></a>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Services -->
        <?php include('partials/_services.php') ?>
        <!-- Services End -->

        <!-- Contact Us -->
        <section id="contact" class="cs-section contact-us contact-bg-image">
            <div class="container flex-col gap align-center">
                <div class="text-center flex-col justify-center align-center gap">
                    <h2 class="h-sm text-white font-caveat">Contact Us</h2>
                    <div class="hr hr-thick hr-md hr-accent"></div>
                    <h3 class="h-md text-white">We’re Here to Help</h3>
                    <p class="p-sm text-white">Have questions or inquiries? Feel free to reach out to us! Our dedicated team is here to assist you with any queries you may have regarding our services or anything else. </p>
                </div>
                <div class="d-flex gap-lg content align-top">
                    <div class="contact-info flex-col gap-lg">
                        <h3 class="h-md">Contact Info</h3>
                        <div class="flex justify-start ">
                            <i class="uil uil-map-marker"></i>
                            <span>
                                <span>19 Dzanifio Street, </span> Bawaleshie, East – Legon
                            </span>
                        </div>
                        <div class="flex justify-start ">
                            <i class="uil uil-envelope-alt"></i>
                            <span>
                                info@<span>socialempowermenthub.com</span>
                            </span>
                        </div>
                        <div class="flex justify-start ">
                            <i class="uil uil-clock-nine"></i>
                            <span>
                                Mon - Fri, 9 a.m. – 5 p.m.
                            </span>
                        </div>
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
    </main>
<!-- Home Content End -->