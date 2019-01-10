<?php  /* Template Name: Gallery */ ?>

<?php get_header();?>
<style>
	.tlo {
	 	background: url('<?php the_field('background_image', 'options');?>');
        background-size: 100% auto;
        background-repeat: repeat-y;
        float: left;
	    top: 50%;
	    width: 100%;
	    box-sizing: border-box;
	    position: relative;
	    min-height: 900px;
       }
</style>
<div class="tlo">
	<div class="container">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	    <div class="col-sm-12 col-xs-12">
	        <h2 class="first-header-title"><?php the_title(); ?></h2>
	        <?php the_content(); ?>
	    </div>
	<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer();?>