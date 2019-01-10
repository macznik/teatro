<?php get_header(); ?>

<div class="container mar-top-menu">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-sm-12 col-xs-12">
       <h2 class="headerTitle"> <?php the_title(); ?> </h2>
        <div class="box-text">
			<div class="box-text-two" style="background:url('the_field('background_image_about');?>">
				<div class="text-main-about">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
    </div>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
