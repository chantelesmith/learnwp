<?php get_header (); ?>
<div id="contentWrap">
    <div class="featuredImage">
		<?php the_post_thumbnail(); ?>
    </div>
	<div id="wrapper">
		<?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div id="contentFullWidth">
                    <article>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry">
                            <?php the_content(); ?>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
	</div><!-- end wrapper -->
</div><!-- end contentWrap -->
<?php get_footer(); ?>