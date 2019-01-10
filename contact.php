<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

	<h3 class="contact_header">
		<?php if(get_locale() == 'en_GB') {
			echo 'Contact';
		} elseif(get_locale() == 'pl_PL') {
			echo 'Kontakt';
		}
		?>
	</h3>

	<div class="google_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.067887196364!2d21.007454515239406!3d52.24215056453635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc615d373e2b%3A0xea0ddbc8793c4701!2sTeatro+Cubano+Warsaw!5e0!3m2!1spl!2spl!4v1537099984405" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>	

	<div class="contact_info">
		<div class="col-md-5">
			<img class="logo-footer" src="<?php echo get_template_directory_uri();?>/img/logo.png" />
			<div class="info-contact">
				<h4 class="contact-small-header">teatro cubano</h4>
				<p class="info-small">ul. Fredry 6<br/>Warszawa</p>
			</div>
		</div>
		<div class="col-md-7">
			<div class="info-right-contact-small">
				<?php if(have_rows('contact_info')): while(have_rows('contact_info')):the_row(); ?>
					<h4 class="header-right"><?php the_sub_field('contact_header_info');?></h4>
					<p class="text-contact-right"><?php the_sub_field('contact_text_info');?></p>
				<?php endwhile; endif; ?>				
			</div>
		</div>
	</div>



<?php get_footer(); ?>
