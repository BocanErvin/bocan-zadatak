<?php
$find_out_tagline = get_field("find_out_tagline");
$find_out_title = get_field("find_out_title");
$find_out_buttons = get_field("find_out_buttons");
$find_out_text_title = get_field("find_out_text_title");
$find_out_image = get_field("find_out_image");
$find_out_text = get_field("find_out_text");
$find_out_text_button = get_field("find_out_text_button");
?>

<section class="Section-work">
<div class="container">
    <div class="section-title">
        <h5 class="section-title-h5"><?php echo $find_out_tagline ?></h5>
        <h2 class="section-title-h2"><?php echo $find_out_title ?></h2>
    </div>

    <div class="our-work-main">
        <?php
            if (have_rows('find_out_buttons')) : while (have_rows('find_out_buttons')) : the_row();
                $button_link = get_sub_field('button_link');
         ?>  
         <?php if ($button_link) :
                        $link_url = $button_link['url'];
                        $link_title = $button_link['title'];
                        $link_target = $button_link['target'] ? $button_link['target'] : '_self';
                    ?>
                    <div class=" our-button">
                        <h4 class="button-txt">
                        <a target="<?php echo esc_attr($link_target); ?>" href="<?php echo esc_url($link_url); ?>">
                            <?php echo esc_html($link_title); ?>
                        </a>
                    </h4>
                </div>   
         <?php endif; ?>
         <?php endwhile;    ?>
        <?php endif;  ?>  
            
            <div class="our-txt">
                <div class="background-img ourwork-img">
                    <?php if ($find_out_image) : ?>
                    <img src="<?php echo esc_url($find_out_image['url']); ?>" alt="<?php echo esc_attr($find_out_image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="ourwork-txt">
                    <h4 class="ourwork-h4"><?php echo $find_out_text_title  ?></h4>
                    <p class=ourwork-p><?php echo $find_out_text  ?></p>
                    <?php if ($find_out_text_button) :
                        $link_url = $find_out_text_button['url'];
                        $link_title = $find_out_text_button['title'];
                        $link_target = $find_out_text_button['target'] ? $find_out_text_button['target'] : '_self';
                    ?>   
                        <button type="button" class="hero-txt-button button button2" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target) ?>"><?php echo $link_title ?></button>
                    <?php endif; ?>
                    
                </div> 
            </div>           
    </div>
</div>
</section>