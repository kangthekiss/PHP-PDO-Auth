<div class="header row">
	<div class="brand col-md-2">
		<a href="index.php">Home Page</a>
	</div>
	<div class="menu col-md-10">
		<?php
			session_start();
			if(isset($_SESSION['login']))
			{
				echo "<a href='index.php?auth=logout'>Logout</a>";
			}
			else
			{
		?>
				<a href="index.php?auth=login">Login</a>
				<a href="index.php?auth=register">Register</a>
	<?php } ?>
	</div>
</div>
