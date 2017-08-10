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
								<li><a href="<?php echo base_url(); ?>admin/add_listing">Add Listing</a></li>
								<li class="active"><a href="<?php echo base_url(); ?>admin/add_files/<?php echo $this->uri->segment(3); ?>">Add Files</a></li>
							</ol>

							<!---------------->
							<!-- PAGE TITLE -->
							<!---------------->
							<div class="page-heading">
								<h1>
									Listing Code: <span class="code"><?php echo $listing[0]['code']; ?></span>
									<small>Add the Listing Files here.</small>
								</h1>
							</div>

							<div class="container-fluid">
								<div data-widget-group="group1">
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
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-heading">
													<h2>Upload slider photos</h2>
													<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
												</div>
												<div class="panel-body">
													<form action="<?php echo base_url();?>admin/insert_slider/<?php echo $this->uri->segment(3);?>" id="SliderUpload" class="dropzone" method="POST" enctype="multipart/form-data"></form>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-default" data-widget='{"draggable": "false"}'>
												<div class="panel-body">
													<fieldset>
														<a href="<?php echo base_url(); ?>admin/edit_listing/<?php echo $this->uri->segment(3); ?>" class="btn btn-primary btn-raised btn-sm"> View Listing</a>
													</fieldset>
												</div>
											</div>
										</div>
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