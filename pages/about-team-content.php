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
        height: 32vh;
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

</style>

<section class="cs-section">
    <div class="container py-4 mb-4 ms-mb-2">
        <div class="text-center flex-col justify-center align-center gap">
            <h2 class="h-xs">Meet the Team</h2>
            <h3 class="h-md">Your Partners in Progress!</h3>
        </div>
    </div>
    <div class="container row justify-content-center gap-lg">
        <?php
            $teamMembers = include BASE_PATH . '/db_files/team-members.php';
        ?>
        <?php foreach($teamMembers as $member): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="image-card border-bottom-accent-4">
                    <div class="card-image" style="background-image:url('../assets/img/user.png')"></div>
                    <div class="card-body">
                        <div class="card-title h-sm"><?php echo htmlspecialchars($member['name']); ?></div>
                        <div class="card-subtitle p-xs">
                            <span><?php echo htmlspecialchars($member['title']); ?></span>
                            <span style="cursor:pointer"
                                data-bs-toggle="modal"
                                data-bs-target="#bioModal"
                                data-name="<?php echo htmlspecialchars($member['name']); ?>"
                                data-position="<?php echo htmlspecialchars($member['title']); ?>"
                                data-image="../assets/img/user.png"
                                data-bio="<?php echo htmlspecialchars($member['bio']); ?>">
                                See Bio
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="bioModal" tabindex="-1" aria-labelledby="bioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="bioModalLabel">Bio Details</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex gap-md">
                        <div class="col-4">
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
                                <i class="uil uil-linkedin" style="font-size: 1.5rem;;"></i>
                                <i class="uil uil-twitter" style="font-size: 1.5rem;;"></i>
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