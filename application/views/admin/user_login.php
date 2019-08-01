<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4">
					<?php if($error = $this->session->flashdata('login_error')): ?>
						<div class="alert alert-danger text-center">
							<?php echo $error; ?>
						</div>
					<?php endif; ?>
					<div class="panel panel-info">
						<div class="panel-heading text-right">
							<h3>Login</h3>
						</div>
						<form action="<?= base_url('login/sign_in'); ?>" method="post">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-4">
										<label for="name">Username</label>
									</div>
									<div class="col-md-8">
										<input type="text" name="username" class="form-control input-sm" placeholder="Enter your username here..." required="">
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-4">
										<label for="name">Password</label>
									</div>
									<div class="col-md-8">
										<input type="password" name="password" class="form-control input-sm" placeholder="Enter your passowrd here..." required="">
										<span><?php echo form_error('password'); ?></span>
									</div>
								</div><br>
								<div class="row">
									<div class="col-lg-4"></div>
									<div class="col-lg-8">
										<input type="submit" name="submit" class="btn btn-primary btn-sm" value="Login">
										<input type="reset" name="reset" class="btn btn-danger btn-sm" value="Clear">
									</div>
								</div>
							</div>
						</form>
						<div class="panel-footer"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>