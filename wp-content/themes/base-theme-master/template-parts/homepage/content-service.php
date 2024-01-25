<?php
$service_tagline = get_field("service_tagline");
$service_title = get_field("service_title");
?>











<section class="section-service">
 <div class="container">
    <div class="section-title">
        <h5 class="section-title-h5"><?php echo $service_tagline  ?></h5>
        <h2 class="section-title-h2"><?php echo $service_title  ?></h2>
    </div>


   <div class="services-cards">
                <div class="services-posts-cards">
                    
                    <?php
                        if (have_rows('services')) : while (have_rows('services')) : the_row();
                        $service_description = get_sub_field('service_description');
                        $service_link = get_sub_field('service_link');
                    ?>
                    <div class="services-post-card service-card-1">
                        <h5 class="services-post-title first-post-title"><?php echo $service_description ?></h5>
                        <?php if ($service_link) :
                        $link_url = $service_link['url'];
                        $link_title = $service_link['title'];
                        $link_target = $service_link['target'] ? $service_link['target'] : '_self';
                    ?>
                        <a class="section-conditions--conditions-condition-link services-post-link" target="<?php echo esc_attr($link_target); ?>" href="<?php echo esc_url($link_url); ?>">
                            <?php echo esc_html($link_title); ?>
                        </a>
                        <?php endif; ?>
                        <!--<p class="services-post-txt">Posuere morbi leo urna molestie at elementum eu egestas.</p>-->
                    </div>
                    <?php endwhile;    ?>
                    <?php endif;  ?>
                </div>
                
    </div>
    <div class="services-info">
        
        <?php
            if (have_rows('company_info')) : while (have_rows('company_info')) : the_row();
                $info_number = get_sub_field('info_number');
                $info_detals = get_sub_field('info_detals');
         ?>        
         <div class="info">
            <h5 class="info-h5"><?php echo esc_html($info_number); ?></h5>
            <p class="info-p"><?php echo esc_html($info_detals); ?></p>   
         </div>
        <?php endwhile;    ?>
        <?php endif;  ?>
                            
            
    </div>
</div>
</section>


                 <!--    <div class="services-post-card">
                        <h5 class="services-post-title">AI Programmer & Technical</h5>
                        <p class="services-post-txt">Posuere morbi leo urna molestie at elementum eu egestas.</p>
                        <a href="url" class="services-post-link">Learn more ></a>
                    </div>

                    <div class="services-post-card">
                        <h5 class="services-post-title">System Application Development</h5>
                        <p class="services-post-txt">Posuere morbi leo urna molestie at elementum eu egestas.</p>
                        <a href="url" class="services-post-link">Learn more ></a>
                    </div>

                    <div class="services-post-card">
                        <h5 class="services-post-title">Server And Network Solutions</h5>
                        <p class="services-post-txt">Posuere morbi leo urna molestie at elementum eu egestas.</p>
                        <a href="url" class="services-post-link">Learn more ></a>
                    </div>
                </div>
    



            <div class="services-info">
                    <div class="info">
                        <h5 class="info-h5">782</h5>
                        <p class="info-p">WORLDWIDE CUSTOMERS</p>
                    </div>
                    <div class="info">
                        <h5 class="info-h5">12 K</h5>
                        <p class="info-p">PROJECTS DONE</p>
                    </div>
                    <div class="info">
                        <h5 class="info-h5">5,896</h5>
                        <p class="info-p">IT PRODUCTS</p>
                    </div>
                    <div class="info ">
                        <h5 class="info-h5">$ 890 K</h5>
                        <p class="info-p">PROJECTS SPEND</p>
                    </div>
            </div>
        </div>
</div> -->