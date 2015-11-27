<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package water lily
 */
?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		

<p>
<a href="  <?php echo esc_url( home_url( '/' ) ); ?>  ">&copy; 2015 Link Human/Robot</a> 
<span class="smarthide"> |
<a <? if(is_page( 'representations' )) echo 'class="select"'; ?> href="http://www.linkhumanrobot.website/representations/">Historique du projet &frasl;</a> 
<a <? if(is_category( 'le-collectif' )) echo 'class="select"'; ?> href="http://www.linkhumanrobot.website/category/le-collectif/">  Le Collectif &frasl;</a> 
<a <? if(is_page( 'credits' )) echo 'class="select"'; ?> href="index.php?p=1274">Crédits &frasl;</a>  
<a <? if(is_page( 'contact' )) echo 'class="select"'; ?> href="index.php?p=1271"> Contact</a></span>   
</p> 

			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>