<header id="site-header" class="site-header">
   <div class="container">
      <div class="logo-menu-wrapper">
         <div class="site-logo-description">
            <div class="site-logo">
               <?php the_custom_logo(); ?>
            </div>
            <div class="site-branding">
               <?php if (is_front_page() && is_home()) : ?>
                  <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
               <?php else : ?>
                  <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
               <?php
               endif;
               $basetheme_description = get_bloginfo('description', 'display');
               if ($basetheme_description || is_customize_preview()) : ?>
                  <p class="site-description"><?php echo $basetheme_description; /* WPCS: xss ok. */ ?></p>
               <?php endif; ?>
            </div><!-- .site-branding -->
         </div>
         <!--#site-navigation menu animations: anim-left, anim-right, anim-top, anim-popup -->
         <nav id="site-navigation" class="main-navigation anim-left" role="navigation">
            <span class="hamburger menu-toggle">
               <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
               </span>
            </span>
            <div class="main-navigation-primary">
               <?php wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'menu_id'        => 'primary-menu',
                  'menu_class'     => 'main-header-menu'
               )); ?>
            </div>

         </nav><!-- #site-navigation -->
      </div>
   </div>
</header><!-- #site-header -->