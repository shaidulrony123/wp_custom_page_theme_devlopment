<!-- <section id="blog">
        <div class="container px-lg-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wow fadeInUp common_head text-center">
                        <h4>blog</h4>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/shape/banner_img_shape.png" alt="banner_img_shape">
                    </div>
                </div>
            </div>
            <div class="wow fadeInUp blog_main">
                <div class="blog_slider">
                    <div class="row ">
                        <div class="col-lg-5 col-md-6">
                            <div  class="blog_img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/blog_img1.jpeg" class="img-fluid w-100" alt="blog_img1">
                                <div class="overly"></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div  class="blog_text">
                                <h5>Lens News</h5>
                                <h3>Which Camera Will Survive?<span>Nikon Sony a1, Z9 and Canon R3</span> </h3>
                                <p>Photographers viverra tristique duis vitae diam the neque nivamus aestan ateuene
                                    artines duru setlie suscipe the fermen.</p>
                                <div class="blog_btn d-flex justify-content-end">
                                    <a href="#">Read more</a>
                                    <h6>8 December 2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog_slider">
                    <div class="row ">
                        <div class="col-lg-5 col-md-6">
                            <div  class="blog_img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/blog_img2.jpg" class="img-fluid w-100" alt="blog_img1">
                                <div class="overly"></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div  class="blog_text">
                                <h5>Lens News</h5>
                                <h3>Which Camera Will Survive?<span>Nikon Sony a1, Z9 and Canon R3</span> </h3>
                                <p>Photographers viverra tristique duis vitae diam the neque nivamus aestan ateuene
                                    artines duru setlie suscipe the fermen.</p>
                                <div class="blog_btn d-flex justify-content-end">
                                    <a href="#">Read more</a>
                                    <h6>8 December 2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog_slider">
                    <div class="row ">
                        <div class="col-lg-5 col-md-6">
                            <div  class="blog_img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/blog_img3.jpg" class="img-fluid w-100" alt="blog_img1">
                                <div class="overly"></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div  class="blog_text">
                                <h5>Lens News</h5>
                                <h3>Which Camera Will Survive?<span>Nikon Sony a1, Z9 and Canon R3</span> </h3>
                                <p>Photographers viverra tristique duis vitae diam the neque nivamus aestan ateuene
                                    artines duru setlie suscipe the fermen.</p>
                                <div class="blog_btn d-flex justify-content-end">
                                    <a href="#">Read more</a>
                                    <h6>8 December 2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<section id="blog">


    <div class="container my-5">
        <div class="row">
                <div class="col-lg-12">
                    <div class="wow fadeInUp common_head text-center">
                        <h4>blog</h4>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/shape/banner_img_shape.png" alt="banner_img_shape">
                    </div>
                </div>
            </div>
        <div class="row">
            <!-- Blog Post 1 -->
             <?php 
             if(have_posts()):
                while(have_posts()): the_post();
             ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <?php the_post_thumbnail('medium', ['class' => 'img-fluid w-100', 'title' => 'Feature image']); ?>
                    <div class="card-body">
                        <!-- date and admin -->
                         <p><span><?php the_date('d M Y'); ?></span>/<span>admin</span></p>
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_content(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
          <?php endwhile;
            _e('No posts found.', 'textdomain');
            endif;
          ?>
        </div>
    </div>
    </section>