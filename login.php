<?php include "header.php"; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form method="post" action="authentication.php" class="center-block">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" placeholder="Username" name="username">						
				</div>
				<div class="form-group">
					<label for="passpword">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Password" name="password">						
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-default">Submit</button>
				</div>
			</form>
		</div> <!-- col-lg-6 -->
	</div> <!-- row -->
</div>
<?php include "footer.php"; ?>