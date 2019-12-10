<?php get_header(); ?>
<?php if(has_post_thumbnail()): ?>
    <div class="container-fluid p-0 center">
      <div class="post-image">
          <img class="wp-post-image" src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%; height:auto;">
      </div>
    </div>
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3"><?php echo get_bloginfo('name'); ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="bg-white">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                    <?php if( have_posts() ): ?>
                            <?php while( have_posts() ): the_post(); ?>
                                    <h4 class="text-dark text-center"><?php the_title(); ?></h4>
                                    <div class="card-body">
                                        <div class="row d-flex text-dark">
                                            <?php if(has_post_thumbnail()): ?>
                                                <?php if( !is_singular() ): ?>
                                                    <div class="col-12 col-md-3">
                                                     <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="col-12 mb-5">
                                                        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <div class="row">
                                                <div class="col">
                                                    <div>
                                                        <?php if( !is_singular() ): ?>
                                                            <?php the_excerpt() ; ?>
                                                        <?php else: ?>
                                                            <?php the_content(); ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if( !is_singular() ): ?>
                                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            <?php endwhile; ?>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
