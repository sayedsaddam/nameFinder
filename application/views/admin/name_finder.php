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
		<code>Find and add new names to the list.</code>
		<table class="table table-hover">
			<thead>
				<th>Serial No.</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Description / Meaning</th>
			</thead>
			<tbody>
			<?php $serial = 1; foreach($names as $name): ?>
				<tr>
					<td><?= $serial++; ?></td>
					<td><?= $name->first_name; ?></td>
					<td><?= $name->last_name; ?></td>
					<td><?= $name->name_description; ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<p class="text-right">
			<a href="#">Read more...</a>
		</p>
	</div>
	<div class="col-lg-6">
		<h1>The Next Column in the grid.</h1>
		<code>Here's the next column of this grid.</code><br><br>
		<img src="<?= base_url('assets/img/profile.png'); ?>" alt="Profile image..." class="img-thumbnail">
		<caption>This image was taken from the GitHub to set it up for Profile.</caption>
	</div>
</div>