<?php get_header(); ?>

<div class="container mar-top-menu">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-sm-12 col-xs-12">
        <?php the_title(); ?>
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
