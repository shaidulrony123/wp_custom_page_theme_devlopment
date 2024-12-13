<section id="service">
        <div class="container px-lg-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wow fadeInUp common_head text-center">
                        <h4>My Services</h4>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/shape/banner_img_shape.png" alt="banner_img_shape">
                    </div>
                </div>
            </div>
            <div class="service_main">
                <div class="wow fadeInUp row">
                    <?php 
                       $myservice= new WP_Query(array(
                        'post_type' => 'MySlider',
                        
                       ));

                       while ($myservice->have_posts()) : $myservice->the_post();
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div  class="content">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/shape/pattern.png" alt="pattern">
                                <div class="box">
                                    <i class="<?php echo get_post_meta(get_the_ID(), 'add_icon_service', true); ?>"></i>
                                    <a href="<?php the_permalink();?>"><h4><?php esc_html(the_title()); ?></h4></a>
                                    <p><?php esc_html(the_content()); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                    ?>
                </div>
            </div>
           
        </div>
    </section>