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
			<?php $this->datatables->generate('dt_authors'); ?>
			<?php $this->datatables->jquery('dt_authors'); ?>
		</div>
	</div>
</div>