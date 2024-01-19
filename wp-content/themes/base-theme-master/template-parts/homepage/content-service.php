<?php
$service_tagline = get_field("service_tagline");
$service_title = get_field("service_title");
?>


<section class="section-service">
    <div class="container">
        <div class="section-service--title">
            <?php echo $service_tagline  ?>
            <?php echo $service_title  ?>
        </div>

        <?php
        if (have_rows('services')) : while (have_rows('services')) : the_row();
                $service_description = get_sub_field('service_description');
                $service_link = get_sub_field('service_link');
        ?>

                <?php echo $service_description ?>

                <?php if ($service_link) :
                    $link_url = $service_link['url'];
                    $link_title = $service_link['title'];
                    $link_target = $service_link['target'] ? $service_link['target'] : '_self';
                ?>

                    <a class="section-conditions--conditions-condition-link" target="<?php echo esc_attr($link_target); ?>" href="<?php echo esc_url($link_url); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
            <?php endwhile;    ?>
        <?php endif;  ?>
    </div>
</section>











<!-- <div class="container">
    <div class="section-title">
        <h5 class="section-title-h5">SERVICES</h5>
        <h2 class="section-title-h2">We provide All-in-one Solution
            for every IT job</h2>
    </div>


    <div class="services-cards">
                <div class="services-posts-cards">
                    <div class="services-post-card service-card-1">
                        <h5 class="services-post-title first-post-title">Software Development</h5>
                        <p class="services-post-txt">Posuere morbi leo urna molestie at elementum eu egestas.</p>
                        <a href="url" class="services-post-link">Learn more ></a>
                    </div>

                    <div class="services-post-card">
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