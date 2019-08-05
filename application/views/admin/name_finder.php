<?php
/*
* Filename: name_finder.php
* Filepath: views / admin / name_finder.php
* Author: Saddam
*/
?>
<div class="container">
	<div class="col-lg-6">
		<h1>Welcome to Name Finder.</h1>
		<code>Find and add new names to the list.</code><br><br>
		<?php if($success = $this->session->flashdata('success')): ?>
			<div class="alert alert-success text-center">
				<p><?php echo $success; ?></p>
			</div>
		<?php endif; ?>
		<table class="table table-hover">
			<thead>
				<th>Serial No.</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Description / Meaning</th>
			</thead>
			<tbody>
			<?php $serial = 1; foreach($names as $name): ?>
			<?php $detail = $this->Names_model->name_detail($name->id); ?>
				<tr>
					<td><?= $serial++; ?></td>
					<td><?= $name->first_name; ?></td>
					<td><?= $name->last_name; ?></td>
					<td>
						<a href="#nameModal" data-toggle="modal" data-target="#detailModal<?= $name->id; ?>"><?= substr($name->name_description, 0, 25).'...'; ?>
						</a>
						<div class="modal fade" id="detailModal<?php echo $name->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		                   <div class="modal-dialog" role="document">
		                     <div class="modal-content">
		                         <!--Header-->
		                       <div class="modal-header">
		                         <h4 style="display: inline-block;" class="modal-title" id="myModalLabel">Name's detail... </h4>
		                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                           <span aria-hidden="true">×</span>
		                         </button>
		                       </div>
		                       <!--Body-->
		                       <div class="modal-body">
		                         <div class="row">
		                           <div class="col-md-10 col-md-offset-1 text-center">
		                             <h4><strong>Description</strong></h4>
		                             <p><?php echo $detail->name_description; ?></p>
		                           </div>
		                         </div>
		                       </div>
		                       <!--Footer-->
		                       <div class="modal-footer">
		                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                       </div>
		                     </div>
		                   </div>
		                </div>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<p class="text-right">
			<a href="<?php echo base_url('name_finder/list_names'); ?>">Read more...</a>
		</p>
	</div>
	<div class="col-lg-6">
		<h1>The Next Column in the grid.</h1>
		<code>Here's the next column of this grid.</code><br><br>
		<img src="<?= base_url('assets/img/profile.png'); ?>" alt="Profile image..." class="img-thumbnail">
		<caption>This image was taken from the GitHub to set it up for Profile.</caption>
	</div>
</div>