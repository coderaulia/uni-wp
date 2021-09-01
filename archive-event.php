<?php 

get_header();
pageBanner(array(
   'title' => 'All Events',
   'subtitle' => 'All of our successful event',
));
?>

<div class="container container--narrow page-section">
   <?php 
      while(have_posts()){
         the_post();
         get_template_part( 'template-parts/content-event');
      }
      // showing pagination
      echo paginate_links();
   ?>
   <hr class="section-break">
   <p>Looking for our successful past events? <a href="<?php echo site_url('/past-events'); ?>">Check out our archive
         here</a></p>
</div>

<?php

get_footer();

?>