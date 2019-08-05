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
							<h3>Login <small>by using your credentials</small></h3>
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
										<small><a href="<?= base_url('login/sign_up'); ?>">Don't have an account?</a></small>
									</div>
								</div>
							</div>
						</form>
						<div class="panel-footer"></div>
					</div>
					<?php if($logout = $this->session->flashdata('logged_out')): ?>
					<div class="alert alert-success alert-dismissible">
						<a href="#" class="close" aria-lable="close" data-dismiss="alert">&times;</a>
						<p class="text-center"><?= $logout; ?></p>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>