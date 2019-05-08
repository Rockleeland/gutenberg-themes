<?php echo '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />'; ?>

<div class="container">
  <h4><?php block_field( 'title'); ?></h4>
  <p><?php block_field( 'text'); ?></p>
  <a class="call-button" href="<?php block_field( 'button-url'); ?>">
    <?php block_field( 'button-text') ; ?>
  </a>
</div>
