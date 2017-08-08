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
								<li class="active"><a href="<?php echo base_url();?>admin/listing_steps">Listing Steps</a></li>
							</ol>

							<!---------------->
							<!-- PAGE TITLE -->
							<!---------------->
							<div class="page-heading">
								<h1>
									Listings
									<small>View, Modify, Delete, Update or Add your Listing Steps here.</small>

								</h1>
							</div>

							<div class="container-fluid">

								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-default" data-widget='{"draggable": "false"}'>
											<div class="panel-heading steps-table-heading">
												<h2>Listing process</h2>
												<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												<div class="options"></div>
												<a href="<?php echo base_url();?>admin/add_step" class="btn btn-success btn-raised btn-sm pull-right"><i class="material-icons">add_circle</i> Add New Step</a>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-striped m-n">
														<thead>
															<tr>
																<th>Step #</th>
																<th>Step Name</th>
																<th>Actions</th>
															</tr>
														</thead>
														<tbody>
															<?php for($i=0; $i<$steps_counter1; $i++){ ?>
															<tr>
																<td><?php echo $listing_steps[$i]['step_no']; ?></td>
																<td><?php echo $listing_steps[$i]['step_name']; ?></td>
																<td class="actions">
																	<a href="<?php echo base_url();?>admin/edit_step/<?php echo  $listing_steps[$i]['id']; ?>/1" class="btn btn-primary btn-raised btn-sm"><i class="material-icons">edit</i> Edit</a>
																	<a id="<?php echo  $listing_steps[$i]['id']; ?>" href="#DelModal1" class="btn btn-danger btn-raised btn-sm delete-link" data-toggle="modal"><i class="material-icons">delete</i> Delete</a>
																</td>
															</tr>
															<?php } ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div> <!-- end .row -->

								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-default" data-widget='{"draggable": "false"}'>
											<div class="panel-heading steps-table-heading">
												<h2>Closing process</h2>
												<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												<div class="options"></div>
												<a href="<?php echo base_url();?>admin/add_step" class="btn btn-success btn-raised btn-sm pull-right"><i class="material-icons">add_circle</i> Add New Step</a>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-striped m-n">
														<thead>
															<tr>
																<th>Step #</th>
																<th>Step Name</th>
																<th>Actions</th>
															</tr>
														</thead>
														<tbody>
															<?php for($j=0; $j<$steps_counter2; $j++){ ?>
															<tr>
																<td><?php echo $closing_steps[$j]['step_no']; ?></td>
																<td><?php echo $closing_steps[$j]['step_name']; ?></td>
																<td class="actions">
																	<a href="<?php echo base_url();?>admin/edit_step/<?php echo  $closing_steps[$j]['id']; ?>/2" class="btn btn-primary btn-raised btn-sm"><i class="material-icons">edit</i> Edit</a>
																	<a id="<?php echo  $closing_steps[$j]['id']; ?>" href="#DelModal2" class="btn btn-danger btn-raised btn-sm delete-link" data-toggle="modal"><i class="material-icons">delete</i> Delete</a>
																</td>
															</tr>
															<?php } ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div> <!-- end .row -->

							</div> <!-- end .container-fluid -->
						</div> <!-- end .page-content -->
					</div> <!-- end .static-content -->

					<!-------------------------->
					<!-- DELETE LISTING MODAL -->
					<!-------------------------->
					<div id="DelModal1" class="modal fade" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h2 class="modal-title">Delete this Step?</h2>
								</div>
								<div class="modal-body">
									<h4>Are you Sure you want to Delete This Step? This action can Not be Undone.</h4>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<a id="DelLStepBtn" href="#" class="btn btn-sm btn-raised btn-danger DelBtn">DELETE</a>
								</div>
							</div>
						</div>
					</div>
					
					<!-------------------------->
					<!-- DELETE CLOSING MODAL -->
					<!-------------------------->
					<div id="DelModal2" class="modal fade" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h2 class="modal-title">Delete this Step?</h2>
								</div>
								<div class="modal-body">
									<h4>Are you Sure you want to Delete This Step? This action can Not be Undone.</h4>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<a id="DelCStepBtn" href="#" class="btn btn-sm btn-raised btn-danger DelBtn">DELETE</a>
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