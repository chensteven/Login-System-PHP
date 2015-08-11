<?php include('functions.php'); ?>
<?php
session_start();
if(isUserLoggedIn()) {
	include "content.php";
} else {
	include "login.php";
}

//If user is logged in
// if (isUserLoggedIn()) {

// 	//Display welcome content (index.php)
// }
//Else
	//Display authentication form (index.php)
	//User types in credential and submits form using POST (Look up post)
	//Validation of data by
		//Trimming data (create function to trim data)
		//Compare data to SQL database
			//Connect to the SQL Server
			//If connectable
				//Connect to Databse
				//If connectable
					//Select Query
					//If user is found
						//Starts Sessions (Look up session)
						//Redirects to the index page (Header(Location: ''))
					//Else
						//Display error
						//Ask to type in authentication or Register acccount
				//Else
					//return error
			//Else
				//return error

?>


