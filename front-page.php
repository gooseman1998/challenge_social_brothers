<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <div class="row">

        <div class="col">
            <div class="wrapper-white">
                <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
            </div>
        </div>

        <div class="col">
            <div class="container">
                <div class="wrapper-white">
                    <div class="row">
                        <?php
                        $args_latest = array(
                            'post_type' => 'post',
                            'ignore_sticky_posts' => 1,
                            'posts_per_page' => 4
                        );
                        $count = 0;
                        $the_query = new WP_Query($args_latest); ?>
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            <div class=" col col-lg-6">
                                <a href="<?php  the_permalink(); ?>">
                                    <div class="card" >
                                        <span class="post-date"><?php echo get_the_date(); ?></span>
                                        <div class="img card-img-top"  style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
                                        <div class="card-body">
                                            <h2 class="card-title"><?php the_title(); ?></h2>
                                            <p class="card-text"><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        $count ++;
                        if ($count % 2 ==0) : ?> </div> <div class="row"> <?php endif;
                        endwhile;?>

                        <?php wp_reset_query();?>
                    </div>
                    <a href="/category/blog/" class="btn">Meer laden</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>