<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
    
    <section class="site-width content-section" >
        <div class="inner-title"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
        <?php if('' !== get_post()->post_content) : ?>
        <div class="content-inner">
            <?php  the_content(); ?>
        </div>
        <?php endif; ?>
        
    </section>
    
<?php get_footer();
