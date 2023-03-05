<?php  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Description of your website">
    <title>My Dynamic Web Page</title>
    <!-- Add any necessary stylesheets or scripts here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
  </head>
  <body>
    <header>
       <nav>
       <?php wp_nav_menu(array('theme_location'=>'primary-menue','menue_class'=>'nav'))?>
       <!--
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        -->
      </nav>
    </header>