
<?php
/*
*Template Name: Homepage Template
*/
 get_header();	
 the_post();
 
	$placeholder 	= 	get_post_meta(	get_the_ID() , "placeholder" , true);
	$button_text  =		get_post_meta(	get_the_ID() , "button_text" , true);
	$hint 		  =		get_post_meta(	get_the_ID() , "hint", true);
 ?>
 
	<div id="fh5co-main-content">
		<div class="dt js-dt">
			<div class="dtc js-dtc">
				<div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-7">
								<div class="fh5co-intro animate-box">
									<h2><?php the_title();	?></h2>
									<p><?php  the_content();	?></p>
								</div>
							</div>
							
							<div class="col-lg-7 animate-box">
								<form action="#" id="fh5co-subscribe">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo esc_attr( $placeholder );	?>">
										<input type="submit" value="<?php echo esc_attr(	$button_text ); ?>" class="btn btn-primary">
										<p class="tip"><?php echo esc_html( $hint );  ?></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>
<?php get_footer();	?>