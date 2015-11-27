<?php
/*
Template Name: homepage3
*/
?>
<?php get_header(); ?>

<div id="primary" class="content-area">

    <div id="bgeneral">
<img class="bottom" src="http://www.linkhumanrobot.website/wp-content/uploads/2.jpg" />
<img class="top" src="http://www.linkhumanrobot.website/wp-content/uploads/1.jpg" />

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
    </div><!-- #bgeneral-->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>