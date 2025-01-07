<div class="container overflow-hidden py-4">
    <div class="scroll-carousel">
        <div class="testimonials-swiper position-relative">
            <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($items as $data) { 
                $title = $data['body'];
                $content = $data['author'];
                $subcontent = $data['profession'];
                ?>
                <div class="swiper-slide">
                    <?php include BASE_PATH . '/partials/components/testimonial-card.php'; ?>
                </div>
            <?php } ?>
            </div>
            <!-- If we need pagination -->
            <div id="testimonials-pagination" class="swiper-pagination"></div>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function(){

        const pagination = document.querySelector('#testimonials-pagination')
        console.log(pagination);
        if(!pagination){
            console.error('Pagination element not found.');
        }

        const testimonialsSwiper = new Swiper('.testimonials-swiper', {
            slidesPerView: 'auto',
                loop: true,
                centeredSlides: true,
                slideToClickedSlide: true,
                roundLengths: true,
                autoplay: {
                    delay: 9000,
                    disableOnInteraction: false,
                },
                speed: 1200,
                effect: 'slide',
                easing: 'ease-in-out',
                pagination: {
                    el: pagination,
                    clickable: true,
                },
                navigation: {
                    nextEl: '.services-nav.swiper-button-next',
                    prevEl: '.services-nav.swiper-button-prev',
                },
    
      });
    });
</script>