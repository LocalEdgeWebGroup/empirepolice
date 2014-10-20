<?php
/*
Template Name: No Comment Sidebar
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
    <div class="col-sm-8">
        <header class="article-header"> </header>
        <section class="entry-content clearfix">
            <h1 class="entry-title page-title">
                <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>
            <?php wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'scaffolding' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) ); ?>
        </section>
        <footer class="article-footer"> </footer>
    </div>
    <div class="col-sm-4 col-sidebar">
        <?php dynamic_sidebar( 'custom-side' ); ?>
    </div>
</article>
<?php endwhile; ?>
<?php else : ?>
<?php get_template_part('includes/template','error'); // WordPress template error message ?>
<?php endif; ?>
<?php get_footer();
