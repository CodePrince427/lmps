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
								<li class="active"><a href="admin">All Listings</a></li>
							</ol>

							<!---------------->
							<!-- PAGE TITLE -->
							<!---------------->
							<div class="page-heading">
								<h1>
									Listings
									<small>View, Modify, Delete or Update your Listings here.</small>
									<a href="<?php echo base_url(); ?>admin/add_listing" class="btn btn-success btn-raised btn-sm"><i class="material-icons">add_circle</i> Add New</a>
								</h1>
							</div>

							<div class="container-fluid">
								<div data-widget-group="group1">
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h2>Listings</h2>
													<div class="panel-ctrls"></div>
												</div>
												<div class="panel-body no-padding">
													<div class="table-responsive">
														<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
															<thead>
																<tr>
																	<th>Preview image</th>
																	<th>Listing Code</th>
																	<th>Street address</th>
																	<th>Seller full name(s)</th>
																	<th>Agent full name</th>
																	<th>Actions</th>
																</tr>
															</thead>
															<tbody class="listings">
																<?php if($listing_list != ''){ ?>
																<?php for($i=0; $i < count($listing_list); $i++){ ?>
																<tr>
																	<td style="width:100px;max-width:100px;word-wrap:break-word;">
																		<img src="<?=ASSETS_ADMIN_DIR_GALLERY?>
																		<?php echo $listing_list[$i]['pics']; ?>" alt=""></td>
																	<td><?php echo $listing_list[$i]['code']; ?></td>
																	<td><?php echo $listing_list[$i]['address']; ?></td>
																	<td><?php echo $listing_list[$i]['seller_name']; ?></td>
																	<td><?php echo $listing_list[$i]['agent_name']; ?></td>
																	<td class="actions">
																		<a href="<?php echo base_url(); ?>status/<?php echo $listing_list[$i]['code']; ?>" class="btn btn-warning btn-raised btn-sm"><i class="material-icons">remove_red_eye</i> View</a>
																		<a href="<?php echo base_url();?>admin/edit_listing/<?php echo $listing_list[$i]['listing_id'];?>" class="btn btn-primary btn-raised btn-sm"><i class="material-icons">edit</i> Edit</a>
																		<a id="<?php echo $listing_list[$i]['listing_id'];?>" href="#DelModal" class="btn btn-danger btn-raised btn-sm delete-link" data-toggle="modal"><i class="material-icons">delete</i> Delete</a>
																	</td>
																</tr>
																<?php } }else{ echo ""; } ?>
															</tbody> <!-- end .listings -->
														</table> <!-- end #example -->
													</div> <!-- end .table-responsive -->
												</div> <!-- end .panel-body -->

												<div class="panel-footer"></div>
											</div> <!-- end .panel -->
										</div> <!-- end .col-md-12 -->
									</div> <!-- end .row -->
								</div> <!-- end data-widget-group -->
							</div> <!-- end .container-fluid -->
						</div> <!-- end .page-content -->
					</div> <!-- end .static-content -->

					<!----------------------->
					<!-- DELETE LINK MODAL -->
					<!----------------------->
					<div id="DelModal" class="modal fade" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h2 class="modal-title">Delete this Listing?</h2>
								</div>
								<div class="modal-body">
									<h4>Are you Sure you want to Delete This Listing? This action can Not be Undone.</h4>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<a id="DelListingBtn" href="#" class="btn btn-sm btn-raised btn-danger DelBtn">DELETE</a>
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

		