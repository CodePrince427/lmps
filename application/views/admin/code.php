	<body class="focused-form animated-content" id="login-body">
		<div class="container" id="login-form">

			<div class="row" style="margin-top:100px;">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>Please enter your unique code below</h2>
						</div>
						<div class="panel-body">

						
							<form action="<?php echo base_url(); ?>verify_code" method="POST" class="form-horizontal" id="validate-form">
								<div class="form-group mb-md">
									<div class="col-xs-12">
                                        <a href="login.html">
                                            <img src="<?=ASSETS_ADMIN_DIR_IMG?>login-logo.png" class="img-responsive" style="margin:0 auto;">
                                        </a>
									</div>
								</div>

								<!-- Notice -->
								<?php $error = $this->session->flashdata('error'); if(!empty($error)){ ?>
								<div class="notification png_bg"><div style="color:#F00">
								<?php echo $error; unset($error); ?></div></div><?php }	?>
								
								<?php $success = $this->session->flashdata('success'); if(!empty($success)){ ?>
								<div class="notification png_bg"><div style="color:#090">
								<?php echo $success; unset($success); ?></div></div><?php }	?>

								<div class="form-group mb-md">
									<div class="col-xs-12">
										<input type="text" class="form-control code" name="code" placeholder="Example: XBJTF" autofocus required />
										<input type="submit" class="btn btn-primary btn-raised pull-right" value="ENTER" />
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>