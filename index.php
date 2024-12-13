<?php get_header(); ?>

    <!-- ****************************************** 
                    menu part start
         ******************************************-->
    <nav class="navbar navbar-expand-md main_menu">
        <div class="container px-lg-0">
            <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="service.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="work.html">Works</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="pricing.html">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ****************************************** 
                    menu part end
         ******************************************-->
<?php echo get_template_part('template-parts/bannerslider');?>
    <!-- ****************************************** 
                    about part start
         ******************************************-->
         <?php echo get_template_part('template-parts/about');?>
    <!-- ****************************************** 
                    about part end
         ******************************************-->

    <!-- ****************************************** 
                    service part start
         ******************************************-->
    <?php echo get_template_part('template-parts/service'); ?>
    <!-- ****************************************** 
                    service part end
         ******************************************-->

    <!-- ****************************************** 
                    work part start
         ******************************************-->
    <?php echo get_template_part('template-parts/work'); ?>
    <!-- ****************************************** 
                    work part end
         ******************************************-->



    <!-- ****************************************** 
                    pricing part start
         ******************************************-->
    <?php echo get_template_part('template-parts/pricing'); ?>

    <!-- ****************************************** 
                    pricing part end
         ******************************************-->


    <!-- ****************************************** 
                    gallery part start
         ******************************************-->
    <?php echo get_template_part('template-parts/gallery'); ?>
    <!-- ****************************************** 
                    gallery part end
         ******************************************-->

    <!-- ****************************************** 
                    blog part start
         ******************************************-->
    <?php echo get_template_part('template-parts/content'); ?>
    <!-- ****************************************** 
                    blog part end
         ******************************************-->


    <!-- ****************************************** 
                    contact part start
         ******************************************-->
    <?php echo get_template_part('template-parts/contact'); ?>
    <!-- ****************************************** 
                    contact part end
         ******************************************-->
<?php get_footer(); ?>