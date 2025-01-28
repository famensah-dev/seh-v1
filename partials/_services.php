<!-- Services -->
<?php
    $pageSpecificJs = '../assets/js/services-swiper.js'; 
    include __DIR__ . '/../db_files/services-data.php'; 
    $currentPage = basename($_SERVER['PHP_SELF']); // Get the current file name
?>

<style>
.circle{
    border-radius: 50%;
    width: 30px;
    min-width: 30px;
    height: 30px;
    min-height: 30px;
    background-color: rgb(228, 239, 253);
    font-weight: bold;
    color: rgb(7, 37, 81); 
    text-align: center;
    vertical-align: center;
    font-size: 0.9rem;
}
.active .circle{
    color: white;
    background-color: rgb(7, 37, 81); 
}

.grid.four-columns.even{
    width: 100%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 8px;
}

.media-card {
    position: relative;
    width: 100%;
    max-width: 280px;
    min-width: 280px;
    height: 380px;
    margin-top: 4px;
    transition: margin-top 0.3s ease-in-out;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
    background-size: cover;
    background-position: top center;
    display: flex;
    align-items: flex-end;
    scroll-snap-align: start;
}

.media-card:hover{
    margin-top: 0;
}

.media-card .card-content {
    height: 70%;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px 15px 30px 15px;
    background: linear-gradient(to top, rgba(22, 22, 22, 0.85), rgba(0, 0, 0, 0)); /* Gradient overlay */
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: end;
}

.media-card .card-title {
    font-size: 1.2rem;
    margin: 0;
    color: white;
}

.media-card .card-description {
    font-size: 0.9rem;
    margin: 5px 0 0;
}

.scroll-snap-container {
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth; 
    gap: 1rem;
}

.scroll-buttons-container{
    width: 100%;
    display: flex;
    justify-content: space-between;
    position: absolute;
    top: 45%;
    left: -1.8rem;
    z-index: 100;
}

.scroll-button{
    max-width: 4rem;
    max-height: 4rem;
    min-width: 4rem;
    min-height: 4rem;
    border-radius: 50%;
    border: none;
    background-color: white;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
    font-size: 2.5rem;
    text-align: center;
    color: var(--color-accent);
    /* color: #006eff; */
}

.scroll-button:focus{
    border: none;
    outline: none;
}

.inactive{
    opacity: 0.4;
}



@media (max-width: 767px) {
    .media-card {
        width: 80%;
    }
    .circle{
        width: 20px;
        height: 20px;
        font-size: 11px;
    }

    .scroll-buttons-container{
        width: 100%;
        left: -1rem;
    }

    .grid.four-columns.even{
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 360px) {
    .media-card{
        max-width: 100%;
        min-width: 100%;
    }
    .scroll-snap-container {
        gap: 0.5rem;
    }

    .scroll-buttons-container{
        width: 110%;
    }

    .grid.four-columns.even{
        grid-template-columns: repeat(1, 1fr);
    }
}
</style>

<div class="container">
    <div>
        <h2 class="h-xs h-title">Our Services</h2>
        <br>
        <div class="row">
            <div class="col-md-6 col-12">
                <h3 class="h-md">Unlock Your True Potential with Our Personalized Coaching Services</h3>
            </div>
            <div class="col-md-6 col-12 p-sm d-flex gap justify-content-between align-items-start">
                <div>
                    From one-on-one coaching to group workshops and specialized programs, we provide a wide range of services to suit your needs.
                </div>

                <?php if ($currentPage !== 'services.php') { ?>
                    <div>
                        <a href="services.php" class="btn btn-primary-dark-outline" style="width: fit-content;">LearnMore</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="py-4 overflow-hidden">
        <div class="services-swiper position-relative">
            <div class="swiper-wrapper">
                <?php
                    foreach ($services as $data) {
                        echo '<div class="swiper-slide">';
                        include 'components/media-card.php';
                        echo '</div>';
                    }
                ?>
            </div>
            <!-- Navigation buttons -->
            <div class="services-nav swiper-button-prev"></div>
            <div class="services-nav swiper-button-next"></div>
            <div class="services-pagination swiper-pagination"></div>
        </div>
    </div>

</div>

<style>
    .services-swiper{
        /* width: 100%; */
    }

    .services-swiper .swiper-slide{
        width: fit-content;
        min-width: 250px;
    }

    .services-nav.swiper-button-next,
    .services-nav.swiper-button-prev{
        max-width: 4rem;
        max-height: 4rem;
        min-width: 4rem;
        min-height: 4rem;
        border-radius: 50%;
        border: none;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
        color: var(--color-accent);
        position: absolute;
        z-index: 2;
        transform: translateY(0%);
    }
    .services-nav.swiper-button-next::after,
    .services-nav.swiper-button-prev::after
    {
        font-size: 1.4rem;
        font-weight: bold;
    }

    .services-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active{
        background: var(--color-accent);
    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', function(){

        const servicesSwiper = new Swiper('.services-swiper', {
            slidesPerView: 'auto',
                centeredSlides: true,
                loop: true,
                spaceBetween: 14,
                slideToClickedSlide: true,
                roundLengths: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                speed: 500,
                effect: 'slide',
                easing: 'ease-in-out',
                pagination: {
                    el: '.services-pagination.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.services-nav.swiper-button-next',
                    prevEl: '.services-nav.swiper-button-prev',
                },
    
      });
    });
</script>

<!-- Services End -->