<?php

	include "../connection.php";

	if(isset($_GET['eg_id']))
	{
		$delete = "DELETE FROM e_gallery WHERE eg_id= $_GET[eg_id]";

		mysqli_query($conn, $delete);

		header('location: ../client-gallery-update.php');
	}
?>