<?php /* Template Name: Company Parties */ ?>

<?php get_header();?>

<div class="container">
	<div class="col-md-12 col-xs-12 col-sm-12">
		<h2 class="first-header-title">
			<?php if(get_locale() == 'en_GB') { ?>
				Company Parties
			<?php } elseif(get_locale() == 'pl_PL') { ?>
				Imprezy Firmowe
			<?php } ?>
			</h2>
	</div>
</div>

<?php get_footer();?>