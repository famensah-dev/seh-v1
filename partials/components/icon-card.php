<?php
// Assuming this is in a file called icon-card.php

// Sample data for testing
// $data = [
//     'height' => '200px',
//     'maxWidth' => '300px',
//     'icon' => 'fas fa-user',
//     'image' => 'path/to/image1.jpg',
//     'title' => 'Card Title 1',
//     'details' => 'Details about card 1.',
// ];
?>

<div class="icon-card" style="height:<?php echo isset($data['height']) ? $data['height'] : 'auto'; ?>; max-width: <?php echo isset($data['maxWidth']) ? $data['maxWidth'] : '100%'; ?>;">
    <?php if (isset($data['icon']) && $data['icon']): ?>
        <div class="card-icon">
            <i class="<?php echo $data['icon']; ?>"></i>
        </div>
    <?php endif; ?>

    <?php if (isset($data['image']) && $data['image']): ?>
        <div class="card-image">
            <img src="<?php echo $data['image']; ?>" alt="" style="width: 100%; height: auto;">
        </div>
    <?php endif; ?>

    <div class="card-content text-center">
        <?php if (isset($data['title']) && $data['title']): ?>
            <div class="card-title">
                <p class="p-sm"><?php echo $data['title']; ?></p>
            </div>
        <?php endif; ?>

        <?php if (isset($data['details']) && $data['details']): ?>
            <div class="card-details">
                <span><?php echo $data['details']; ?></span>
            </div>
        <?php endif; ?>
    </div>
</div>

