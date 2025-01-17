  <?php get_header(); ?>
  <!-- Blog Content -->
   <?php 
    while(have_posts()): the_post();

   ?>
<div class="container my-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-9">
            <h1 class="mb-3 text-white"><?php the_title(); ?></h1>
            <p class="text-white mb-4">By <strong><?php the_author(); ?></strong> | <?php the_date('d M, Y'); ?> </p>
            <p class="text-white mb-4">
                <span>Comments: <?php comments_number(); ?></span> | 
                Views: 
            </p>
            <?php the_post_thumbnail('medium', ['class' => 'img-fluid w-100', 'title' => 'Feature image']); ?>
            <p class="text-white"><?php the_content(); ?></p>

            <hr>
            <!-- Author Section -->
            <div class="author d-flex align-items-center">
                <?php 
                    echo get_avatar(get_the_author_meta('ID'));
                ?>
                <img src="https://via.placeholder.com/80" class="rounded-circle me-3" alt="Author Image">
                <div>
                    <h5 class="mb-0"><?php the_author(); ?></h5>
                    <p class="text-muted">Professional Blogger & Writer</p>
                </div>
            </div>

            <hr>
            <!-- Comments Section -->
            <div class="comments-section mt-4">
                <h4 class="text-white">Comments</h4>
                <?php
                if (comments_open() || get_comments_number()) {
                    comments_template();
                } else {
                    echo '<p class="text-white">Comments are closed for this post.</p>';
                }
                ?>
            </div>
        </div>
<!-- 34 6min -->
        <!-- Sidebar -->
        <div class="col-lg-3">
            <!-- Search Box -->
            <div class="search-box mb-4">
                <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                    <div class="input-group">
                        <input type="text" class="form-control" name="s" placeholder="Search">
                        <button class="btn btn-primary" type="submit">Go</button>
                    </div>
                </form>
            </div>

            <!-- Categories -->
            <div class="categories mb-4">
                <h5 class="text-white">Categories</h5>
                <ul class="list-unstyled">
                   <?php 
                   $myallCat = get_categories(array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                   ) );
                   foreach($myallCat as $cat){
                       ?>
                  <li><a href="#" class="text-white"> <?php echo $cat->name; ?> </li>
                   <?php }?>
                </ul>
            </div>

            <!-- Latest Posts -->
            <div class="latest-posts">
                <h5 class="text-white">Latest Posts</h5>
                <ul class="list-unstyled">
                    <?php
                    $recent_posts = wp_get_recent_posts(['numberposts' => 5, 'post_status' => 'publish']);
                    foreach ($recent_posts as $post) : ?>
                        <li>
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="text-white">
                                <?php echo $post['post_title']; ?>
                            </a>
                        </li>
                    <?php endforeach; wp_reset_query(); ?>
                </ul>
            </div>
        </div>
    </div>
</div>

  <?php 
    endwhile;
  ?>
    <?php get_footer(); ?>