<?php
$about_tagline = get_field("about_tagline");
$about_title = get_field("about_title");
$about_text = get_field("about_text");
$about_img = get_field("about_img");
?>


<section class="about-us">
<div class="container">
    <div class="about">
            <div class="about-txt">
                <h5 class="section-title-h5"><?php echo $about_tagline  ?></h5>
                <h2 class="section-title-h2 h2-about"><?php echo $about_title  ?></h2>
                <p class="about-txt-p"><?php echo $about_text  ?></p>
                <!--<div class="list-about">
                    
                        <div>
                            <div class="list-txt"> <li class="list-txt">Quisque metus felis in dictum</li></div>
                            <div class="list-txt"> <li class="list-txt">Mauris sollicitudin nunc quis at</li></div>
                        </div>
                        <div>
                            <div class="list-txt"> <li class="list-txt">Sed ac ligula nec felis modo</li></div>
                            <div class="list-txt"><li class="list-txt">In massa erat, ac dictum alis</li></div>
                        </div>
                    
                    </div>-->
            </div>
        <div class="about-background background">
            <?php if ($about_img) : ?>
                <img src="<?php echo esc_url($about_img['url']); ?>" alt="<?php echo esc_attr($about_img['alt']); ?>" />
                <?php endif; ?>
        </div>
    </div>
</div>
</section>