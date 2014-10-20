<?php get_header(); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
          	<div class="row">
						<div class="col-sm-6">
            <?php dynamic_sidebar( 'home-top-left' ); ?> 
            </div>
            <div class="col-sm-6">
            <?php dynamic_sidebar( 'home-top-right' ); ?> 
            </div>
            </div>
            <div class="row">
            	<div class="col-sm-4">
            <?php dynamic_sidebar( 'home-mid-left' ); ?> 
            </div>
            <div class="col-sm-4">
            <?php dynamic_sidebar( 'home-mid-center' ); ?> 
            </div>
             <div class="col-sm-4">
            <?php dynamic_sidebar( 'home-mid-right' ); ?> 
            </div>
            </div>
						<header class="article-header"></header>
            

						<section class="entry-content clearfix">
							<?php the_content(); ?>
							<?php wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'scaffolding' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) ); ?>
						</section>

						<footer class="article-footer">

							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>

						</footer>

					</article>

				<?php endwhile; ?>

			<?php else : ?>

			<?php get_template_part('includes/template','error'); // WordPress template error message ?>

			<?php endif; ?>

<?php get_footer();