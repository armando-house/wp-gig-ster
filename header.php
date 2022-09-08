<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<script type="text/javascript">
		$(document).ready(function() {
		    $('.topnav li:last-child a').css('border','none');
		    
		    	    //Change background on first element after scrolling starts to prevent background painting problems in Webkit
		    $(window).scroll(function(){
		        if ($(window).scrollTop() > 0){
		            $('.main #content1').css('background-attachment','fixed');
		            //$('.main').css('background','none');
		        }
		    });
		    	    
			
		   	//$('.leftnav li#content1').addClass('active');
		    
			$('.story').waypoint(function(event, direction) {
			   var $active = $(this);

				if (direction === "up") {
					$active = $active.prev();
				}
				if (!$active.length) $active.end();
				
				$getid = $active.attr('id');
				if ($getid==undefined) $getid="content1";
				
				$('.leftnav li').removeClass('active');
				//$('.leftnav li#'+$getid).addClass('active');
				

			}, {
			   offset: 400  // middle of the page
			});
					
			resizechange();

		});
		
		function scrollTo2(prop) {
		    $('html,body').animate({scrollTop: $(".main #content"+prop).offset().top },'slow');

		}

		
		$(window).resize(function() {
			resizechange();
		});
			
		
		function resizechange() {
			var currentheight = $(window).height();
			
			var heightdiff = currentheight-880;

					
			//alert(heightdiff);
			//console.log(currentheight + ' - ' + heightdiff);
			$('#contentlast').css('height',heightdiff);
		}
		
		
	</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
	$page_title = strtolower(get_the_title());
	$cate_name = $page_title;
	$isofeaturedimage = get_the_post_thumbnail_url();

	$args = array(
	  'post_type' => 'post',
	  'posts_per_page' => 3,
	'category_name' => $cate_name,
	);
	$query = new WP_Query( $args );
	global $arr_post;
	$arr_post = array();
	$arr_post = $query->get_posts();
	global $len;
	$len = count($arr_post);

	Wp_reset_query();

?>
<style type="text/css">

#background_wrap {background:url(<?=$isofeaturedimage ;?>) 50% 0 no-repeat fixed; }

.main {background:url(<?=$isofeaturedimage ;?>) 50% 0 no-repeat fixed;}

<?php for ($i = 0; $i<$len; $i++) { ?>
	.main #content<?php echo ($i+1);?> { background:url(<?php echo get_the_post_thumbnail_url($arr_post[$i]->ID);?>) 50% 0 no-repeat ;background-size: cover; background-attachment: fixed;}	
<?php } ?>
		
</style>

<div class="leftnav">
	<ul>
		<?php for ($i = 0; $i<$len; $i++) { ?>
			<li id="content<?php echo ($i+1);?>"><a href="javascript:void();" onclick="scrollTo2('<?php echo ($i+1);?>');"><?=$arr_post[$i]->post_name;?></a></li>
		<?php } ?>
	</ul>
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>	

	<!-- <div id="content" class="site-content  hero" >
		<div id="primary" class="content-area"> -->
			<main id="main" class="site-main main">
