<?php get_header (); ?>
<div id="contentWrap">
    <div class="featuredImage">
		<?php the_post_thumbnail(); ?>
    </div>
<div id="wrapper">
	<div id="content">
		<?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
                  <div class="meta orange">
                        <h2><?php the_time('F Y') ?></h2>
                    </div>
                    <div class="socialBox clearFix">
                    	<a href='http://www.facebook.com/share.php?u=<?php the_permalink() ?>' target="_new">
                        	<div class="social"><img src="<?php echo get_bloginfo('template_directory');?>/images/icon-facebook.svg"/></div>
                        </a>
                    	<a href='http://twitter.com/share?text=Check this out: <?php the_title(); ?> <?php echo wp_get_shortlink(get_the_ID()); ?>&url="'  target="_new">
                        	<div class="social"><img src="<?php echo get_bloginfo('template_directory');?>/images/icon-twitter.svg"/></div>
                        </a>
                        
                    </div>
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <div class="meta">
                        Written by <?php the_author() ?>
                    </div>
                    <div class="postmetadata">
                        <?php the_tags('Tags: ', ', ', '<br />'); ?>
                        Posted in <?php the_category(', ') ?> | 
                        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                    </div>
                </article>
                <?php comments_template(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div><!-- end content -->
	<?php get_sidebar(); ?>
</div><!-- end wrapper -->
</div><!-- end contentWrap -->
<?php get_footer(); ?>