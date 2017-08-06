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
								<li><a href="<?php echo base_url(); ?>admin/steps">Listing Steps</a></li>
								<li class="active"><a href="<?php echo base_url(); ?>admin/edit_step/<?php echo $this->uri->segment(3); ?>/<?php echo $this->uri->segment(4); ?>">Edit Existing Listing Step</a></li>
							</ol>

							<!---------------->
							<!-- PAGE TITLE -->
							<!---------------->
							<div class="page-heading">
								<h1>
									Edit Existing Listing Step
									<small>Edit the Existing Listing Step here. Select from the Dropdown which Listing Step you want to create.</small>
								</h1>
							</div>

							<div class="container-fluid">
								<div data-widget-group="group1">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Edit existing listing step</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<form action="<?php echo base_url();?>admin/update_step/<?php echo $this->uri->segment(3); ?>/<?php echo $this->uri->segment(4); ?>" method="POST" enctype="multipart/form-data">
                                                
														<?php $success = $this->session->flashdata('success'); if(!empty($success)){ ?>
														<div class="alert alert-success"><?php echo $success; unset($success); ?></div><?php } ?>
														<?php $error = $this->session->flashdata('error'); if(!empty($error)){ ?>
														<div class="alert alert-danger"><?php echo $error; unset($error); ?></div><?php } ?>
												
														<div class="row" style="margin-bottom: 10px;">
															<div class="col-md-4">
																<div class="grid-form">
																	<fieldset>
																		<h4>Choose process:</h4>
																		<?php if($this->uri->segment(4) == '1'){ ?>
																		<input type="text" name="process" value="Listing Process" readonly />
																		<?php }elseif($this->uri->segment(4) == '2'){ ?>
																		<input type="text" name="process" value="Closing Process" readonly />
																		<?php } ?>
																	</fieldset>
																</div>
															</div>
															<div class="col-md-4">
																<div class="grid-form">
																	<fieldset>
																		<legend>Step #:</legend>
																		<div data-row-span="1">
																			<div data-field-span="1">
																				<input type="text" name="no" value="<?php echo $listing_step[0]['step_no']; ?>" />
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
																				<input type="text" name="name" value="<?php echo $listing_step[0]['step_name']; ?>" />
																			</div>
																		</div>
																	</fieldset>
																</div>
															</div>
														</div> <!-- end .row -->

														<div class="row">
															<div class="col-md-12">
																<textarea name="content" class="summernote">
																	<?php echo $listing_step[0]['content']; ?>
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
																				<input type="text" name="video" value="<?php echo $listing_step[0]['video']; ?>" />
																			</div>
																		</div>
																	</fieldset>
																</div>
															</div>
														</div> <!-- end .row -->

														<div class="row">
															<div class="col-md-12">
																<fieldset>
																	<button type="submit" class="btn btn-primary btn-raised btn-sm"><i class="material-icons">check</i> Update Listing Step</a></button>
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