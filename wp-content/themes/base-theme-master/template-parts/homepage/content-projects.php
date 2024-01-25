<?php
$projects_tagline = get_field("projects_tagline");
$projects_title = get_field("projects_title");
$projects_text = get_field("projects_text");
$projects_button = get_field("projects_button");
$projects_gallery = get_field("projects_gallery");
?>

<section class="projects">
<div class="container">
    <div class="project">
        <div class="project-images">
        <?php
            if (have_rows('projects_gallery')) : while (have_rows('projects_gallery')) : the_row();
                $image1 = get_sub_field('image1');
                $image2 = get_sub_field('image2');
                $image3 = get_sub_field('image3');
                $image4 = get_sub_field('image4');
         ?>        
            <div class="background  img ">
                <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
            </div>
            <div class="background  img ">
                <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
            </div>
            <div class="background  img ">
                <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
            </div>
                <div class="background img">
            <img src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>" />
            </div>
        <?php endwhile;    ?>
        <?php endif;  ?>
        </div>
        <div class="project-txt">
            <h5 class="projects-h5"><?php echo $projects_tagline  ?></h5>
            <h3 class="projects-h3"><?php echo $projects_title  ?></h3>
            <p class="projects-p"><?php echo $projects_text  ?></p>
            <!--<p class="projects-p"> Dignissim sodales ut eu sem integer vitae justo. Tincidunt tortor aliquam nulla facilisi cras.</p> -->
            <!--<button type="button" class="button button2 projects-button">Recent Projects</button>-->
            <?php if ($projects_button) :
                        $link_url = $projects_button['url'];
                        $link_title = $projects_button['title'];
                        $link_target = $projects_button['target'] ? $projects_button['target'] : '_self';
            ?>   
                        <button type="button" class="hero-txt-button button button2" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target) ?>"><?php echo $link_title ?></button>
            <?php endif; ?>
        </div>
    </div>
</div>
</section>