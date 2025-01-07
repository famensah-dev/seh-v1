<?php
include 'config.php'; 
$pageTitle = 'Services'; 
$heroImage = '../assets/img/counsel.jpg'; 

include 'partials/_page-hero.php';
?>

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

<!-- Services -->
<?php include('partials/_services.php') ?>
<!-- Services End -->
    
<section class="cs-section">
    <div class="row container">
        <div class="col-lg-6 col-sm-12" style="border-radius:1.5rem; background-image: url('../assets/img/baby.jpg');">Parent's Corner</div>
        <div class="col-lg-6 col-sm-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus voluptate quia optio quisquam eos, corrupti architecto? Est nam incidunt dolorem dolor, cum suscipit aut nemo reiciendis deserunt, quia numquam voluptatem qui dolores quae fugit. Beatae sed delectus omnis velit aliquid ut repellendus voluptas sunt tempora deserunt, iste nostrum dignissimos nulla in soluta odio asperiores ad quae placeat a iure? Fuga commodi enim molestias! Quos quaerat consequatur excepturi, odio incidunt unde doloremque tempora optio nemo, voluptatibus quidem perspiciatis sapiente voluptatum explicabo ab! Velit aperiam eum doloremque placeat quia provident facere hic incidunt ipsum. Autem molestias at porro itaque, temporibus unde error!</div>
    </div>
    <div class="row container flex-reverse" style="margin-top: 6rem;">
        <div class="col-lg-6 col-sm-12" style="border-radius:1.5rem; background-image: url('../assets/img/baby.jpg');">Parent's Corner</div>
        <div class="col-lg-6 col-sm-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus voluptate quia optio quisquam eos, corrupti architecto? Est nam incidunt dolorem dolor, cum suscipit aut nemo reiciendis deserunt, quia numquam voluptatem qui dolores quae fugit. Beatae sed delectus omnis velit aliquid ut repellendus voluptas sunt tempora deserunt, iste nostrum dignissimos nulla in soluta odio asperiores ad quae placeat a iure? Fuga commodi enim molestias! Quos quaerat consequatur excepturi, odio incidunt unde doloremque tempora optio nemo, voluptatibus quidem perspiciatis sapiente voluptatum explicabo ab! Velit aperiam eum doloremque placeat quia provident facere hic incidunt ipsum. Autem molestias at porro itaque, temporibus unde error!</div>
    </div>
    <div class="row container" style="margin-top: 6rem;">
        <div class="bg-dark" style="border-radius: 2rem; height: 400px;"></div>
        <div style="margin-top: 2rem;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vel sequi obcaecati dolor molestias delectus fuga facilis optio, ea illum ut vero aliquam est nesciunt omnis beatae tenetur nam perspiciatis accusamus non. Autem minima minus sapiente! Odit fugit dolores eveniet, inventore error possimus iste nulla qui sapiente nam eaque, ullam suscipit. Neque nihil velit doloribus, fugit reprehenderit provident, ducimus quibusdam ipsum totam vitae, laborum maxime illum voluptatem! Repudiandae dolore reiciendis architecto quia sed necessitatibus, officiis recusandae! Non eaque saepe ut, exercitationem est vel omnis, quisquam dolores tenetur officia consequuntur deleniti error! Obcaecati sint quasi facere suscipit dolore facilis neque architecto.
        </div>
    </div>
</section>