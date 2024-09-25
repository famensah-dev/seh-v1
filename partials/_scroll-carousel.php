<div class="scroll-carousel">
    <div class="carousel-track">
        <?php foreach ($items as $data) {
        $title = $data['body'];
        $content = $data['author'];
        $subcontent = $data['profession'];
            include BASE_PATH . '/partials/components/testimonial-card.php'; 
        }?>
    </div>
    <div class="carousel-indicators">
        <?php foreach ($items as $index => $data): ?>
            <span class="carousel-indicator" data-index="<?php echo $index; ?>"></span>
        <?php endforeach; ?>
    </div>
</div>