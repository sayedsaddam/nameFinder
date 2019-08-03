<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="panel panel-info">
				<div class="panel-heading text-right">
					<h3>Sitemap <small>Navigate through the site</small></h3>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<h4>Left Menu</h4><hr>
						<ul>
							<li><a href="<?= base_url('name_finder'); ?>">Home</a></li>
							<li><a href="<?= base_url('home/about_us'); ?>">About Us</a></li>
							<li><a href="<?= base_url('name_finder/add_names'); ?>">Add Names</a></li>
							<li><a href="<?= base_url('name_finder/view_names'); ?>">View Names</a></li>
							<li><a href="<?= base_url('name_finder/search_names'); ?>">Search Names</a></li>
							<li><a href="<?= base_url('name_finder/downloads'); ?>">Downlads</a></li>
							<li><a href="<?= base_url('name_finder/contact'); ?>">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<h4>Right Menu</h4><hr>
						<ul>
							<li><a href="<?= base_url('login'); ?>">Login</a></li>
							<li><a href="<?= base_url('login/sign_up'); ?>">Sign Up</a></li>
							<li><a href="<?= base_url('name_finder/sitemap'); ?>">Sitemap</a></li>
							<li><a href="<?= base_url('login/logout'); ?>">Logout</a></li>
						</ul>
					</div>
				</div>
				<div class="panel-footer">
					Copyright &copy; <?php echo date('Y'); ?>
				</div>
			</div>
		</div>
	</div>
</div>