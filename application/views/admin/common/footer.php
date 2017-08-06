
<?php if($this->uri->segment(1) == 'status'){ ?>

				<footer class="footer">
					<div class="wrap-section-border">
						<section class="section_mod-h section-bg section-bg_second">
							<div class="bg-inner border-section-top border-section-top_mod-b">
								<div class="container">
									<div class="row">
										<div class="col-xs-12">
                                            <!-- <h2 class="footer-title">Lillian Montalto<br><span class="footer-title__inner">Signature Properties</span></h2> -->
											<h2 class="footer-title"><img src="<?=ASSETS_ADMIN_DIR_IMG?>status-logo.png" class="img-responsive" style="width:400px;margin: 0 auto;"></span></h2>
											<div class="decor-1 decor-1_mod-b"></div>
										</div>
										<!-- end col -->
									</div>
									<!-- end row -->
									<div class="row">
										<div class="col-xs-12">
											<div class="footer__name">Company Name:</div>
											<div class="footer__text">Lillian Montalto Signature Properties International, LLC</div>
										</div>
										<!-- end col -->
									</div>
									<!-- end row -->
									<div class="row">
										<div class="col-xs-12">
											<div class="footer__name">Address:</div>
											<div class="footer__text">34 Park Street, Suite One, Andover, MA 01810</div>
										</div>
										<!-- end col -->
									</div>
									<!-- end row -->
									<div class="row">
										<div class="col-xs-12">
											<div class="footer__name">Contact Info:</div>
											<div class="footer__text">Office Phone: 978-475-1400</div>
										</div>
										<!-- end col -->
									</div>
									<!-- end row -->
									<div class="row">
										<div class="col-xs-12">
											<div class="footer__name">Email:</div>
											<div class="footer__text"><a href="mailto:info@andoverhomes.com">info@AndoverHomes.com</a></div>
										</div>
										<!-- end col -->
									</div>
									<!-- end row -->
									<div class="row">
										<div class="col-xs-12">
											<ul class="social-links list-inline">
												<li><a class="icon fa fa-facebook" target="_blank" href="https://www.facebook.com/LillianMontaltoSignatureProperties/"></a></li>
												<li><a class="icon fa fa-twitter" target="_blank" href="https://twitter.com/lillianmontalto"></a></li>
                                                <li><a class="icon fa fa-linkedin" target="_blank" href="https://www.linkedin.com/in/lmspi"></a></li>
												<li><a class="icon fa fa-youtube-play" target="_blank" href="https://www.youtube.com/user/LillianMontalto"></a></li>
                                                <li><a class="icon fa fa-pinterest" target="_blank" href="https://www.pinterest.com/LMSPRealEstate/"></a></li>
												<li><a class="icon fa fa-instagram" target="_blank" href="https://www.instagram.com/lmsprealestate/"></a></li>
											</ul>
										</div>
										<!-- end col -->
									</div>
									<!-- end row -->
								</div>
								<!-- end container -->
							</div>
							<!-- end bg-inner -->
						</section>
						<!-- end section_mod-b -->
					</div>
					<!-- end wrap-section-border -->
					<div class="footer__wrap-btn"> <a class="footer__btn scroll" href="#this-top">top</a> </div>
					<div class="copyright">&copy; 2017 - 2018 <strong>Lillian Montalto Signature Properties International, LLC</strong> | All rights reserved</div>
				</footer>
			</div>
			<!-- end #wrapper -->
		</div>
		<!-- end layout-theme -->
		<!-- SCRIPTS -->
        <script src="<?=ASSETS_ADMIN_DIR?>plugins/jquery/jquery.min.js"></script>
		<script src="<?=ASSETS_ADMIN_DIR?>js/smooth.scroll.min.js"></script>
        <script src="<?=ASSETS_ADMIN_DIR?>js/jquery.mousewheel.min.js"></script>

        <script src="<?=ASSETS_ADMIN_DIR?>js/lightgallery.min.js"></script>
        <script src="<?=ASSETS_ADMIN_DIR?>js/lg-thumbnail.min.js"></script>
        <script src="<?=ASSETS_ADMIN_DIR?>js/lg-fullscreen.min.js"></script>
        <script src="<?=ASSETS_ADMIN_DIR?>js/lg-autoplay.min.js"></script>
		<script src="<?=ASSETS_ADMIN_DIR?>js/lg-zoom.min.js"></script>

		<script src="<?=ASSETS_ADMIN_DIR?>js/jquery-migrate-1.2.1.js"></script>
		<script src="<?=ASSETS_ADMIN_DIR?>plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?=ASSETS_ADMIN_DIR?>js/modernizr.custom.js"></script>
		<script src="<?=ASSETS_ADMIN_DIR?>plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="<?=ASSETS_ADMIN_DIR?>js/waypoints.min.js"></script>
		<script src="<?=ASSETS_ADMIN_DIR?>plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="<?=ASSETS_ADMIN_DIR?>plugins/jelect/jquery.jelect.js"></script>
		<!--HOME SLIDER-->
		<script  src="<?=ASSETS_ADMIN_DIR?>plugins/sliderpro/js/jquery.sliderPro.min.js"></script>
		<!--THEME-->
		<script src="<?=ASSETS_ADMIN_DIR?>js/wow.min.js"></script>
		<script src="<?=ASSETS_ADMIN_DIR?>js/custom.js"></script>
		<script>
			$(document).ready(function() {
			    $("#lightgallery").lightGallery();
			});
		</script>
	</body>
</html>

<?php }else{ ?>

			<!------------------------->
			<!-- STYLE CONFIGURATION -->
			<!------------------------->
			<button class="btn btn-primary btn-fab demo-switcher-fab" data-toggle="tooltip" data-placement="top" title="Style configuration"><i class="material-icons">settings</i></button>

			<!----------------------------->
			<!-- STYLE POPUP BOX CONTENT -->
			<!----------------------------->
			<div class="demo-options">
				<div class="demo-body">
					<div class="tabular">
						<div class="tabular-row">
							<div class="tabular-cell">Fixed Header</div>
							<div class="tabular-cell demo-switches text-right">
								<div class="togglebutton checkbox-primary">
									<label>
										<input type="checkbox" name="demo-fixedheader">
									</label>
								</div>
							</div>
						</div>
						<div class="tabular-row">
							<div class="tabular-cell">Boxed Layout</div>
							<div class="tabular-cell demo-switches text-right">
								<div class="togglebutton toggle-primary">
									<label>
									<input type="checkbox" name="demo-layoutboxed">
									</label>
								</div>
							</div>
						</div>
						<div class="tabular-row">
							<div class="tabular-cell">Collapse Leftbar</div>
							<div class="tabular-cell demo-switches text-right">
								<div class="togglebutton toggle-primary">
									<label>
									<input type="checkbox" name="demo-collapseleftbar">
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="demo-body">
					<div class="option-title">Brand</div>
					<ul id="demo-header-color" class="demo-color-list">
						<li><span data-addclass="navbar-brand-default" class="brand-switcher demo-default"></span></li>
						<li><span data-addclass="navbar-brand-primary" class="brand-switcher demo-primary"></span></li>
						<li><span data-addclass="navbar-brand-success" class="brand-switcher demo-success"></span></li>
						<li><span data-addclass="navbar-brand-danger" class="brand-switcher demo-danger"></span></li>
						<li><span data-addclass="navbar-brand-warning" class="brand-switcher demo-warning"></span></li>
						<li><span data-addclass="navbar-brand-info" class="brand-switcher demo-info"></span></li>
						<li><span data-addclass="navbar-brand-inverse" class="brand-switcher demo-inverse"></span></li>
					</ul>
				</div>
				<div class="demo-body">
					<div class="option-title">Topnav</div>
					<ul id="demo-header-color" class="demo-color-list">
						<li><span data-addclass="navbar-cyan" class="topnav-switcher demo-cyan"></span></li>
						<li><span data-addclass="navbar-light-blue" class="topnav-switcher demo-light-blue"></span></li>
						<li><span data-addclass="navbar-blue" class="topnav-switcher demo-blue"></span></li>
						<li><span data-addclass="navbar-indigo" class="topnav-switcher demo-indigo"></span></li>
						<li><span data-addclass="navbar-deep-purple" class="topnav-switcher demo-deep-purple"></span></li>
						<li><span data-addclass="navbar-purple" class="topnav-switcher demo-purple"></span></li>
						<li><span data-addclass="navbar-pink" class="topnav-switcher demo-pink"></span></li>
						<li><span data-addclass="navbar-red" class="topnav-switcher demo-red"></span></li>
						<li><span data-addclass="navbar-teal" class="topnav-switcher demo-teal"></span></li>
						<li><span data-addclass="navbar-green" class="topnav-switcher demo-green"></span></li>
						<li><span data-addclass="navbar-light-green" class="topnav-switcher demo-light-green"></span></li>
						<li><span data-addclass="navbar-orange" class="topnav-switcher demo-orange"></span></li>
						<li><span data-addclass="navbar-deep-orange" class="topnav-switcher demo-deep-orange"></span></li>
						<li><span data-addclass="navbar-bluegray" class="topnav-switcher demo-bluegray"></span></li>
						<li><span data-addclass="navbar-gray" class="topnav-switcher demo-gray"></span></li>
						<li><span data-addclass="navbar-default" class="topnav-switcher demo-default"></span></li>
						<li><span data-addclass="navbar-bleachedcedar" class="topnav-switcher demo-bleachedcedar"></span></li>
						<li><span data-addclass="navbar-brown" class="topnav-switcher demo-brown"></span></li>
					</ul>
				</div>
				<div class="demo-body">
					<div class="option-title">Sidebar</div>
					<ul id="demo-sidebar-color" class="demo-color-list">
						<li><span data-addclass="sidebar-cyan" class="leftbar-switcher demo-cyan"></span></li>
						<li><span data-addclass="sidebar-light-blue" class="leftbar-switcher demo-light-blue"></span></li>
						<li><span data-addclass="sidebar-blue" class="leftbar-switcher demo-blue"></span></li>
						<li><span data-addclass="sidebar-indigo" class="leftbar-switcher demo-indigo"></span></li>
						<li><span data-addclass="sidebar-deep-purple" class="leftbar-switcher demo-deep-purple"></span></li>
						<li><span data-addclass="sidebar-purple" class="leftbar-switcher demo-purple"></span></li>
						<li><span data-addclass="sidebar-pink" class="leftbar-switcher demo-pink"></span></li>
						<li><span data-addclass="sidebar-red" class="leftbar-switcher demo-red"></span></li>
						<li><span data-addclass="sidebar-teal" class="leftbar-switcher demo-teal"></span></li>
						<li><span data-addclass="sidebar-green" class="leftbar-switcher demo-green"></span></li>
						<li><span data-addclass="sidebar-light-green" class="leftbar-switcher demo-light-green"></span></li>
						<li><span data-addclass="sidebar-orange" class="leftbar-switcher demo-orange"></span></li>
						<li><span data-addclass="sidebar-deep-orange" class="leftbar-switcher demo-deep-orange"></span></li>
						<li><span data-addclass="sidebar-bluegray" class="leftbar-switcher demo-bluegray"></span></li>
						<li><span data-addclass="sidebar-gray" class="leftbar-switcher demo-gray"></span></li>
						<li><span data-addclass="sidebar-default" class="leftbar-switcher demo-default"></span></li>
						<li><span data-addclass="sidebar-bleachedcedar" class="leftbar-switcher demo-bleachedcedar"></span></li>
						<li><span data-addclass="sidebar-brown" class="leftbar-switcher demo-brown"></span></li>
					</ul>
				</div>
			</div>
		
			<!-- Load site level scripts -->
			<!-- 
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
			-->
			<script src="<?=ASSETS_ADMIN_DIR?>js/jquery-1.10.2.min.js"></script> 								<!-- Load jQuery -->
			<script src="<?=ASSETS_ADMIN_DIR?>js/smooth.scroll.min.js"></script>

	        <script src="<?=ASSETS_ADMIN_DIR?>js/lightgallery.min.js"></script>
	        <script src="<?=ASSETS_ADMIN_DIR?>js/lg-thumbnail.min.js"></script>
	        <script src="<?=ASSETS_ADMIN_DIR?>js/lg-fullscreen.min.js"></script>
	        <script src="<?=ASSETS_ADMIN_DIR?>js/lg-autoplay.min.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>js/lg-zoom.min.js"></script>

			<script src="<?=ASSETS_ADMIN_DIR?>js/jqueryui-1.10.3.min.js"></script> 								<!-- Load jQueryUI -->
			<script src="<?=ASSETS_ADMIN_DIR?>js/bootstrap.min.js"></script> 									<!-- Load Bootstrap -->
			<script src="<?=ASSETS_ADMIN_DIR?>js/enquire.min.js"></script> 										<!-- Load Enquire -->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/velocityjs/velocity.min.js"></script>						<!-- Load Velocity for Animated Content -->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/velocityjs/velocity.ui.min.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/progress-skylo/skylo.js"></script> 						<!-- Skylo -->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/wijets/wijets.js"></script>     							<!-- Wijet -->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/sparklines/jquery.sparklines.min.js"></script> 			<!-- Sparkline -->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/codeprettifier/prettify.js"></script> 					<!-- Code Prettifier  -->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  	<!-- Bootstrap Tabdrop -->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> 	<!-- nano scroller -->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/dropdown.js/jquery.dropdown.js"></script> 				<!-- Fancy Dropdowns -->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/bootstrap-material-design/js/material.min.js"></script>	<!-- Bootstrap Material -->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/bootstrap-material-design/js/ripples.min.js"></script> 	<!-- Bootstrap Material -->
			<script src="<?=ASSETS_ADMIN_DIR?>js/application.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>demo/demo.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>demo/demo-switcher.js"></script>
			<!-- End loading site level scripts -->
			
			<!-- Load page level scripts-->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/datatables/jquery.dataTables.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/datatables/dataTables.bootstrap.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>demo/demo-datatables.js"></script>
			<!-- End loading page level scripts-->
			
			<!-- Load page level scripts-->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/form-inputmask/jquery.inputmask.bundle.min.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>demo/demo-mask.js"></script>
			<script src="https://cdn.jsdelivr.net/autonumeric/2.0.0/autoNumeric.min.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/gridforms/gridforms/gridforms.js"></script>
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/dropzone/dropzone.min.js"></script>
			<!-- End loading page level scripts-->
			
			<script>
				$(document).ready(function() {
				    $("#lightgallery").lightGallery();
				});
			</script>
			
			<script>
				var selector = '.currency';

				// autoNumeric with the defaults options
				$(selector).autoNumeric('init');

				const options = {
					digitGroupSeparator        : '.',
					decimalCharacter           : ',',
					decimalCharacterAlternative: '.',
					currencySymbol             : '$',
					currencySymbolPlacement    : 's',
					roundingMethod             : 'U',
				};

				// autoNumeric with specific options being passed
				$(selector).autoNumeric('init', { options });
			</script>
			
			<?php if($this->uri->segment(2) == 'edit_listing'){ ?>
			<!-- JS Show Input on Select -->
			<script>
				$('#process').on('change',function(){
					if( $(this).val()==="Listing Process" ){
						$("#ListingStep").hide()
						$("#NewStep2").hide()
						$("#NewStep1").show()
					}
					else if($(this).val()==="Closing Process" ){
						$("#ListingStep").hide()
						$("#NewStep1").hide()
						$("#NewStep2").show()
					}
				});
			</script>
			<?php } ?>
			
			<?php if($this->uri->segment(2) == 'add_step' OR $this->uri->segment(2) == 'edit_step'){ ?>
			<!-- Load page level scripts-->
			<script src="<?=ASSETS_ADMIN_DIR?>plugins/summernote/dist/summernote.js"></script>  	<!-- Summernote -->
			<script>
				$(document).ready(function() {
					$('.summernote').summernote({
						height: 200
					});

					$('.airmode').summernote({
					  airMode: true
					});
				});
			</script>
			<!-- End loading page level scripts-->
			<?php } ?>
			
		</body>
	</html>
	
<?php } ?>