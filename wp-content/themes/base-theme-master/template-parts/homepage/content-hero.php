<?php
$hero_description = get_field("hero_descritpion");
$hero_link = get_field("hero_link");
$hero_image = get_field("hero_image");
?>


<section class="section-hero">
        <div class="hero-main hero-background background">
                <div class="container hero-section">
                        <div class="hero-txt">
                                <p class="hero-txt-p"><?php echo $hero_description  ?></p>
                                        <?php if ($hero_link) :
                                                $link_url = $hero_link['url'];
                                                $link_title = $hero_link['title'];
                                                $link_target = $hero_link['target'] ? $hero_link['target'] : '_self';
                                        ?>   
                                <button type="button" class="hero-txt-button button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target) ?>"><?php echo $link_title ?></button>
                                        <?php endif; ?>
                        </div>
                        <div class="hero-img">
                                <?php if ($hero_image) : ?>
                                        <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" />
                                <?php endif; ?>
                        </div>
                </div>
        </div>
       
</section>



