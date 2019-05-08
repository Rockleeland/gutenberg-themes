<?php echo '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />'; ?>

<div style="
  background-color: #f7f7f7;
  padding: 20px;
  border: 2px solid #f4f4f4;
  border-radius: 4px;
  text-align: center;"
  class="container"
>
  <h4><?php block_field( 'title'); ?></h4>
  <p><?php block_field( 'text'); ?></p>
  <a 
    style="
      display: inline-block;
      background-color: #333;
      color: #fff;
      padding: 12px 20px;
      border-radius: 3px;"
    class="call-button" 
    href="<?php block_field( 'button-url'); ?>">
    <?php block_field( 'button-text') ; ?>
  </a>
</div>
