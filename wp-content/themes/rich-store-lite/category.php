<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Rich Store Lite
 */

get_header(); ?>

<div class="container">
     <div id="richstore_singlepage_panel">
        <section class="richstore_singlepage_pagecontentbx">
            <header class="page-header">
				 <?php
						the_archive_title( '<h1 class="entry-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?> 
            </header><!-- .page-header -->
			<?php if ( have_posts() ) : ?>
                <div class="site-bloglist">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content' ); ?>
                    <?php endwhile; ?>                   
                </div>
                <?php the_posts_pagination(); ?>
            <?php else : ?>
                <?php get_template_part( 'no-results' ); ?>
            <?php endif; ?>
       </section>
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->

<?php get_footer(); ?>