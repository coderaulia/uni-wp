<?php 

get_header();
pageBanner(array(
   'title' => 'Past events',
   'subtitle' => 'All of our past successfull events'
));
?>

<div class="container container--narrow page-section">
   <?php 

      $today = date('Ymd');
      $pastEvents = new WP_Query(array(
         // pagination
         'paged' => get_query_var('paged', 1),
         'post_type' => 'event',
         'meta_key' => 'event_date',
         'orderby' => 'meta_value_num',
         'order' => 'ASC',
         'meta_query' => array(
            'key' => 'event_date',
            'compare' => '<',
            'value' => $today,
            'type' => 'numeric'
         )
      ));

      while($pastEvents->have_posts()){
         $pastEvents->the_post();

         get_template_part('template-parts/content-event');

      }
      // showing pagination
      echo paginate_links(array(
         'total' => $pastEvents->max_num_pages
      ));
   ?>
</div>

<?php

get_footer();

?>