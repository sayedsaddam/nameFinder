<style type="text/css">
	.errors{
		font-size: 11px;
		color: red;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-lg-7">
			<form action="<?= base_url('name_finder/store_names'); ?>" method="post">
				<div class="row">
					<h2>Add Names here <small>Fill all the inputs below and select a category.</small></h2><hr>
					<div class="col-md-2">
						<label for="name">First Name</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="fname" class="form-control input-sm" placeholder="Enter first name here..." value="<?= set_value('fname'); ?>">
						<span class="errors"><?php echo form_error('fname'); ?></span>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-2">
						<label for="name">Last Name</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="lname" class="form-control input-sm" placeholder="Enter last name here..." value="<?= set_value('lname'); ?>">
						<span class="errors"><?php echo form_error('lname'); ?></span>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-2">
						<label for="name">Description</label>
					</div>
					<div class="col-md-9">
						<textarea name="description" class="form-control input-sm" rows="5" placeholder="Type name meaning, origin, description etc and some additional comments..."><?php echo set_value('description'); ?></textarea>
						<span class="errors"><?php echo form_error('description'); ?></span>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-2">
						<label for="name">Category</label>
					</div>
					<div class="col-md-9">
						<select name="category" class="form-control input-sm">
							<option value="">Select Category</option>
							<option value="Asian Muslim">Asian, Muslim</option>
							<option value="Asian Non Muslim">Asian, Non-Muslim</option>
							<option value="American">American</option>
							<option value="Arabian">Arabian</option>
							<option value="Chinese">Chinese</option>
							<option value="Caribean">Chinese</option>
						</select>
						<span class="errors"><?php echo form_error('category'); ?></span>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-9">
						<input type="submit" name="submit" class="btn btn-primary btn-sm" value="Save">
						<input type="reset" name="reset" class="btn btn-warning btn-sm" value="Reset">
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-5">
			<h2>After adding names</h2><hr>
			<p>After you add name(s), you'll be able to see it on the homepage or going through the link given in the dropdown under the names [ View Names ].</p>
		</div>
	</div>
</div>