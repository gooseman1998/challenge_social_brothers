<?php get_header(); ?>

    <div class="container pt-5 pb-5">

        <h1 class="single-title"> <?php the_title(); ?> </h1>
        <div class="row">
            <div class="col">
                <div class="wrapper-white">
                    <?php if (has_post_thumbnail()): ?>

                        <img src="<?php the_post_thumbnail_url('smallest'); ?>" class="img-fluid single-img">

                    <?php endif; ?>
                </div>
            </div>
            <div class="col">
                <div class="wrapper-white">
                    <?php if (have_posts()) : while (have_posts()) : the_post();  ?>

                        <div class="single-p"><?php the_content(); ?></div>

                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>