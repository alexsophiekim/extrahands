<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3 mt-3 p-3 bg-transparent">
                <?php if (have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <h2 class="text-center"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
