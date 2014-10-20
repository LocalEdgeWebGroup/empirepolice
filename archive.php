<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>
    <div class="col-sm-8">
	<section class="entry-content clearfix">
			<header class="page-header">
				<h1 class="archive-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author Archive: %s', 'test' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'test' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'test' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'test' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'test' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'test' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'test' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'test');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'test');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'test' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'test' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'test' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'test' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'test' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'test' );

						else :
							_e( 'Archives', 'test' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

  
						<header class="article-header">

							<h3 class="entry-title h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>


						</header> <!-- end article header -->

					

							<?php the_post_thumbnail( 'scaffolding-thumb-300' ); ?>

							<?php the_excerpt(); ?>

						<!-- end article section -->

						<footer class="article-footer">

						</footer> <!-- end article footer -->

					</article> <!-- end article -->

				<?php endwhile; ?>
</section> 
</div>
   <div class="col-sm-4 col-sidebar">
            <?php dynamic_sidebar( 'custom-side' ); ?> 
            </div>
				<?php get_template_part('includes/template','pager'); //wordpress template pager/pagination ?>

			<?php else : ?>

			<?php get_template_part('includes/template','error'); //wordpress template error message ?>

			<?php endif; ?>


<?php get_footer();