<?php 

get_header();
pageBanner(array(
   'title' => 'All Programs',
   'subtitle' => 'Our World Class Programs. Make Your Choice!'
));
?>


<div class="container container--narrow page-section">
   <ul class="link-list min-list">
      <?php
      while(have_posts()){
         the_post();
   ?>

      <li><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></li>

      <?php
      }
      // showing pagination
      echo paginate_links();
   ?>
   </ul>

</div>

<?php

get_footer();

?>