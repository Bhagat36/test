<?php
    get_header();
    ?>

    <!-- Page Content -->
    <div class="container">
<?php
    // Start the loop.
    while ( have_posts() ) : the_post();
 $title =$post->post_title;
 $description = $post->post_content;
      
$terms = get_the_terms($post->ID, 'sub-portfolio');
foreach( $terms as $term ) {
  $name= $term->name;
}

//print_r($terms);
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

      <!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3"><?php bloginfo('name'); ?>
        <small><?php  if(wp_title('', false)) { echo '|'; } else { echo bloginfo('description'); } wp_title(''); ?></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active"><?php  if(wp_title('', false)) wp_title(''); ?> / <?php echo $name; ?></li>
      </ol>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" <?php  the_post_thumbnail('image');?>
        </div>

        <div class="col-md-4">
          <h3 class="my-3"><?php  if(wp_title('', false)) wp_title(''); ?></h3>
          <p><?php echo $description; ?></p>
        </div>

      </div>
      <?php
      endwhile;
    ?>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Projects | <?php echo $name; ?></h3>

      <div class="row">
<?php 

$args = array( 'post_type' => 'portfolio', 'sub-portfolio' => $name );
$new_query = new WP_Query( $args ); 
//$firstSlide = true;
if ($new_query->have_posts()) {
    while($new_query->have_posts()){
        $new_query->the_post();
     // echo '<pre>';print_r($post);die();
        $title = $post->post_title; 
      $description = $post->post_content;
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="col-md-3 col-sm-6 mb-4">
          <a href="<?php echo esc_url( get_permalink( get_page_by_title(  $title ) ) ); ?>">
            <img class="img-fluid" <?php  the_post_thumbnail('featuredImageCropped'); ?>
          </a>
        </div>
        <?php 
      }
    }
    ?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php
    get_footer();
    ?>
