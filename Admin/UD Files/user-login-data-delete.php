<?php

	include "../connection.php";

	if(isset($_GET['id']))
	{
		$delete = "DELETE FROM eu_login WHERE u_id= $_GET[id]";

		mysqli_query($conn, $delete);

		header('location: ../user-login-update-info.php');
	}
?>