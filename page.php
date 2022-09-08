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

get_header(); 
    
?>
    
    <?php for ($i = 0; $i<$len; $i++) { ?>
        <div id="content<?php echo ($i+1);?>" class="story content-section ">
            <div class="navspace top"></div>
            <div class="content-inner content">
                <?php echo $arr_post[$i]->post_content; ?>
            </div>
            <div class="bottomspace"></div>
        </div>
    <?php }?>
    <div id="contentlast"></div>
<?php get_footer();
