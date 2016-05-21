<?php
/**
 * Template Name: Sub Pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>
<div class="">
<div>
  <div class="page-content span12">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!--REMOVE TITLE<div class="container">
		<div class="row" id="content-titles">
  			<div class="col-lg-2 col-md-2 col-sm-2"><hr></div>
  			 <div class="home-title col-lg-8 col-md-8 col-sm-8"><h1><?php the_title(); ?></h1></div> 
  			<div class="col-lg-2 col-md-2 col-sm-2"><hr></div>
		</div>
	</div>-->
		<div>
			<div><?php the_content(); ?></div>
		</div>


	<?php endwhile; else: ?>
		<p class="page-content"><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
</div>
</div>

<?php get_footer(); ?>


