<?php

/**************************************************
 * Share posts on social media
 **************************************************/
function the_share_post_links()
{
?>
   <div class="share-buttons">
      <div class="share-links-wrapper">
         <!-- Facebook -->
         <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" title="<?php _e('Share on Facebook', 'basetheme') ?>" target="_blank" class="btn btn-facebook">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/facebook.svg" alt="<?php _e('Share on Facebook', 'basetheme') ?>">
         </a>
         <!-- Twitter -->
         <a href="https://twitter.com/share?text=<?php the_title(); ?>&url=<?php echo get_the_permalink(); ?>" title="<?php _e('Share on Twitter', 'basetheme') ?>" target="_blank" class="btn btn-twitter">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/twitter.svg" alt="<?php _e('Share on Twitter', 'basetheme') ?>">
         </a>
         <!-- LinkedIn -->
         <a href="https://www.linkedin.com/sharing/share-offsite?url=<?php echo urlencode(get_the_permalink()); ?>" title="<?php _e('Share on LinkedIn', 'basetheme') ?>" target="_blank" class="btn btn-linkedin">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/linkedin.svg" alt="<?php _e('Share on LinkedIn', 'basetheme') ?>">
         </a>
         <!-- Pinterest -->
         <a href="http://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink(); ?>&description=<?php the_title(); ?>" class="btn btn-pinterest" title="<?php _e('Share on Pinterest', 'basetheme') ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/pinterest.svg" alt="<?php _e('Share on Pinterest', 'basetheme') ?>">
         </a>
         <!-- Xing -->
         <a href="https://www.xing.com/spi/shares/new?url=<?php echo urlencode(get_the_permalink()) ?>" class="btn btn-xing" title="<?php _e('Share on Xing', 'basetheme') ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/xing.svg" alt="<?php _e('Share on Xing', 'basetheme') ?>">
         </a>
         <!-- Email -->
         <a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_title(); ?> <?php echo get_the_permalink(); ?>" class="btn btn-email" title="<?php _e('Share on Email', 'basetheme') ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/envelope.svg" alt="<?php _e('Share on Email', 'basetheme') ?>">
         </a>
      </div>
   </div>
<?php
}
