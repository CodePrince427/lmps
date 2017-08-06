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
								<li><a href="<?php echo base_url(); ?>admin/agents">Agents</a></li>
								<li class="active"><a href="<?php echo base_url(); ?>admin/edit_agent/<?php echo $this->uri->segment(3); ?>">Edit Agent</a></li>
							</ol>

							<!---------------->
							<!-- PAGE TITLE -->
							<!---------------->
							<div class="page-heading">
								<h1>
									Edit Existing Agent
									<small>Update Existing Agent Information here.</small>
								</h1>
							</div>

							<div class="container-fluid">
								<div data-widget-group="group1">

									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Listing agent information</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<div class="row">
														<div class="col-md-4 col-md-offset-4 text-center add-agent-image">
															<div class="agent-image-wrapper">
																<img src="<?=ASSETS_ADMIN_DIR_USER?><?php echo $agent[0]['agent_pic']; ?>" class="img-responsive" alt="">
															</div>
															<div class="fileinput fileinput-new hidden" data-provides="fileinput">
																<span class="btn btn-default btn-file">
																	<span class="fileinput-new">Select Photo</span>
																	<span class="fileinput-exists">Change</span>
																	<input type="file" name="...">
																</span>
																<span class="fileinput-filename"></span>
																<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
															</div>
															
															<form action="<?php echo base_url();?>admin/update_agent/<?php echo $this->uri->segment(3); ?>" id="frmFileUpload" class="grid-form" method="POST" enctype="multipart/form-data">
                                                
																<?php $success = $this->session->flashdata('success'); if(!empty($success)){ ?>
																<div class="alert alert-success"><?php echo $success; unset($success); ?></div><?php } ?>
																<?php $error = $this->session->flashdata('error'); if(!empty($error)){ ?>
																<div class="alert alert-danger"><?php echo $error; unset($error); ?></div><?php } ?>
															
																<fieldset>
																	<legend>Agent's Photo:</legend>
																	<div data-row-span="1">
																		<div data-field-span="1">
																			<input type="file" name="pic" accept="image/*" />
																		</div>
																	</div>
																</fieldset>
																<fieldset>
																	<legend>Agent's full name:</legend>
																	<div data-row-span="1">
																		<div data-field-span="1">
																			<input type="text" name="name" value="<?php echo $agent[0]['agent_name']; ?>" />
																		</div>
																	</div>
																</fieldset>
																<fieldset>
																	<legend>Agent's email address:</legend>
																	<div data-row-span="1">
																		<div data-field-span="1">
																			<input type="email" name="email" value="<?php echo $agent_email[0]['email']; ?>" />
																		</div>
																	</div>
																</fieldset>
																<fieldset>
																	<legend>Cell phone number:</legend>
																	<div data-row-span="1">
																		<div data-field-span="1">
																			<input type="text" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'" name="cell" value="<?php echo $agent[0]['agent_cell']; ?>" />
																		</div>
																	</div>
																</fieldset>
																<fieldset>
																	<button type="submit" class="btn btn-primary btn-raised btn-sm"><i class="material-icons">check</i> Update Agent</a></button>
																</fieldset>
															</form>
														</div>
													</div>
												</div>
											</div>
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

		<!----------------------->
		<!-- DELETE LINK MODAL -->
		<!----------------------->
		<div class="modal fade delete-modal" tabindex="-1" role="dialog">
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
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-raised btn-danger">Delete</button>
					</div>
				</div>
			</div>
		</div>