<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3 mt-3 p-3 bg-light shadow">
                <?php if (have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <h2 class="text-center text-dark"><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p> 
                            <?php the_excerpt() ; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
