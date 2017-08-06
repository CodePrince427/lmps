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
								<li><a href="<?php echo base_url(); ?>admin/listing_steps">Listing Steps</a></li>
								<li class="active"><a href="<?php echo base_url(); ?>admin/add_step">Add New Listing Step</a></li>
							</ol>

							<!---------------->
							<!-- PAGE TITLE -->
							<!---------------->
							<div class="page-heading">
								<h1>
									Add New Listing Step
									<small>Add New Listing Step here. Select from the Dropdown which Listing Step you want to Create.</small>
								</h1>
							</div>

							<div class="container-fluid">
								<div data-widget-group="group1">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Add new Listing step</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<form action="<?php echo base_url();?>admin/insert_step" method="POST" enctype="multipart/form-data">

														<?php $success = $this->session->flashdata('success'); if(!empty($success)){ ?>
														<div class="alert alert-success"><?php echo $success; unset($success); ?></div><?php } ?>
														<?php $error = $this->session->flashdata('error'); if(!empty($error)){ ?>
														<div class="alert alert-danger"><?php echo $error; unset($error); ?></div><?php } ?>

														<div class="row" style="margin-bottom: 10px;">
															<div class="col-md-4">
																<div class="grid-form">
																	<fieldset>
																		<h4>Choose process:</h4>
																		<select name="process" required >
																			<option value="">-- Please Choose Process --</option>
																			<option value="1">Listing Process</option>
																			<option value="2">Closing Process</option>
																		</select>
																	</fieldset>
																</div>
															</div>
															<div class="col-md-4">
																<div class="grid-form">
																	<fieldset>
																		<legend>Step #:</legend>
																		<div data-row-span="1">
																			<div data-field-span="1">
																				<input type="text" name="no" placeholder="Step number..." required />
																			</div>
																		</div>
																	</fieldset>
																</div>
															</div>
															<div class="col-md-4">
																<div class="grid-form">
																	<fieldset>
																		<legend>Step name:</legend>
																		<div data-row-span="1">
																			<div data-field-span="1">
																				<input type="text" name="name" placeholder="Step name..." required />
																			</div>
																		</div>
																	</fieldset>
																</div>
															</div>
														</div> <!-- end .row -->

														<div class="row">
															<div class="col-md-12">
																<textarea class="summernote" name="content" required >
																	<h4>Default Editor</h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, nobis laboriosam repellat ipsum deserunt voluptate eos praesentium atque eligendi libero. Nam, id, eligendi natus facilis ullam pariatur numquam amet illum repudiandae ex porro labore in perferendis vero nobis iure ratione? Repudiandae, vel, quo, dolores velit vero debitis sed non odio culpa quasi excepturi tempore saepe atque quod repellendus aliquam eum neque dolorem beatae veniam quis id deserunt dignissimos voluptatum incidunt necessitatibus inventore reprehenderit consequatur esse perferendis ipsum earum pariatur et eaque sequi a harum sit similique itaque dicta expedita unde. Animi, quo, facilis laudantium quas commodi aut harum reprehenderit explicabo.</p>
																</textarea>
															</div>
														</div> <!-- end .row -->

														<div class="row">
															<div class="col-md-12">
																<div class="grid-form">
																	<fieldset>
																		<legend>Video URL (optional):</legend>
																		<div data-row-span="1">
																			<div data-field-span="1">
																				<input type="text" name="video" placeholder="YouTube URL link..." />
																			</div>
																		</div>
																	</fieldset>
																</div>
															</div>
														</div> <!-- end .row -->

														<div class="row">
															<div class="col-md-12">
																<fieldset>
																	<button type="submit" class="btn btn-primary btn-raised btn-sm"><i class="material-icons">check</i> Add Listing Step</a></button>
																</fieldset>
															</div>
														</div> <!-- end .row -->
													
													</form>
												</div> <!-- end .panel-body -->

												<div class="panel-footer"></div>
											</div> <!-- end .panel -->
										</div> <!-- end .col-md-12 -->
									</div> <!-- end .row -->
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