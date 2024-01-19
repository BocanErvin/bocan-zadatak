<?php
$hero_description = get_field("hero_descritpion");
$hero_link = get_field("hero_link");
$hero_image = get_field("hero_image");
?>


<section class="section-hero">
        <div class="container">
                <div class="section-hero--box">
                        <div class="section-hero--box-description">
                                <?php echo $hero_description  ?>

                                <?php if ($hero_link) :
                                        $link_url = $hero_link['url'];
                                        $link_title = $hero_link['title'];
                                        $link_target = $hero_link['target'] ? $hero_link['target'] : '_self';
                                ?>
                                        <a class="hero_link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target) ?>"><?php echo $link_title ?></a>

                                <?php endif; ?>
                        </div>

                        <div class="section-hero--box-image">

                                <?php if ($hero_image) : ?>
                                        <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" />
                                <?php endif; ?>
                        </div>
                </div>
        </div>
</section>



<!-- <div class="hero-main hero-background background">
                <div class="container hero-section">
                <div class="hero-txt">
                        <h2 class="hero-txt-h2">Software solution providers that help brands thrive and stand out</h2>
                        <p class="hero-txt-p">Since 2014, we have been exploring the world of design
                                                and development offering our expertise in web and mobile.
                                                It is perfect fusion of innovation, development and
                                                execution at one place.</p>
                        <button type="button" class="hero-txt-button button">EXPLORE MORE</button>
                </div>
                <div class="hero-img"> </div>
                </div>
        </div> -->