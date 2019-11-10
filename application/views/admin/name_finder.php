<?php
/*
* Filename: name_finder.php
* Filepath: views / admin / name_finder.php
* Author: Saddam
*/
?>
<?php if(empty($search_results)): ?>
<div class="container">
	<div class="col-lg-8">
		<h1>Welcome to Name Finder.</h1><hr>
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
				<th>Category</th>
				<th>Description / Meaning</th>
			</thead>
			<tbody>
			<?php if(!empty($names)): ?>
			<?php $serial = 1; foreach($names as $name): ?>
			<?php $detail = $this->Names_model->name_detail($name->id); ?>
				<tr>
					<td><?= $serial++; ?></td>
					<td><?= $name->first_name; ?></td>
					<td><?= $name->last_name; ?></td>
					<td>
						<div <?php if($name->category == 'Asian Muslim'): ?> class="label label-primary" <?php elseif($name->category == 'Arabian'): ?> class="label label-warning" <?php else: ?> class="label label-danger" <?php endif; ?>>
								<?= $name->category; ?>
						</div>
					</td>
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
			<?php endforeach; endif; ?>
			</tbody>
		</table>
		<p class="text-right">
			<a href="<?php echo base_url('name_finder/list_names'); ?>">Read more...</a>
		</p>
	</div>
	<div class="col-lg-4">
		<h1>Recently Added</h1><hr>
		<div class="panel panel-default">
			<div class="panel-body">
				<marquee direction="up" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();">
					<?php if(empty($search_results) AND !empty($names)): foreach($names as $name): ?>
					<p><?php echo '<strong>'.$name->first_name.' '.$name->last_name.'</strong> is <strong>'.$name->category.'</strong> name.'; ?></p>
				<?php endforeach; endif; ?>
				</marquee>
			</div>
		</div>
	</div>
</div>
<?php elseif(!empty($search_results)): ?>
	<div class="container">
	<div class="col-lg-12">
		<h1>Searh results <small>For: <?php echo @$_GET['name']; ?></small></h1>
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
				<th>Category</th>
				<th>Description / Meaning</th>
			</thead>
			<tbody>
			<?php $serial = 1; foreach($search_results as $name): ?>
			<?php $detail = $this->Names_model->name_detail($name->id); ?>
				<tr>
					<td><?= $serial++; ?></td>
					<td><?= $name->first_name; ?></td>
					<td><?= $name->last_name; ?></td>
					<td>
						<div <?php if($name->category == 'Asian Muslim'): ?> class="label label-primary" <?php elseif($name->category == 'Arabian'): ?> class="label label-warning" <?php else: ?> class="label label-danger" <?php endif; ?>>
								<?= $name->category; ?>
						</div>
					</td>
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
	</div>
</div>
<?php endif; ?>
<?php if(empty($search_results) AND empty($names)): ?>
<div class="container">
	<div class="col-lg-8 text-center">
		<div class="alert alert-danger">
			<p><strong>Oops!</strong> No recored found matching your search query.</p>
		</div>
	</div>
</div>
<?php endif; ?>