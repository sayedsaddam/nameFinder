<style type="text/css">
	.errors{
		font-size: 10px;
		color: red;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4">
					<?php if($success = $this->session->flashdata('success')): ?>
					<div class="alert alert-success">
						<p><?php echo $success; ?></p>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="panel panel-info">
						<div class="panel-heading text-right">
							<h3>Create an account <small>Fill out the form, it's easy</small></h3>
						</div>
						<form action="<?= base_url('login/signup'); ?>" method="post">
							<input type="hidden" name="created_at" value="<?php echo date('Y-m-d'); ?>">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-4">
										<label for="name">Full Name</label>
									</div>
									<div class="col-md-8">
										<input type="text" name="fullname" class="form-control input-sm" placeholder="Enter your full name here..." required="" value="<?php echo set_value('fullname'); ?>">
										<span class="errors"><?php echo form_error('fullname'); ?></span>
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-4">
										<label for="name">Email</label>
									</div>
									<div class="col-md-8">
										<input type="text" name="email" class="form-control input-sm" placeholder="Enter your email here..." required="" value="<?= set_value('email'); ?>">
										<span class="errors"><?php echo form_error('email'); ?></span>
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-4">
										<label for="name">Birth Date</label>
									</div>
									<div class="col-md-8">
										<input type="date" name="birthday" class="form-control input-sm" placeholder="Enter your username here..." required="" value="<?= set_value('birthday'); ?>">
										<span class="errors"><?php echo form_error('birthday'); ?></span>
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-4">
										<label for="name">Username</label>
									</div>
									<div class="col-md-8">
										<input type="text" name="username" class="form-control input-sm" placeholder="Enter your username here..." required="" value="<?= set_value('username'); ?>">
										<span class="errors"><?php echo form_error('username'); ?></span>
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-4">
										<label for="name">Password</label>
									</div>
									<div class="col-md-8">
										<input type="password" name="password" class="form-control input-sm" placeholder="Enter your passowrd here..." required="">
										<span class="errors"><?php echo form_error('password'); ?></span>
									</div>
								</div><br>
								<div class="row">
									<div class="col-lg-4"></div>
									<div class="col-lg-8">
										<input type="submit" name="submit" class="btn btn-primary btn-sm" value="Sign Up">
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