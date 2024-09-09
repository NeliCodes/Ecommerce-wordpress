<?php
/**
 * Template part for displaying posts
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
	<header class="entry-header responsive-entry-header" >
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				forward_posted_on();
				forward_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php forward_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'forward' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'forward' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php forward_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
