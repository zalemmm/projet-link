<?php
/*
Template Name: homepage
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">

<div id="bgeneral">
         

		  
<div id="codebg">
		<main id="main" class="site-main" role="main">
          <div id="codebas">
			<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
		
		<h1 class="hidden"><?php the_title(); ?></h1>
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'water-lily' ),
				'after'  => '</div>',
			) );
		?>
		
		<?php edit_post_link( __( 'Edit', 'water-lily' ), '<span class="edit-link">', '</span>' ); ?>
		
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>
          </div>	
		</main><!-- #main -->
</div>	

</div>
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>