<?php /* Template Name: FAQ */ ?>

<?php get_header();?>

<div class="container">
	<div class="col-md-12 col-xs-12 col-sm-12">
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
</div>
<script>

	jQuery('.collapse').on('shown.bs.collapse', function(){
		jQuery(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
		}).on('hidden.bs.collapse', function(){
		jQuery(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
		});

</script>
<?php get_footer();?>

	