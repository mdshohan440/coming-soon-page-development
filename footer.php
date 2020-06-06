
		<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6">
					<ul id="fh5co-social">
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
						<li><a href="#"><i class="icon-google-plus"></i></a></li>
						<li><a href="#"><i class="icon-pinterest-square"></i></a></li>
					</ul>
				</div>
				<div class="col-md-6 fh5co-copyright">
						<?php 	
						if(is_active_sidebar('copyright-sidebar')){
							dynamic_sidebar('copyright-sidebar');
						}
						
						?>
					
				</div>
			</div>
		</div>
		
	</div>
	<?php wp_footer();	?>

	</body>
</html>

