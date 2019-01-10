<?php /* Template Name: ABOUT */ ?>

<?php get_header();?>

<div class="img">
	<div class="image_horizontal" style="background-image: url('<?php the_field('horizontal_image');?>')"></div>
</div>

<div class="container">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<h2 class="first-header-title">About</h2>
		<h3 class="second-header-title">Teatro Cubano</h3>
		<div class="box-text">
			<div class="box-text-two" style="background:url('the_field('background_image_about');?>">
				<div class="text-main-about">
					<?php the_field('text_about');?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>
