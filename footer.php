<div class="menu_bottom hide_bottom">
	<?php if(get_locale() == 'en_GB') { ?>
		<div class="col-md-8 col-xs-12 col-sm-12">
			<div class="menu-bottom-left">
				<ul class="navbar-bottom-left">
					<?php if(have_rows('menu_bottom_left_gb','options')):while(have_rows('menu_bottom_left_gb','options')):the_row();?>
						<li id="menu-bottom-li-left"><a href="<?php the_sub_field('link_gb','options');?>"><?php the_sub_field('title_link_gb','options');?></a></li>
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12">
			<div class="menu-bottom-right">
				<ul class="navbar-bottom-right">
					<?php if(have_rows('menu_bottom_right_gb','options')):while(have_rows('menu_bottom_right_gb','options')):the_row();?>
						<li id="menu-bottom-li-right"><a href="<?php the_sub_field('link_gb','options');?>"><?php the_sub_field('title_link_gb','options');?></a></li>
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
	<?php } elseif(get_locale() == 'pl_PL') { ?>
		<div class="col-md-8 col-xs-12 col-sm-12">
			<div class="menu-bottom-left">
				<ul class="navbar-bottom-left">
					<?php if(have_rows('menu_bottom_left_pl','options')):while(have_rows('menu_bottom_left_pl','options')):the_row();?>
						<li id="menu-bottom-li-left"><a href="<?php the_sub_field('link_pl','options');?>"><?php the_sub_field('title_link_pl','options');?></a></li>
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12">
			<div class="menu-bottom-right">
				<ul class="navbar-bottom-right">
					<?php if(have_rows('menu_bottom_right_pl','options')):while(have_rows('menu_bottom_right_pl','options')):the_row();?>
						<li id="menu-bottom-li-right"><a href="<?php the_sub_field('link','options');?>"><?php the_sub_field('title_link_pl','options');?></a></li>
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
	<?php } ?>
</div>

<?php wp_footer(); ?>

</body></html>
