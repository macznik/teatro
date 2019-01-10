<?php /* Template Name: Strona Główna Teatro Cubano */ ?>

<?php get_header(); ?>

<div class="main">
	<div class="container mar-top-menu">
		 <div class="main_logo_center">
			<a class="navbar-brand center_logo_href" href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
				<img class="main-logo-center" src="http://tcubano.lavidadanza.pl/wp-content/uploads/2018/09/logo.png" />
			</a>
		</div> 
	</div>
	<div id="one">
		<div class="boxes">
			<div class="col-md-12 col-xs-12 col-sm-12">
				<?php $i = 1; ?>
				<?php if(have_rows('menu_main_page')): while(have_rows('menu_main_page')) :the_row(); ?>
					<?php $test = get_sub_field('text_link');?>
					<div class="box<?php echo $i++;?>">
						<a class="box-href" href="<?php the_sub_field('link');?>">
							<div class="box-href-inside">
								<?php if($test == 'PRYWATNE Rezerwacje') {
									echo $test = '<span class="red" style="margin-left:-20px;"">PRYWATNE</span><br/><span class="blue">&nbsp&nbsp&nbsp&nbspRezerwacje</span>';
								} elseif($test == 'IMPREZY Firmowe') {
									echo $test = '<span class="blue" style="margin-left:-20px;">IMPREZY</span><br/><span class="red">&nbsp&nbsp&nbsp&nbspFirmowe</span>';
								} elseif($test == 'PRIVATE Reservations') {
									echo $test = '<span class="red" style="margin-left:-20px;">PRIVATE</span><br/><span class="blue">&nbsp&nbsp&nbspReservations</span>';
								} elseif($test == 'COMPANY Parties') {
									echo $test = '<span class="blue" style="margin-left:-20px;">COMPANY</span><br/><span class="red">&nbsp&nbsp&nbsp&nbspParties</span>';
								} else {
									if($i == 5 || $i == 7 || $i == 9 || $i == 11 || $i == 13) {
										echo '<span class="blue">'.$test.'</span>';
									} else {
										echo $test;
									}
									
								}
								?>
							</div>
						</a>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

	<div id="onas">
		<div class="img">
			<div class="image_horizontal" style="background-image: url('<?php the_field('horizontal_image');?>')"></div>
		</div>
		<div class="col-md-12 col-xs-12 col-sm-12">
			<?php if(get_locale() == 'en_GB'){ ?>
				<h2 class="first-header-title">ABOUT</h2>
				<h3 class="second-header-title">Teatro Cubano</h3>
			<?php } elseif(get_locale() == 'pl_PL') { ?>
				<h2 class="first-header-title">O</h2>
				<h3 class="second-header-title">Teatro Cubano</h3>
			<?php } ?>
			<div class="box-text">
				<div class="box-text-two" style="background-image:url('<?php the_field('background_image_about');?>">
					<div class="text-main-about">
						<?php the_field('text_about');?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $j = 1;?>
	<?php if(have_rows('sections')): while(have_rows('sections')):the_row(); ?>
		<?php 
			$img_width = get_sub_field('img_width');
			
			if(!empty($img_width)) { ?>
			<div class="img">
				<div class="image_horizontal" style="background-image: url('<?php the_sub_field('img_width');?>')"></div>
			</div>
		<?php
			}
		?>
		<div id="<?php the_sub_field('link_sekcji');?>">
			<style>
				#<?php the_sub_field('link_sekcji');?> {
				    float: left;
    				width: 100%;
				}
			</style>
			<div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:105px;">
				<h2 class="first-header-title" style="text-transform: capitalize;"><?php the_sub_field('title_section');?></h2>
				<div class="box-text">
					<div class="box-text-two">
						<?php the_sub_field('text_to_sections');?>
					</div>
				</div>
			</div>
		</div>
	<?php $j++; ?>
	<?php endwhile; endif;?>

	<div id="faq">
		<a name="faq" style="float: left;width: 100%;position: relative;">
		<div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:105px;">
			<h2 class="first-header-title">FAQ</h2>
			<div class="box-text">
				<div class="answers_faq">
					<?php $i = 1; ?>
					<?php if(have_rows('answers_faq')): while(have_rows('answers_faq')):the_row(); ?>
						<div class="panel-group" id="accordion">
				  			<div class="panel panel-default">
								<div class="panel-heading">
				      				<h3 class="panel-title faq-header">
				        				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">
				          					<span class="glyphicon <?php if($i == 1) { echo 'glyphicon-minus'; } else { echo 'glyphicon-plus';}?>"></span>
				         					<?php the_sub_field('title_faq');?>
				        				</a>
				      				</h3>
				    			</div>
								<div id="collapse<?php echo $i;?>" class="panel-collapse collapse <?php if($i == 1){ echo 'in';} ?>">
									<div class="panel-body">
				       					<?php the_sub_field('answer_the_faq');?>
				     	 			</div>
								</div>
							</div>
						</div>
						<?php $i++; ?>
					<?php endwhile; endif;?>
				</div>
			</div>
		</div>
	</a>
	</div>

	<div id="kontakt">
		<h3 class="contact_header">
		<?php if(get_locale() == 'en_GB') {
			echo 'Contact';
		} elseif(get_locale() == 'pl_PL') {
			echo 'Kontakt';
		}
		?>
	</h3>

	<div class="contact_info">
		<div class="box-text">
			<div class="col-md-12">
				<img class="logo-footer" src="<?php echo get_template_directory_uri();?>/img/logo.png" />
			</div>
			<div class="col-md-12">
				<div class="info-right-contact-small">
					<?php if(have_rows('contact_info', 'options')): while(have_rows('contact_info','options')):the_row(); ?>
						<h4 class="header-right"><?php the_sub_field('contact_header_info','options');?></h4>
						<p class="text-contact-right"><?php the_sub_field('contact_text_info','options');?></p>
					<?php endwhile; endif; ?>				
				</div>
			</div>
		</div>
	</div>
	<div class="google_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.067887196364!2d21.007454515239406!3d52.24215056453635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc615d373e2b%3A0xea0ddbc8793c4701!2sTeatro+Cubano+Warsaw!5e0!3m2!1spl!2spl!4v1537099984405" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>	


	</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
</div>

<script>

	jQuery('.collapse').on('shown.bs.collapse', function(){
		jQuery(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
		}).on('hidden.bs.collapse', function(){
		jQuery(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
		});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>

	$(document).ready(function() { 

		$('a[href^="#"]').on('click', function(event) {
		    var target = $(this.getAttribute('href'));
		    if( target.length ) {
		        event.preventDefault();
		        $('html, body').stop().animate({
		            scrollTop: target.offset().top
		        }, 1000);
		    }
		});
	});

	$(document).ready(function(){
	     $(window).scroll(function () {
	            if ($(this).scrollTop() > 50) {
	                $('#back-to-top').fadeIn();
	            } else {
	                $('#back-to-top').fadeOut();
	            }
	        });
	        // scroll body to 0px on click
	        $('#back-to-top').click(function () {
	            $('#back-to-top').tooltip('hide');
	            $('html,body').animate({
	                scrollTop: target.offset().top
				}, 1000);
	        });
	        
	        $('#back-to-top').tooltip('show');
	});
</script>

<?php get_footer(); ?>
