<!-- Services -->
<?php
    $pageSpecificJs = '../assets/js/extra.js'; 
    include __DIR__ . '/../db_files/services-data.php'; 
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

<section class="cs-section bg-primary-light">
    <div class="container">
        <div class="content container flex-col gap-lg">
            <div class="text-center d-flex flex-column align-items-center" style="gap: 1rem;">
                <h2 class="h-xs">Our Services</h2>
                <div class="hr hr-md hr-accent hr-thick"></div>
                <h3 class="h-md">Unlock Your True Potential with Our Personalized Coaching Services</h3>
            </div>
        </div>
        <div class="py-4">
            <div class="position-relative">
                <div class="scroll-buttons-container">
                    <button id="scroll-left-button" class="scroll-button"><i class="uil uil-angle-left-b"></i></button>
                    <button id="scroll-right-button" class="scroll-button"><i class="uil uil-angle-right-b"></i></button>
                </div>
                <div class="position-relative d-flex flex-nowrap scrollbar-custom scroll-snap-container scroll-container ml-2 py-4" style="overflow-x:auto; gap:1.5rem;">

                <?php
                    foreach ($services as $data) {
                        include 'components/media-card.php';
                    }
                ?>
                    
                    <!-- <div class="media-card scroll-item" style="background: url();">
                        <div class="card-content">
                            <h3 class="card-title">Card Title 5</h3>
                            <p class="card-description">This is some descriptive text that goes inside the card.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services End -->