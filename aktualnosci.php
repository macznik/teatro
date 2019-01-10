<?php /* Template Name: News*/ ?>
<?php get_header();?>

<div class="container">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<h2 class="headerTitle"><?php the_title();?></h2>
		<?php echo do_shortcode('[su_posts template="templates/teaser-loop.php" id="" posts_per_page="10" post_type="post" taxonomy="category" tax_term="" tax_operator="IN" author="" meta_key="" offset="0" order="DESC" orderby="date" post_parent="" post_status="publish" ignore_sticky_posts="no"]');?>
	<?php endwhile; endif; ?>
</div>

<?php get_footer();?>