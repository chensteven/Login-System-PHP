<?php
function isUserLoggedIn() {
	if(isset($_SESSION['authenticated'])) {
		return true;
	} else {
		return false;
	}
}
?>