<?php get_header(); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<div class="col-sm-8">
						<header class="article-header">


						</header><?php // end article header ?>

						<section class="entry-content clearfix" itemprop="articleBody">
            
							<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

							<p class="byline vcard"><?php printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&amp;</span> filed under %4$s.', 'scaffolding'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), scaffolding_get_the_author_posts_link(), get_the_category_list(', ')); ?></p>
							<?php the_content(); ?>
							<?php wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'scaffolding' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) ); ?>
						</section><?php // end article section ?>

						<footer class="article-footer">

							

						</footer><?php // end article footer ?>

					
					</div>
             <div class="col-sm-4 col-sidebar">
            <?php dynamic_sidebar( 'custom-side' ); ?> 
            </div>
					</article><?php // end article ?>

				<?php endwhile; ?>

			<?php else : ?>

			<?php get_template_part('includes/template','error'); // WordPress template error message ?>

			<?php endif; ?>

<?php get_footer();