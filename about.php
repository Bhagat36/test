<?php 
/*
Template name: about
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
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
      <?php 
$args = array( 'post_type' => 'about', 'posts_per_page' => 2 );
$new_query = new WP_Query( $args ); 
//$firstSlide = true;
if ($new_query->have_posts()) {
    while($new_query->have_posts()){
        $new_query->the_post();
     // echo '<pre>';print_r($post);die();
        $title = $post->post_title; 
      $description = $post->post_content;
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="col-lg-6">
          <a class="img-fluid rounded mb-4" ><?php  the_post_thumbnail('featuredImage3'); ?></a>
        </div>
        <div class="col-lg-6">
          <h2><?php echo $title; ?></h2>
          <p><?php echo $description; ?></p>
          
       
        </div>
        <?php
         }
        }
        ?>
      </div>
      <br>
      <br>
      <!-- /.row -->

      <!-- Team Members -->

<div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">

            
        <div class="carousel-inner" role="listbox">
        
          <!--First Slide work-->
             <div class="carousel-item active">
              <div class="row">
              
              <?php
                $args = array(
                'post_type' =>'team',
                'posts_per_page' => 3,
                );
                $posts = new WP_Query( $args );
                if ( $posts -> have_posts() ) :
                  while ( $posts -> have_posts() ) :
                  $posts->the_post();
              ?>         
               <!--First three images print-->
                    <div class="col-lg-4 mb-4">
                      <div class="card h-100 text-center">
                        <img class="card-img-top" <?php the_post_thumbnail('featuredImageCropped'); ?>
                        <div class="card-body">
                         <!-- <h4 class="card-title">Team Member</h4>-->
                          <h6 class="card-subtitle mb-2 text-muted"><?php the_title();?></h6>
                          <p class="card-text"><?php the_excerpt();?></p>
                        </div>
                       </div> 
                       </div>       
                    <?php endwhile; endif; ?>
                    </div>
                    </div>
              <!--First Slide work end-->

              <!--Second Slide work-->
                  <div class="carousel-item"> 
                    <div class="row">                                
                        <?php
                          $args = array(
                          'post_type' =>'team',
                          'posts_per_page' => 3,
                          'offset' => 3,
                          );
                          $posts = new WP_Query( $args );
                           if ( $posts -> have_posts() ) :
                            while ( $posts -> have_posts() ) :
                            $posts->the_post();
                        ?>
                        <?php //$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'single_post_thumbnail'); ?>

                            <!--Print next slide-->
                        <div class="col-lg-4 mb-4">
                      <div class="card h-100 text-center">
                        <img class="card-img-top" <?php the_post_thumbnail('featuredImageCropped'); ?>
                        <div class="card-body">
                         <!-- <h4 class="card-title">Team Member</h4>-->
                          <h6 class="card-subtitle mb-2 text-muted"><?php the_title();?></h6>
                          <p class="card-text"><?php the_excerpt();?></p>
                        </div>
                       </div> 
                       </div>       
                    <?php endwhile; endif; ?>
                    </div>
                    </div>

                 <!--Second Slide work end-->
                    
                  <!--Third Slide work-->  
                    <div class="carousel-item">                
                      <div class="row">
                        <?php
                          $args = array(
                          'post_type' =>'team',
                          'posts_per_page' => 3,
                          'offset' => 6,
                          );
                          $posts = new WP_Query( $args );
                           if ( $posts -> have_posts() ) :
                            while ( $posts -> have_posts() ) :
                            $posts->the_post();
                        ?>
                        <?php //$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'single_post_thumbnail'); ?>

                            <!--Avatar-->
                            <div class="col-lg-4 mb-4">
                      <div class="card h-100 text-center">
                        <img class="card-img-top" <?php the_post_thumbnail('featuredImageCropped'); ?>
                        <div class="card-body">
                         <!-- <h4 class="card-title">Team Member</h4>-->
                          <h6 class="card-subtitle mb-2 text-muted"><?php the_title();?></h6>
                          <p class="card-text"><?php the_excerpt();?></p>
                        </div>
                       </div> 
                       </div>       
                    <?php endwhile; endif; ?>
                    </div>
                    </div>
            
                  <!--Third Slide work end-->
                  </div>
                  </div>
                  <!-- carousel end -->
                  <br>
      <br>
      <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">
<div class="carousel-inner" role="listbox">
        
          <!--First Slide work-->
             <div class="carousel-item active">
              <div class="row">
              
              <?php
                $args = array(
                'post_type' =>'team',
                'posts_per_page' => 3,
                );
                $posts = new WP_Query( $args );
                if ( $posts -> have_posts() ) :
                  while ( $posts -> have_posts() ) :
                  $posts->the_post();
              ?>         
               <!--First three images print-->
                    <div class="col-lg-4 mb-4">
                      <div class="card h-100 text-center">
                        <img class="card-img-top" <?php the_post_thumbnail('featuredImageCropped'); ?>
                        <div class="card-body">
                         <!-- <h4 class="card-title">Team Member</h4>-->
                          <h6 class="card-subtitle mb-2 text-muted"><?php the_title();?></h6>
                          <p class="card-text"><?php the_excerpt();?></p>
                        </div>
                       </div> 
                       </div>       
                    <?php endwhile; endif; ?>
                    </div>
                    </div>
              <!--First Slide work end-->

              <!--Second Slide work-->
                  <div class="carousel-item"> 
                    <div class="row">                                
                        <?php
                          $args = array(
                          'post_type' =>'team',
                          'posts_per_page' => 3,
                          'offset' => 3,
                          );
                          $posts = new WP_Query( $args );
                           if ( $posts -> have_posts() ) :
                            while ( $posts -> have_posts() ) :
                            $posts->the_post();
                        ?>
                        <?php //$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'single_post_thumbnail'); ?>

                            <!--Print next slide-->
                        <div class="col-lg-4 mb-4">
                      <div class="card h-100 text-center">
                        <img class="card-img-top" <?php the_post_thumbnail('featuredImageCropped'); ?>
                        <div class="card-body">
                         <!-- <h4 class="card-title">Team Member</h4>-->
                          <h6 class="card-subtitle mb-2 text-muted"><?php the_title();?></h6>
                          <p class="card-text"><?php the_excerpt();?></p>
                        </div>
                       </div> 
                       </div>       
                    <?php endwhile; endif; ?>
                    </div>
                    </div>

                 <!--Second Slide work end-->
                    
                  <!--Third Slide work-->  
                    <div class="carousel-item">                
                      <div class="row">
                        <?php
                          $args = array(
                          'post_type' =>'team',
                          'posts_per_page' => 3,
                          'offset' => 6,
                          );
                          $posts = new WP_Query( $args );
                           if ( $posts -> have_posts() ) :
                            while ( $posts -> have_posts() ) :
                            $posts->the_post();
                        ?>
                        <?php //$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'single_post_thumbnail'); ?>

                            <!--Avatar-->
                            <div class="col-lg-4 mb-4">
                      <div class="card h-100 text-center">
                        <img class="card-img-top" <?php the_post_thumbnail('featuredImageCropped'); ?>
                        <div class="card-body">
                         <!-- <h4 class="card-title">Team Member</h4>-->
                          <h6 class="card-subtitle mb-2 text-muted"><?php the_title();?></h6>
                          <p class="card-text"><?php the_excerpt();?></p>
                        </div>
                       </div> 
                       </div>       
                    <?php endwhile; endif; ?>
                    </div>
                    </div>
            
                  <!--Third Slide work end-->
                  </div>

      </div>
      </div>
      <br>
      <br>
      <!--Carousel Wrapper-->                                                   

   <!-- /.container -->

    <?php
get_footer();
?>
