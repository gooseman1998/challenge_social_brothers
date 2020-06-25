<?php get_header(); ?>

    <div class="container pt-5 pb-5 pl-5 pr-5">
        <div class="wrapper-white">
            <div class="row">
                <?php
                $count = 0;
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class=" col col-lg-3 col-sm-6">
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
                    if ($count % 4 ==0) : ?> </div> <div class="row"> <?php endif;
                endwhile; endif; ?>
            </div>
        </div>
    </div>

<?php get_footer();?>