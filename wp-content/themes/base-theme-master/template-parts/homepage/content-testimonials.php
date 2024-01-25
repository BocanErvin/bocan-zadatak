<?php
$testimonials_tagline = get_field("testimonials_tagline");
$testimonials_title = get_field("testimonials_title");
$testimonial_clients = get_field("testimonial_clients");
?>







<section class="testimonials">
    <div class="container">
        <div class="section-title">
            <h5 class="section-title-h5"><?php echo $testimonials_tagline ?></h5>
            <h2 class="section-title-h2"><?php echo $testimonials_title ?></h2>
        </div>

        <div class="testimonial-clients">
        <?php
            if (have_rows('testimonial_clients')) : while (have_rows('testimonial_clients')) : the_row();
                $image_sighn = get_sub_field('image_sighn');
                $client_text = get_sub_field('client_text');
                $image_stars = get_sub_field('image_stars');
                $client_image = get_sub_field('client_image');
                $client_name = get_sub_field('client_name');
                $client_name = get_sub_field('client_job');
         ?>  
            <div class="testimonial-card">
                <div class="tst-card-txt">
                    <img src="<?php echo esc_url($image_sighn['url']); ?>" alt="<?php echo esc_attr($image_sighn['alt']); ?>" />
                    <p class=testimonial-txt-p><?php echo $client_text  ?></p>
                    <img src="<?php echo esc_url($image_stars['url']); ?>" alt="<?php echo esc_attr($image_stars['alt']); ?>" class="stars" />
                    <img src="<?php echo esc_url($client_image['url']); ?>" alt="<?php echo esc_attr($client_image['alt']); ?>" />
                    <div class="tst-name">
                        <p><b class="testimonial-name"><?php echo $client_name  ?></b></p>
                        <p class="testimonial-job"><?php echo $client_name  ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile;    ?>
        <?php endif;  ?> 
        </div>
    </div>
</section>    
        <!--<div class="testimonial-card tst-2">
            <div class="tst-card-txt">
                <img src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/navodnici.png" alt="">
                <p class=testimonial-txt-p>Nisl rhoncus mattis rhoncus urna neque viverra. Turpis egestas pretium aenean pharetra magna ac placerat vestibulum.</p>
                <img src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/zvjezdice.png" alt="" class="stars">
                <img src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/robika.png" alt="">
                <div class="tst-name">
                    <p><b class="testimonial-name">ROBERT DOE</b></p>
                    <p class="testimonial-job">Buisniessman</p>
                </div>
                
            </div>
        </div>
        <div class="testimonial-card tst-3">
            <div class="tst-card-txt">
                <img src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/navodnici.png" alt="">
                <p class=testimonial-txt-p>Nisl rhoncus mattis rhoncus urna neque viverra. Turpis egestas pretium aenean pharetra magna ac placerat vestibulum.</p>
                <img src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/zvjezdice.png" alt="" class="stars">
                <img src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/julka.png" alt="">
                <div class="tst-name">
                    <p><b class="testimonial-name">ROBERT DOE</b></p>
                    <p class="testimonial-job">Buisniessman</p>
                </div>
            </div>
        </div> 
    </div>
    </div>-->

