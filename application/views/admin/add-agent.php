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
								<li class="active"><a href="<?php echo base_url(); ?>admin/add_agent">Add New Agent</a></li>
							</ol>

							<!---------------->
							<!-- PAGE TITLE -->
							<!---------------->
							<div class="page-heading">
								<h1>
									Add New Agent
									<small>Add New Agent Information here.</small>
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
																<img src="<?=ASSETS_ADMIN_DIR_USER?>default-agent.png" class="img-responsive" alt="">
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
															
															<form action="<?php echo base_url();?>admin/insert_agent" id="frmFileUpload" class="grid-form" method="POST" enctype="multipart/form-data">
                                                
																<?php $success = $this->session->flashdata('success'); if(!empty($success)){ ?>
																<div class="alert alert-success"><?php echo $success; unset($success); ?></div><?php } ?>
																<?php $error = $this->session->flashdata('error'); if(!empty($error)){ ?>
																<div class="alert alert-danger"><?php echo $error; unset($error); ?></div><?php } ?>
															
																<br/>
																<fieldset>
																	<legend>Agent's Photo:</legend>
																	<div data-row-span="1">
																		<div data-field-span="1">
																			<input type="file" name="pic" accept="image/*" required />
																		</div>
																	</div>
																</fieldset>
																<fieldset>
																	<legend>Agent's full name:</legend>
																	<div data-row-span="1">
																		<div data-field-span="1">
																			<input type="text" name="name" placeholder="Agent's full name..." required />
																		</div>
																	</div>
																</fieldset>
																<fieldset>
																	<legend>Agent's email address:</legend>
																	<div data-row-span="1">
																		<div data-field-span="1">
																			<input type="email" name="email" placeholder="Agent's email address..." required />
																		</div>
																	</div>
																</fieldset>
																<fieldset>
																	<legend>Cell phone number:</legend>
																	<div data-row-span="1">
																		<div data-field-span="1">
																			<input type="text" name="cell" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'" placeholder="(___) ___-____" required />
																		</div>
																	</div>
																</fieldset>
																<fieldset>
																	<div data-row-span="1">
																		<div data-field-span="1" class="checkbox">
																			<label><input type="checkbox" name="sms">
																			<span>Send status updates via SMS</span></label>
																		</div>
																	</div>
																</fieldset>
																<fieldset>
																	<button type="submit" class="btn btn-primary btn-raised btn-sm"><i class="material-icons">check</i> Add New Agent</a></button>
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