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
								<li class="active"><a href="<?php echo base_url(); ?>admin/add_listing">Add Listing</a></li>
							</ol>

							<!---------------->
							<!-- PAGE TITLE -->
							<!---------------->
							<div class="page-heading">
								<h1>
									Listing Code: <span class="code"><?php echo $listing_code; ?></span>
									<small>Add the Listing Info here.</small>
								</h1>
							</div>

							<div class="container-fluid">
								<div data-widget-group="group1">
								<form action="<?php echo base_url();?>admin/insert_listing" class="grid-form" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Listing Price & Photo</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<div class="row">
														<div class="col-md-6">
															<fieldset>
																<legend>Enter the Listing Price</legend>
																<div data-row-span="1">
																	<div data-field-span="1">
																		<input type="text" name="price" data-v-min="0" data-n-bracket="(,)" data-a-sign="$ " class="currency" placeholder="Price..." autofocus required />
																	</div>
																</div>
															</fieldset>
														</div>
														<div class="col-md-6">
															<fieldset>
																<legend>Listing Photo</legend>
																<div data-row-span="1">
																	<div data-field-span="1">
																		<input type="file" name="pic" required />
																	</div>
																</div>
															</fieldset>
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
														<div data-row-span="1" class="hidden">
															<div data-field-span="1">
																<label>Code</label>
																<input type="text" name="code" value="<?php echo $listing_code; ?>" />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>Street address</label>
																<input type="text" name="address" placeholder="Street address..." required />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>City / Town</label>
																<input type="text" name="city" placeholder="City / town..." required />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>State</label>
																<input type="text" name="state" placeholder="State..." required />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>Zip code</label>
																<input type="text" name="zipcode" placeholder="Zip code..." required />
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
														<div data-row-span="1">
															<div data-field-span="1">
																<label>Full name(s)</label>
																<input type="text" name="name" placeholder="Full name(s)..." required />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>Seller's email</label>
																<input type="email" name="email" placeholder="Seller's email..." required />
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1">
																<label>Cell phone number</label>
																<div class="form-group">
																	<input type="text" name="cell" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'" placeholder="(___) ___-____" required />
																</div>
															</div>
														</div>
														<div data-row-span="1">
															<div data-field-span="1" class="checkbox">
																<label><input type="checkbox" name="sms" required />
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
																<select name="agent" required >
																	<option value="">-- Please choose from the drop down --</option>
																	<?php for($i=0; $i < count($agent_list); $i++){ ?>
																	<option value="<?php echo $agent_list[$i]['agent_id']; ?>"><?php echo $agent_list[$i]['agent_name']; ?></option>
																	<?php } ?>
																</select>
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
																<select id="process" name="process" required >
																	<option value="">-- Please choose from the drop down --</option>
																	<option value="Listing Process">Listing Process</option>
																</select>
															</div>
														</div>
													</fieldset>
													<fieldset>
														<legend>Active step:</legend>
														<div data-row-span="1">
															<div data-field-span="1">
																<div id="ListingStep">
																	<select name="step" required >
																		<?php for($i=0; $i<$steps_counter; $i++){ ?>
																		<option value="<?php echo $listing_steps[$i]['id']; ?>">
																			Step <?php echo $listing_steps[$i]['step_no']; ?>: <?php echo $listing_steps[$i]['step_name']; ?>
																		</option>
																		<?php } ?>
																	</select>													
																</div>
															</div>
														</div>
													</fieldset>
												</div>
											</div>
										</div>
									</div> <!-- end .row -->

									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-body">
													<fieldset>
														<button type="submit" class="btn btn-primary btn-raised btn-sm"> Next to Add Files ></a></button>
													</fieldset>
												</div>
											</div>
										</div>
									</div> <!-- end .row -->
									
								</form>
								
								</div> <!-- end data-widget-group -->
							</div> <!-- end .container-fluid -->
						</div> <!-- end .page-content -->
					</div> <!-- end .static-content -->

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