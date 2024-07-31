<?php

	include "../connection.php";

	if(isset($_GET['id']))
	{
		$delete = "DELETE FROM eu_registration WHERE u_id= $_GET[id]";

		mysqli_query($conn, $delete);

		header('location: ../user-register-update-info.php');
	}
?>