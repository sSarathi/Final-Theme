		<?php wp_footer(); ?>
		<div ng-app="FooterbarApp">
			<div ng-controller="footerBarCntrl"> 
				<div class="button1">
					
					
					 <button type="button" ng-click="changefooter()" class="btn btn-default btn-lg">
	        		Toggle Me
	    				</button>
				</div>


				<div ng-hide="myVar">
					<footer class="blog-footer">

						<p><?php echo "sujoyTheme"; ?>-&copy;</p>
							<nav class="blog-nav-1">
								  <?php $args=array(
						        	'theme_location' => 'Footer'
						      		); ?>
									<?php wp_nav_menu($args); ?>
							</nav>			
					</footer>
				</div>
			</div>
				
		</div>
	</body>
</html>