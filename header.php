<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  <?php the_title(); ?>
  </title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="header" style="bg-image: url(<?php echo CFS()->get('header_bg'); ?>)">
    <div class="container">
      <a href="<?php echo home_url(); ?>">Home</a>
      <h1 class="header_title"><?php echo CFS()->get('header_title'); ?></h1>
      <p class="header_text"><?php echo CFS()->get('header_text'); ?></p>
      <button class="header_button">Find out more</button>
    </div>
  </header>