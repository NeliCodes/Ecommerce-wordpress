<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package forward
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
<hr class="hr-1">
   
   <div class="menu-items">
   <ul>
   <a href="http://electronika.byethost33.com/shop/"><li>NEW</li></a> 
   <a href="http://electronika.byethost33.com/shop/"><li>CLOTHING</li></a>
   <a href="http://electronika.byethost33.com/shop/"><li>DRESSES</li></a>
   <a href="http://electronika.byethost33.com/shop/"><li>DESIGNERS</li></a>
   <a href="http://electronika.byethost33.com/shop/"><li>SHOPS</li></a>
	   
   </ul>
   </div>
  
   
   <hr class="hr-2">
<div style="margin-bottom: 5em;"></div>
	<?php forward_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'forward' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'forward' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
