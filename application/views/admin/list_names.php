<?php defined("BASEPATH") OR exit("No direct script access allowed!"); ?>
<?php
/*
* Filename: list_names.php
* Filepath: views / admin / names_list.php
* Author: Saddam
*/

?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<?php //$this->datatables->generate('dt_authors'); ?>
			<?php //$this->datatables->jquery('dt_authors'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2>List of Names <small>With meaning/description</small></h2><hr>
			<table class="table table-striped table-reponsive">
				<thead>
					<tr>
						<th>Serial</th>
						<th>Name</th>
						<th>Category</th>
						<th>Description</th>
						<?php if($this->session->userdata('username')): ?>
							<th>Action</th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
				<?php $serial = 1; foreach($names as $name): ?>
				<?php $detail = $this->Names_model->name_detail($name->id); ?>
					<tr>
						<td><?= $serial++; ?></td>		
						<td><?= $name->first_name.' '.$name->last_name; ?></td>		
						<td>
							<div <?php if($name->category == 'Asian Muslim'): ?> class="label label-primary" <?php elseif($name->category == 'Arabian'): ?> class="label label-warning" <?php else: ?> class="label label-danger" <?php endif; ?>>
								<?= $name->category; ?>
							</div>
						</td>		
						<td>
							<a data-toggle="modal" data-target="#detail<?= $name->id; ?>" href="#detailModal"><?= substr($name->name_description, 0, 20).' ...'; ?></a>
							<div class="modal fade" id="detail<?php echo $name->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						<?php if($this->session->userdata('username')): ?>
							<td>
								<a href="<?= base_url(); ?>name_finder/edit_name/<?= $name->id; ?>"><div class="label label-primary">Edit</div></a>
								<a href="<?= base_url(); ?>name_finder/delete_name/<?= $name->id; ?>"><div class="label label-danger" onclick="javascript:return confirm('Are you sure to delete? This action can not be undone !');">Delete</div></a>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; ?>
				</tbody>	
			</table>
		</div>	
	</div>
</div>