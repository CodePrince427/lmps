	<body class="focused-form animated-content" id="login-body">
		<div class="container" id="login-form">

			<div class="row" style="margin-top:100px;">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>Agent Access</h2>
						</div>
						<div class="panel-body">
							<?php $error = $this->session->flashdata('error'); if(!empty($error)){ ?>
							<div class="notification-error" style="text-align:center; margin-bottom:5px;"><div style="color:#F00">
							<?php echo $error; unset($error); ?></div></div><?php }	?>
							
							<?php $success = $this->session->flashdata('success'); if(!empty($success)){ ?>
							<div class="notification-success" style="text-align:center; margin-bottom:5px;"><div style="color:#090">
							<?php echo $success; unset($success); ?></div></div><?php }	?>
						
							<form id="login_form" class="form-horizontal" action="verify_login" method="POST">
								<div class="form-group mb-md">
									<div class="col-xs-12">
                                        <a href="login.html">
                                            <img src="<?=ASSETS_ADMIN_DIR_IMG?>login-logo.png" class="img-responsive" style="margin:0 auto;">
                                        </a>
										<div class="input-group">
											<span class="input-group-addon">
											<i class="material-icons">email</i>
											</span>
											<input type="text" class="form-control" name="email" placeholder="E-Mail" data-parsley-minlength="6" placeholder="At least 6 characters" autofocus required />
										</div>
									</div>
								</div>
								<div class="form-group mb-md">
									<div class="col-xs-12">
										<div class="input-group">
											<span class="input-group-addon">
											<i class="material-icons">lock</i>
											</span>
											<input id="exampleInputPassword1" type="password" class="form-control" name="pass" placeholder="Password" required />
										</div>
										<button class="btn btn-primary btn-raised pull-right" type="submit" name="login_form">SIGN IN</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>