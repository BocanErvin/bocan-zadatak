<?php

/**
 * Template Name: Homepage
 */

get_header();
?>

<div id="primary" class="content-area">
   <main id="main" class="site-main">
      
         <?php
         while (have_posts()) :
            the_post();

            get_template_part('template-parts/homepage/content', 'hero');
            get_template_part('template-parts/homepage/content', 'service');
            get_template_part('template-parts/homepage/content', 'about');
            get_template_part('template-parts/homepage/content', 'find');
            get_template_part('template-parts/homepage/content', 'testimonials');
            get_template_part('template-parts/homepage/content', 'projects');
            get_template_part('template-parts/homepage/content', 'team');
         endwhile; // End of the loop.
         ?>
      
   </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
