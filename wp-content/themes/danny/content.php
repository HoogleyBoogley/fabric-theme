<?php
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
            <?php if (!is_page()) { ?>
                <p>
                    Posted in <?php wp_get_post_categories(); ?> uncategorized | 
                    <i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('l, F jS, Y'); ?>
                </p>
            <?php } ?>
            <!-- <i class="fa fa-user" aria-hidden="true"></i> Posted by <?php #the_author_posts_link(); ?>  -->
            <p class="card-text">
                <?php if (is_page() || is_single()) { ?>
                    <?php the_content(); ?> 
                <?php } else { ?>
                
                    <?php echo get_the_excerpt(); ?> 
                    <a href="<?php the_permalink(); ?>">Continue reading...</a>
                
                <?php } ?>
            </p>
        </div>
    </div>
<?php }   
} else { ?>
    <div class="card">
        <div class="card-block">
            <p class="card-text">
                No content found.
            </p>
        </div>
    </div>    
<?php } ?>