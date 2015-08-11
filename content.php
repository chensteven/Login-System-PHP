<?php include "header.php"; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-6">
					<h1>Welcome!</h1>
				</div> <!-- col-lg-6 -->
			</div> <!-- row -->
			<div class="row">
				<div class="col-lg-6">
					<?php
						echo "<h4>Your Username:</h4>";
						echo "<p>".$_SESSION['username']."</p>";
						echo "<h4>Your Password</h4>";
						echo "<p>".$_SESSION['password']."</p>";
					?>
				</div>
			</div>
		</div> <!-- col-lg-12 -->
	</div> <!-- row -->
</div>
<?php include "footer.php"; ?>