<?php 
/*
Template name: contact
*/
    get_header();
    ?>
<!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php bloginfo('name'); ?>
        <small><?php  if(wp_title('', false)) { echo '|'; } else { echo bloginfo('description'); } wp_title(''); ?></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15048943.001972632!2d37.94107456715784!3d22.948078087964134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e22a22f1ee601df%3A0x2d193a48607e74cb!2sArabia!5e0!3m2!1sen!2sin!4v1520503975053" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <?php
                        dynamic_sidebar('contact');
                        ?>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

<h3 align="center">Contact Us</h3>
<h6 align="center">
<?php

dynamic_sidebar('action');
?>
</h6>
      

    </div>
    <!-- /.container -->
    <?php 
    get_footer();
    ?>
