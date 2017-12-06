<?php get_header(); ?>

<div class="body">
    <div class="container">
        <br>
        <h1><?php
        
        if (is_category()) {
            echo "Posts in ";
            single_cat_title();
        } elseif (is_tag()) {
            echo "Posts with";
            single_tag_title();
        } elseif (is_author()) {
            the_post();
            echo "Posts by ". get_the_author();
            rewind_posts();
        } elseif (is_day()) {
            echo "Posts from ". get_the_date();
        } elseif (is_month()) {
            echo "Posts from ". get_the_date('F Y');
        } elseif (is_year()) {
            echo "Posts from ". get_the_date('Y');
        } else {
            echo "Archives";
        }
        
        
        ?></h1>
        <hr>
        <?php if (is_active_sidebar('sidebar')) { ?>
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
        <?php }
            if (is_author()) { 
                the_post(); ?>
                <div class="card">
                    <div class="card-block">
                        <div class="float-left">
                            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"></img> 
                        </div>
                        <div>
                            <h3 class="card-title">
                                <?php echo get_the_author_meta('first_name')." ".get_the_author_meta('last_name'); ?>
                                <div class="float-right">
                                    <a class="btn btn-social" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> </a> 
                                    <a class="btn btn-social" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> </a> 
                                    <a class="btn btn-social" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a> 
                                </div>
                            </h3>
                            <p class="card-text">
                                <?php echo get_the_author_meta('user_description'); ?> 
                            </p>
                        </div>
                    </div>
                </div>
            <?php 
                rewind_posts();
            }
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        
                        <div class="card">
                            <?php if (has_post_thumbnail()) { ?>
                                <div class="card-img-top">
                                    <?php the_post_thumbnail(); ?>
                                </div>    
                            <?php } ?>
                            <div class="card-block">
                                <h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p>
                                    Posted in <?php wp_get_post_categories(); ?> uncategorized | 
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('l, F jS, Y'); ?>
                                </p>    
                                <p class="card-text">
                                    <?php echo get_the_excerpt(); ?> 
                                    <a href="<?php the_permalink(); ?>">Continue reading...</a>
                                </p>
                            </div>
                        </div>
                        
                    <?php }   
                }
                ?>
            <?php if (is_active_sidebar('sidebar')) { ?>    
            </div>
            <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <?php dynamic_sidebar('sidebar'); ?>
            </div>
        </div>
        <?php } ?>
    </div>    
</div>


<?php get_footer(); ?>