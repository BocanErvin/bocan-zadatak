<?php
$tim_tagline = get_field("tim_tagline");
$tim_title = get_field("tim_title");
$tim_card = get_field("tim_card");

?>



<section class="team">
<div class="container">
    <div class="section-title">
        <h5 class="section-title-h5"><?php echo esc_html($tim_tagline); ?></h5>
        <h2 class="section-title-h2"><?php echo esc_html($tim_title); ?></h2>
    </div>
    <div class="team-cards">
    <?php
            if (have_rows('tim_card')) : while (have_rows('tim_card')) : the_row();
                $tim_image = get_sub_field('tim_image');
                $tim_name = get_sub_field('tim_name');
                $tim_job = get_sub_field('tim_job');
                $tim_social = get_sub_field('tim_social');
         ?>        
        <div class="team-card team-card-first">
                <div class="background team1">
                
                    <img src="<?php echo esc_url($tim_image['url']); ?>" alt="<?php echo esc_attr($tim_image['alt']); ?>" />
           
                </div>
                <div class="name">
                    <h4 class="name-h4"><?php echo  $tim_name  ?></h4>
                    <p class="name-p"><?php echo  $tim_job  ?></p>
                </div>
                
                <div class="social">
                
                    <img src="<?php echo esc_url($tim_social['url']); ?>" alt="<?php echo esc_attr($tim_social['alt']); ?>" />
                    
                </div>
            </div>
        <?php endwhile;    ?>
        <?php endif;  ?>


          <!--     <div class="team-card team-card-first">
                <div class="background team1"></div>
                <div class="name">
                    <h4 class="name-h4"></h4>
                    <p class="name-p"></p>
                </div>
                
                <div class="social">
                    <img class="social-img" src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/fejzbuk.png" alt="">
                    <img class="social-img" src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/twitter.png" alt="">
                    <img class="social-img" src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/linkedln.png" alt="">
                </div>
            </div>-->

     <!--   <div class="team-card">
            <div class="background team2"></div>
            <div class="name">
                <h4 class="name-h4">SEBASTIAN DOE</h4>
            <p class="name-p">Desighn Expert</p>
            </div>
            
            <div class="social">
                <img class="social-img" src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/fejzbuk.png" alt="">
                <img class="social-img" src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/twitter.png" alt="">
                <img class="social-img" src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/linkedln.png" alt="">
            </div>
        </div>  -->

       <!-- <div class="team-card">
            <div class="background-img team3"></div>
            <div class="name">
                <h4 class="name-h4">SEBASTIAN DOE</h4>
            <p class="name-p">Human Resources</p>
            </div>
            
            <div class="social">
                <img class="social-img" src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/fejzbuk.png" alt="">
                <img class="social-img" src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/twitter.png" alt="">
                <img class="social-img" src="http://localhost/bocan-zadatak/wp-content/uploads/2024/01/linkedln.png" alt="">
            </div>
        </div> -->
    </div>
</div>
</section>   