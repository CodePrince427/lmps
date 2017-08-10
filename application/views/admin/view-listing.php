				<!------------------------------->
				<!-- MAIN PAGE CONTENT WRAPPER -->
				<!------------------------------->
				<div class="static-content-wrapper">
					<div class="static-content">
						<div class="page-content">

							<!------------------------------>
							<!-- BREADCRUMB LEVEL TRACKER -->
							<!------------------------------>
							<ol class="breadcrumb">
								<li><a href="<?php echo base_url(); ?>admin">All Listings</a></li>
								<li class="active"><a href="<?php echo base_url(); ?>admin/edit_listing/<?php echo $this->uri->segment(3); ?>">Edit Listing</a></li>
							</ol>

							<!---------------->
							<!-- PAGE TITLE -->
							<!---------------->
							<div class="page-heading">
								<h1>
									Listing Code: <span class="code"><?php echo $listing[0]['code']; ?></span>
									<small>Update the selected listing here.</small>
									<a href="<?php echo base_url(); ?>status/<?php echo $listing[0]['code']; ?>" class="btn btn-warning btn-raised btn-sm">
									<i class="material-icons">remove_red_eye</i> View</a>
								</h1>
							</div>

							<div class="container-fluid">
								<div data-widget-group="group1">
								<form action="<?php echo base_url();?>admin/update_listing/<?php echo $this->uri->segment(3);?>" class="grid-form" method="POST">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<!--<h2>Slider photos and Listing Price</h2>-->
													<h2>Listing Price and Photo</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<div class="row">
														<div class="col-md-6">
															<fieldset>
																<legend>Enter the Listing Price</legend>
																<div data-row-span="1">
																	<div data-field-span="1">
																		<input type="text" name="price" data-v-min="0" data-n-bracket="(,)" data-a-sign="$ " class="currency" placeholder="Price..." value="<?php echo intval($listing[0]['price']); ?>" autofocus>
																	</div>
																</div>
															</fieldset>
														</div>
														<div class="col-md-6">
															<div class="row">
																<div class="col-lg-6">
																	<fieldset>
																		<legend>Listing Photo</legend>
																		<input type="file" name="pic" class="" accept="image/*" />
																	</fieldset>
																</div>
																<div class="col-lg-6">
																	<div class="uploaded-image">
																		<img src="<?=ASSETS_ADMIN_DIR_GALLERY?><?php echo $listing_pic[0]['pics']; ?>" class="img-responsive" />
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div> <!-- end .col-md-12 -->
									</div> <!-- end .row -->

									<div class="row">
										<div class="col-md-6">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Property Information</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<fieldset>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>Street address</label>
																<input type="text" name="address" value="<?php echo $listing[0]['address']; ?>" placeholder="Street address..." />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>City / Town</label>
																<input type="text" name="city" value="<?php echo $listing[0]['city']; ?>" placeholder="City / town..." />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>State</label>
																<input type="text" name="state" value="<?php echo $listing[0]['state']; ?>" placeholder="State..." />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>Zip code</label>
																<input type="text" name="zipcode" value="<?php echo $listing[0]['zipcode']; ?>" placeholder="Zip code..." />
															</div>
														</div>
													</fieldset>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Seller information</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<fieldset>
														<div data-row-span="1" class="hidden">
															<div data-field-span="1">
																<label>Seller ID</label>
																<input type="text" name="seller_id" value="<?php echo $seller[0]['seller_id']; ?>" />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>Full name(s)</label>
																<input type="text" name="name" value="<?php echo $seller[0]['seller_name']; ?>" placeholder="Full name(s)..." />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>Seller's email</label>
																<input type="email" name="email" value="<?php echo $seller_email[0]['email']; ?>" placeholder="Seller's email..." readonly />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>Cell phone number</label>
																<div class="form-group">
																	<input type="text" name="cell" value="<?php echo $seller[0]['seller_cell']; ?>" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'" placeholder="(___) ___-____" />
																</div>
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1" class="checkbox">
																<label><input type="checkbox" name="sms" 
																<?php if($seller[0]['seller_sms'] == true){ echo "checked"; }else{ echo ""; } ?> />
																<span>Send status updates via SMS</span></label>
															</div>
														</div>
													</fieldset>
												</div>
											</div>
										</div>
									</div> <!-- end .row -->

									<div class="row">
										<div class="col-md-6">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Listing agent information</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<fieldset>
														<legend>Agent's name:</legend>
														<div data-row-span="1">
															<div data-field-span="1">
																<select name="agent">
																	<option value="">-- Please choose from the drop down --</option>
																	<?php for($i=0; $i < count($agent_list); $i++){ ?>
																	<option value="<?php echo $agent_list[$i]['agent_id']; ?>"
																	<?php if($agent_list[$i]['agent_id'] == $agent[0]['id']){ ?> selected <?php }else{ echo ""; } ?> >
																	<?php echo $agent_list[$i]['agent_name']; ?></option>
																	<?php } ?>
																</select>
															</div>
														</div>
													</fieldset>
													<fieldset>
														<legend>Agent's E-Mail:</legend>
														<div data-row-span="1">
															<div data-field-span="1">
																<a href="mailto:<?php echo $agent_email[0]['email']; ?>"><?php echo $agent_email[0]['email']; ?></a>
															</div>
														</div>
													</fieldset>
													<fieldset>
														<legend>Phone number:</legend>
														<div data-row-span="1">
															<div data-field-span="1">
																<span><?php echo $agent[0]['agent_cell']; ?></span>
															</div>
														</div>
													</fieldset>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Listing status information</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<fieldset>
														<legend>Process:</legend>
														<div data-row-span="1">
															<div data-field-span="1">
																<select id="process" name="process">
																	<?php if($listing[0]['process'] == 'Listing Process'){ ?>
																	<option value="<?php echo $listing[0]['process']; ?>" selected>Listing Process</option>
																	<option value="Closing Process">Closing Process</option>
																	<?php }elseif($listing[0]['process'] == 'Closing Process'){ ?>
																	<option value="<?php echo $listing[0]['process']; ?>" selected>Closing Process</option>
																	<option value="Listing Process">Listing Process</option>
																	<?php }else{ ?>
																	<option value="">-- Please choose from the drop down --</option>
																	<option value="Listing Process">Listing Process</option>
																	<option value="Closing Process">Closing Process</option>
																	<?php } ?>
																</select>
															</div>
														</div>
													</fieldset>
													<fieldset>
														<legend>Active step:</legend>
														<div data-row-span="1">
															<div data-field-span="1">
																<div id="ListingStep">
																	<select name="step">
																		<?php if($listing[0]['process'] == 'Listing Process'){ ?>
																			<?php for($j=0; $j<$steps_counter1; $j++){ ?>
																			<option value="<?php echo $listing_steps[$j]['id']; ?>"
																			<?php if($listing_step[0]['step_no'] == $listing_steps[$j]['step_no']){ echo "selected"; }else{ echo ""; } ?>>
																				Step <?php echo $listing_steps[$j]['step_no']; ?>: <?php echo $listing_steps[$j]['step_name']; ?>
																			</option>
																			<?php } ?>
																		<?php }elseif($listing[0]['process'] == 'Closing Process'){ ?>
																			<?php for($k=0; $k<$steps_counter2; $k++){ ?>
																			<option value="<?php echo $closing_steps[$k]['id']; ?>"
																			<?php if($closing_step[0]['step_no'] == $closing_steps[$k]['step_no']){ echo "selected"; }else{ echo ""; } ?>>
																				Step <?php echo $closing_steps[$k]['step_no']; ?>: <?php echo $closing_steps[$k]['step_name']; ?>
																			</option>
																			<?php } ?>
																		<?php } ?>
																	</select>													
																</div>
															</div>
														</div>
													</fieldset>
													
													<!-- New Steps -->
													<div id="NewStep1" style="display:none;">
														<select name="listing_step">
															<option value="">Select Step</option>
															<?php for($l=0; $l<$steps_counter1; $l++){ ?>
															<option value="<?php echo $listing_steps[$l]['id']; ?>">
																Step <?php echo $listing_steps[$l]['step_no']; ?>: <?php echo $listing_steps[$l]['step_name']; ?>
															</option>
															<?php } ?>
														</select>													
													</div>
													<div id="NewStep2" style="display:none;">
														<select name="closing_step">
															<option value="">Select Step</option>
															<?php for($m=0; $m<$steps_counter2; $m++){ ?>
															<option value="<?php echo $closing_steps[$m]['id']; ?>">
																Step <?php echo $closing_steps[$m]['step_no']; ?>: <?php echo $closing_steps[$m]['step_name']; ?>
															</option>
															<?php } ?>
														</select>													
													</div>
												</div>
											</div>
										</div>
									</div> <!-- end .row -->

									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-body">
													<fieldset>
														<button type="submit" class="btn btn-primary btn-raised btn-sm"><i class="material-icons">check</i> Update Listing</a></button>
													</fieldset>
												</div>
											</div>
										</div>
									</div> <!-- end .row -->
									
									</form>
									
									<div class="row">
										<div class="col-md-6">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Upload gallery photos</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<form action="<?php echo base_url();?>admin/insert_gallery/<?php echo $this->uri->segment(3);?>" id="GalleryUpload" class="dropzone" method="POST" enctype="multipart/form-data"></form>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Upload PDF files</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<form action="<?php echo base_url();?>admin/insert_pdf/<?php echo $this->uri->segment(3);?>" id="PDFUpload" class="dropzone" method="POST" enctype="multipart/form-data"></form>
												</div>
											</div>
										</div>
									</div> <!-- end .row -->

									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Uploaded gallery photos</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<div class="row">
														
														<?php if($pic_counter == ''){ ?>
														<ul class="attachments">
															<span>There are no photos uploaded yet.</span>
														</ul>
														<?php }else{ ?>
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							                                <div class="demo-gallery">
							                                    <ul id="lightgallery" class="list-unstyled row">
							                                        <?php if($pic_counter == ''){ ?>
																	<li>There are no photos uploaded yet.</li>
																	<?php }else{ ?>
																	<?php for($l=0; $l < $pic_counter; $l++){ ?>
																	<li class="col-ls-4 col-md-3 col-sm-6 col-xs-12" data-src="<?=ASSETS_ADMIN_DIR_GALLERY?><?php echo $listing_gallery[$l]['pic'] ?>">
							                                            <div class="uploaded-image">
							                                                <img class="img-responsive" src="<?=ASSETS_ADMIN_DIR_GALLERY?><?php echo $listing_gallery[$l]['pic'] ?>">
							                                            </div>
																		<a id="<?php echo $listing_gallery[$l]['id']; ?>" href="#DelGallery" class="delete-link" data-toggle="modal">
																		<i class="fa fa-trash"></i> Delete Image</a>
							                                        </li>
																	<?php } } ?>
							                                    </ul>
							                                </div>

														</div>
														
														<?php } ?>

													</div>
												</div>
											</div>
										</div>
									</div> <!-- end .row -->

									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Uploaded PDF files</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body pdf-files">
													<div class="row">

														<div class="col-lg-12">
															<div class="bs-component">
																<div class="list-group">
																	<?php if($pdf_counter == ''){ ?>
																	<span>There are no PDF files uploaded yet.</span>
																	<?php }else{ ?>
																	<?php for($o=0; $o < $pdf_counter; $o++){ ?>
																	<div class="col-lg-4">
																		<div class="list-group-item">
																			<div class="row-action-primary">
																				<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
																			</div>
																			<div class="row-content" style="height:50px;">
																				<a href="<?=ASSETS_ADMIN_DIR_FILE?><?php echo $listing_pdf[$o]['pdf']; ?>"
																				class="list-group-item-heading" download><?php echo $listing_pdf[$o]['pdf']; ?></a>
																				<div class="action-secondary">
																					<a id="<?php echo $listing_pdf[$o]['id']; ?>" href="#EditPDF" class="delete-link" data-toggle="modal" title="<?php echo $listing_pdf[$o]['pdf']; ?>">
																						<i class="material-icons">edit</i>
																					</a>
																					<a id="<?php echo $listing_pdf[$o]['id']; ?>" href="#DelPDF" class="delete-link" data-toggle="modal">
																					<i class="material-icons">delete</i>
																					</a>
																				</div>
																			</div>
																		</div>
																		<div class="list-group-separator"></div>
																	</div>
																	<?php } } ?>
																</div>
															</div>
														</div>

													</div> <!-- end .row -->
												</div>
											</div>
										</div>
									</div> <!-- end .row -->

								</div> <!-- end data-widget-group -->
							</div> <!-- end .container-fluid -->
						</div> <!-- end .page-content -->
					</div> <!-- end .static-content -->

					<!-- Delete Gallery Modal -->
					<div id="DelGallery" class="modal fade" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h2 class="modal-title">Delete this image?</h2>
								</div>
								<div class="modal-body">
									<h4>Are you sure you want to delete this image? This action can not be undone.</h4>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<a id="DelGalleryBtn" href="#" class="btn btn-sm btn-raised btn-danger DelBtn">Delete</a>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Edit PDF Modal -->
					<div id="EditPDF" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Rename PDF</h4>
								</div>
								<div class="modal-body">
									<form name="RenameForm" action="/" method="POST">
										<p>Are You Sure You Want to Rename this PDF?</p>
										<div class="form-line">
											<input id="rename" type="text" class="form-control" name="pdf" value="" autofocus />
										</div><br/>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-sm btn-raised btn-danger DelBtn">Rename</button>
										</div>
									</form>
								</div>
							</div>

						</div>
					</div>

					<!-- Delete PDF Modal -->
					<div id="DelPDF" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Delete PDF</h4>
								</div>
								<div class="modal-body">
									<p>Are You Sure You Want to Delete this PDF?</p>
									<div class="form-group">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<a id="DelPDFBtn" href="#" class="btn btn-sm btn-raised btn-danger DelBtn">Delete</a>
								</div>
							</div>

						</div>
					</div>
					
					<!----------------->
					<!-- FOOTER INFO -->
					<!----------------->
					<footer role="contentinfo">
						<div class="clearfix">
							<ul class="list-unstyled list-inline pull-left">
								<li>
									<h6 style="margin: 0;">&copy; 2017/2018 Lillian Montalto Signature Properties</h6>
								</li>
							</ul>
						</div>
					</footer>

				</div> <!-- end .static-content-wrapper -->

				<div class="extrabar-underlay"></div>
			</div> <!-- end #layout-static -->
		</div> <!-- end #wrapper -->