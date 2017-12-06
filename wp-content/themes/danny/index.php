<?php get_header(); ?>

<div class="body">
    <div class="container">
        <br>
        <?php if (is_page()) { ?>
            <h1><?php the_title(); ?></h1>
        <?php } elseif (is_home) { ?>
            <h1>Latest Posts</h1>
        <?php } ?>
        <?php if (is_active_sidebar('sidebar')) { ?>
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
        <?php }
        
            get_template_part('content');
                
            if (is_active_sidebar('sidebar')) { ?>    
            </div>
            <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <?php dynamic_sidebar('sidebar'); ?>
            </div>
        </div>
        <?php } ?>
    </div>    
</div>


<?php get_footer(); ?>