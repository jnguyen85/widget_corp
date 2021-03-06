<?php
	require_once('../inc/session.php');
	$page_title = "Admin";
	$is_public = false;
	require_once('../inc/functions.php');
?>

<?php confirm_logged_in(); ?>
<?php include('../inc/layouts/header.php'); ?>

<div class="container-fluid" id="main">
	<div class="col-xs-12 col-md-offset-2" id="page">
		<h2>Admin Menu</h2>
		<p>Welcome to the admin area, <?php echo htmlentities($_SESSION["username"]); ?>!</p>
		<div class="col-xs-9 col-md-3">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="manage_content">Manage Website Content</a></li>
				<li><a href="manage_admins">Manage Admin Users</a></li>
				<li><a href="logout">Logout</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include('../inc/layouts/footer.php'); ?>