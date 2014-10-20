<?php
/*
Template Name: Delivery Template
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
    <div class="col-sm-8">
    <div class="description">
       <h1 class="entry-title page-title">
                <?php the_title(); ?>
            </h1>
            <?php the_field('description'); ?>
            </div>
        <header class="article-header"> </header>
        <section class="entry-content clearfix">
         
            
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
    <div class="col-sm-4">
    		<div class="primary-info-sidebar">
        <h3>Project Information</h3>
        <div class="col-sm-12 col-md-3">
        <p><strong>Address:</strong></p>
        </div>
        <div class="col-sm-12 col-md-9">
				<p><?php the_field('street'); ?><br /><?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip'); ?></p></div>
        <div class="col-sm-12 col-md-3"><p><strong>Phone:</strong></p></div>
				<div class="col-sm-12 col-md-9"><p><?php the_field('phone'); ?></p></div>
        <div class="col-sm-12 col-md-3"><p><strong>Email:</strong></p></div>
        <div class="col-sm-12 col-md-9 email-cont"><p><?php the_field('email'); ?></p></div>
        </div>
        <div class="primary-info-sidebar">
       
        <h3>Primary Updates</h3>
        <?php the_field('primary_updates'); ?>
        <hr class="red-rule" />
        <h3>Vendors</h3>
        
        <img src="/wp-content/uploads/sites/3/2014/09/rosenbauer-logo.png" />
         <hr class="red-rule" />
        <h3>Contact Us</h3>
        <div class="col-sm-12 col-md-3">
        <p><strong>Address:</strong></p>
        </div>
        <div class="col-sm-12 col-md-9">
				<p>3995 Lockport Road<br />Niagara Falls, NY 14304</p></div>
        <div class="col-sm-12 col-md-3"><p><strong>Phone:</strong></p></div>
				<div class="col-sm-12 col-md-9"><p> (855) 377-3511</p></div>
        <div class="col-sm-12 col-md-3"><p><strong>Email:</strong></p></div>
        <div class="col-sm-12 col-md-9 email-cont"><p>sales@empirefiretrucks.com</p></div>
        </div>
    </div>
</article>
<?php endwhile; ?>
<?php else : ?>
<?php get_template_part('includes/template','error'); // WordPress template error message ?>
<?php endif; ?>
<?php get_footer();
