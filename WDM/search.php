<?php get_header(); ?>
<div id="contentWrap">
	<div id="content">
    <?php if ( have_posts() ) : ?>
    <h2 id="pageTitle">Here's what we've found:</h2>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
                	<?php the_excerpt(); ?>
                </div>
            </article>
		<?php endwhile; ?>
		<?php else : ?>
		<h2>We couldn't find anything, try searching again!</h2>
    <?php endif; ?>

    </div><!-- end content -->
	<?php include('sidebar-page.php'); ?>
</div><!-- end contentWrap -->
<?php get_footer(); ?>