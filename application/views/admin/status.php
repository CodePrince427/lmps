	<body>
		<div id="this-top" class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  >

			<!-- Loader -->
			<div id="page-preloader"><span class="spinner"></span></div>
			<!-- Loader end -->

			<div id="wrapper">
				<div id="sliderpro1" class="slider-pro main-slider">
					<div class="sp-slides">
						<?php for($i=0; $i < $slider_counter; $i++){ ?>
						<div class="sp-slide">
                            <div class="image-wrap">
								<img src="<?=ASSETS_ADMIN_DIR_SLIDER?><?php echo $listing_slider[$i]['pic']; ?>" alt="img" />
							</div>
							<div class="item-wrap sp-layer sp-padding" data-horizontal="100"  data-vertical="300"
								data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
								<div class="main-slider__inner text-left">
									<div class="custom-caption">
										<span class="main-slider__btn btn-effect title-mask" >
                                            <span class="main-slider__btn_inner">Best offer</span>
                                        </span>
                                        <br>
                                        <span class="main-slider__title title-mask"><?php echo $listing[0]['address']; ?></span>
                                        <br>
										<span class="main-slider__subtitle title-mask"><?php echo $listing[0]['city']; ?>, <?php echo $listing[0]['state']; ?></span>
                                        <br>
                                        <span class="main-slider__price title-mask">$ <?php echo intval($listing[0]['price']).".00"; ?></span>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
				<!-- end main-slider -->
				<section class="section_mod-a section-bg-2">
					<div class="bg-inner">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="main-block text-center">
										<div class="main-block__label">your agent</div>
										<div class="decor-1 center-block"></div>
										<h1 class="main-block__title"><strong><?php echo $agent[0]['agent_name']; ?></strong></h1>
                                        <img src="<?=ASSETS_ADMIN_DIR_USER?><?php echo $agent[0]['agent_pic']; ?>" alt="agent" class="img-responsive main-block__agent-image">
                                        <div class="agent-info">
                                            <p class="agent-contact"><i class="material-icons">phone</i> <?php echo $agent[0]['agent_cell']; ?></p>
                                            <p class="agent-email"><i class="material-icons">email</i> <a href="mailto:<?php echo $agent_email[0]['email']; ?>"><?php echo $agent_email[0]['email']; ?></a></p>
                                        </div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="main-block text-center">
										<div class="main-block__label">property details</div>
										<div class="decor-1 center-block"></div>
                                        <div class="agent-info">
                                            <h1 class="main-block__title"><strong>Property Address</strong></h1>
                                            <p class="agent-contact"><?php echo $listing[0]['address']; ?>,</p>
                                            <p class="agent-contact"><?php echo $listing[0]['city']; ?>, <?php echo $listing[0]['state']; ?></p>
                                            <p class="agent-contact"><?php echo $listing[0]['zipcode']; ?></p>
                                        </div>
									</div>
									<br><br>
									<br><br>
									<div class="main-block text-center">
										<div class="main-block__label">seller details</div>
										<div class="decor-1 center-block"></div>
                                        <div class="agent-info">
                                            <h1 class="main-block__title"><strong>Seller</strong></h1>
                                            <p class="agent-contact"><?php echo $seller[0]['seller_name']; ?>,</p>
                                            <p class="agent-contact"><i class="material-icons">phone</i> <?php echo $seller[0]['seller_cell']; ?></p>
                                            <p class="agent-email"><i class="material-icons">email</i> <a href="mailto:<?php echo $seller_email[0]['email']; ?>"><?php echo $seller_email[0]['email']; ?></a></p>
                                        </div>
									</div>
								</div>
								<!-- end col -->
							</div>
						</div>
						<!-- end container -->
					</div>
				</section>
				<!-- end section_mod-a -->
				<div class="wrap-section-border">
					<section class="section_mod-b section-bg section-bg_primary">
						<div class="bg-inner border-section-top border-section-top_mod-a">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12">
										<?php if($listing[0]['process'] == 'Listing Process'){ ?>
										<h2 class="ui-title-block ui-title-block_mod-a text-center">The Listing Process</h2>
										<?php }else{ ?>
										<h2 class="ui-title-block ui-title-block_mod-a text-center">The Closing Process</h2>
										<?php } ?>
										
										<div class="slider-services owl-carousel owl-theme owl-theme_mod-a enable-owl-carousel"
											data-min480="2"
											data-min768="3"
											data-min992="4"
											data-min1200="7"
											data-pagination="true"
											data-navigation="false"
											data-stop-on-hover="true">
											
											<?php for($j=0; $j<$steps_counter; $j++){ ?>
											<?php if($listing_step[0]['step_no'] == $listing_steps[$j]['step_no']){ ?>
											<div class="list-services list-services-active">
												<a href="#<?php echo $listing_steps[$j]['step_no'];?>" aria-controls="<?php echo $listing_steps[$j]['step_no'];?>" role="tab" data-toggle="tab">
													<div class="decor-1"></div>
													<div class="list-services__inner">
														<h1 class="list-services__id"><?php echo $listing_steps[$j]['step_no'];?>.</h1>
														<h3 class="list-services__title"><strong><?php echo $listing_steps[$j]['step_name'];?></strong></h3>
													</div>
												</a>
											</div>
											<?php }elseif($listing_steps[$j]['step_no'] < $listing_step[0]['step_no']){ ?>
											<div class="list-services">
												<a href="#<?php echo $listing_steps[$j]['step_no'];?>" aria-controls="<?php echo $listing_steps[$j]['step_no'];?>" role="tab" data-toggle="tab">
													<div class="decor-1"></div>
													<div class="list-services__inner">
														<h1 class="list-services__id"><?php echo $listing_steps[$j]['step_no'];?>.</h1>
														<h3 class="list-services__title"><strong><?php echo $listing_steps[$j]['step_name'];?></strong></h3>
													</div>
												</a>
											</div>
											<?php }else{ ?>
											<div class="list-services-disabled">
												<a href="#<?php echo $listing_steps[$j]['step_no'];?>" aria-controls="<?php echo $listing_steps[$j]['step_no'];?>" role="tab">
													<div class="decor-1"></div>
													<div class="list-services__inner">
														<h1 class="list-services__id"><?php echo $listing_steps[$j]['step_no'];?>.</h1>
														<h3 class="list-services__title"><strong><?php echo $listing_steps[$j]['step_name'];?></strong></h3>
													</div>
												</a>
											</div>
											<?php } } ?>
											
										</div>
										<!-- end slider-services -->
									</div>
									<!-- end col -->
								</div>
								<!-- end row -->
                                <div class="row">
                                    <div class="col-xs-12">
										<div class="tab-content">
											<?php for($k=0; $k<$steps_counter; $k++){ ?>
											<div id="<?php echo $listing_steps[$k]['step_no'];?>" role="tabpanel" class="step-description tab-pane 
											<?php if($listing_step[0]['step_no'] == $listing_steps[$k]['step_no']){ echo "active"; }else{ echo ""; } ?>">
												<section>
													<?php echo $listing_steps[$k]['content']; ?>
													<br>
													<?php if($listing_steps[$k]['video'] != ''){ ?>
													<iframe width="560px" height="315px" src="<?php echo $listing_steps[$k]['video']; ?>?autoplay=0&amp;showinfo=0" class="tut-video" frameborder="0" allowfullscreen=""></iframe>
													<?php }else{ echo ""; } ?>
												</section>
											</div>
											<?php } ?>
										</div>
                                    </div>
                                </div>
							</div>
							<!-- end container -->
						</div>
						<!-- end bg-inner -->
					</section>
					<!-- end section_mod-b -->
				</div>
				<!-- end wrap-section-border -->
				<section class="section-gallery">
					<div class="container-fluid">
                        <div class="row">
							<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
								<div class="main-block text-center">
									<div class="main-block__label">gallery</div>
									<div class="decor-1 center-block"></div>
									<h1 class="main-block__title"><strong>Property Gallery Images</strong></h1>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="demo-gallery">
                                    <ul id="lightgallery" class="list-unstyled row">
                                        <?php if($pic_counter == ''){ ?>
										<li>There are no photos uploaded yet.</li>
										<?php }else{ ?>
										<?php for($l=0; $l < $pic_counter; $l++){ ?>
										<li class="col-lg-4 col-md-3 col-sm-6 col-xs-12" data-src="<?=ASSETS_ADMIN_DIR_GALLERY?><?php echo $listing_gallery[$l]['pic'] ?>">
                                            <a href="#">
                                                <img class="img-responsive" src="<?=ASSETS_ADMIN_DIR_GALLERY?><?php echo $listing_gallery[$l]['pic'] ?>">
                                            </a>
                                        </li>
										<?php } } ?>
                                    </ul>
                                </div>

							</div>
							<!-- end container -->
						</div>
						<!-- end bg-inner -->
                    </div>
				</section>
				<!-- end section_mod-b -->
				<!-- end wrap-section-border -->
				<div class="section_default pdf-section">
					<div class="container">
                        <div class="row">
							<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
								<div class="main-block text-center">
									<div class="main-block__label">pdf files</div>
									<div class="decor-1 center-block"></div>
									<h1 class="main-block__title"><strong>Download PDF Files Below</strong></h1>
                                    <div class="list-group">
										<?php if($pdf_counter == ''){ ?>
										<li>There are no PDF files uploaded yet.</li>
										<?php }else{ ?>
										<?php for($m=0; $m < $pdf_counter; $m++){ ?>
                                        <a href="<?=ASSETS_ADMIN_DIR_FILE?><?php echo $listing_pdf[$m]['pdf']; ?>" class="list-group-item" download><i class="fa fa-file-pdf-o"></i> <?php echo $listing_pdf[$m]['pdf']; ?></a>
										<?php } } ?>
                                    </div>
								</div>
							</div>
						</div>
						<!-- end row -->
					</div>
					<!-- end container -->
				</div>