<?php
    $image = isset($data['image']) ? $data['image'] : 'default.jpg';
    $title = isset($data['title']) ? $data['title'] : 'Default Title';
    $description = isset($data['description']) ? $data['description'] : 'Default description goes here.';
?>

<div class="media-card scroll-item" style="background-image: url('<?php echo '/../assets/img/'. $image; ?>');">
    <div class="card-content">
        <h3 class="card-title">
            <?php echo $title; ?>
        </h3>
        <p class="card-description p-xs">
            <?php echo $description; ?>
        </p>
    </div>
</div>
