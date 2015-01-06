<?php get_header(); ?>
<div id="wrapper">
<div id="contentWrap">
	<div id="content">
    <h1>Latest News</h1>
    <?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink() ?>"><div class="thumb"><?php the_post_thumbnail(); ?></div></a>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <div class="meta">
                    Date <?php the_time('F Y') ?><br />
                    Written by <?php the_author() ?>
                </div>
				<div class="newsExcerpt">
                	<?php the_excerpt(); ?>
                </div>
                <div class="postmetadata">
                    Posted in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                </div>
            </article>
		<?php endwhile; ?>
    <?php endif; ?>

    </div><!-- end content -->
	<?php get_sidebar(); ?>
</div><!-- end contentWrap -->
</div><!-- end wrapper -->
<?php get_footer(); ?>