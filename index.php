<?php 
get_header();
?>
<!-- page slider -->
<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="<?php echo $active ; ?>"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
        <?php 
$args = array( 'post_type' => 'slider', 'posts_per_page' => 10 );
$new_query = new WP_Query( $args ); 
$firstSlide = true;
if ($new_query->have_posts()) {
    while($new_query->have_posts()){
        $new_query->the_post();
     // echo '<pre>';print_r($post);die();
        $title = $post->post_title; 
      $description = $post->post_content;
        //the_title();
        //the_post_thumbnail('thumbnail');
        // Get a list of post's categories
      if($firstSlide){
        $active = "active";
        $firstSlide = false;
      }else{
        $active ="";

      }
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>


       
  
          <div class="carousel-item <?php echo $active; ?>" style="background-image: url('<?php echo $image[0]; ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3><?php echo $title; ?></h3>
              <p><?php echo $description; ?></p>
            </div>
          </div>
<?php
            }
    }
       ?>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </header>
<!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Welcome to <?php bloginfo('name'); if(wp_title('', false)) { echo '|'; } else { echo bloginfo('description'); } wp_title(''); ?></h1>

      <!-- Marketing Icons Section -->
      <div class="row">
      <?php 
$args = array( 'post_type' => 'welcome', 'posts_per_page' => 10 );
$new_query = new WP_Query( $args ); 
//$firstSlide = true;
if ($new_query->have_posts()) {
    while($new_query->have_posts()){
        $new_query->the_post();
     // echo '<pre>';print_r($post);die();
        $title = $post->post_title; 
      $description = $post->post_content; ?>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"><?php echo $title; ?></h4>
            <div class="card-body">
              <p class="card-text"><?php the_excerpt($description); ?></p>
            </div>
            <div class="card-footer">
              <a href="<?php echo esc_url( get_permalink( get_page_by_title(  $title ) ) ); ?>" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        
        <?php
      }
    }
    ?>
    </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>Portfolio Heading</h2>
      <div class="row">
<?php 
$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 );
$new_query = new WP_Query( $args ); 
//$firstSlide = true;
if ($new_query->have_posts()) {
    while($new_query->have_posts()){
        $new_query->the_post();
     // echo '<pre>';print_r($post);die();
        $title = $post->post_title; 
      $description = $post->post_content;
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title(  $title ) ) ); ?>"><?php  the_post_thumbnail('featuredImageCropped'); ?></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php echo esc_url( get_permalink( get_page_by_title(  $title ) ) ); ?>"><?php echo $title; ?></a>
              </h4>
              <p class="card-text"><?php echo $description; ?></p>
            </div>
          </div>
        </div>
        <?php 
      }
    }
    ?>

      <!-- /.row -->

      <!-- Features Section -->
<?php 
$args = array( 'post_type' => 'Features', 'posts_per_page' => 10 );
$new_query = new WP_Query( $args ); 
//$firstSlide = true;
if ($new_query->have_posts()) {
    while($new_query->have_posts()){
        $new_query->the_post();
     // echo '<pre>';print_r($post);die();
        $title = $post->post_title; 
      $description = $post->post_content;
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>




      <div class="row">
        <div class="col-lg-6">
          <h2><?php echo $title; ?></h2>
          <!--<p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>-->
          <p><?php echo $description; ?></p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="<?php echo $image[0]; ?>" alt="">
        </div>
      </div>
      <?php
    }
  }
  ?>
      <!-- /.row -->

      <hr>
<?php
                        dynamic_sidebar('action');
                        ?>
      <!-- Call to Action Section -->
     <!-- <div class="row mb-4">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
      </div>-->

    </div>
    </div>
    <!-- /.container -->
    <?php 
    get_footer();
    ?>
