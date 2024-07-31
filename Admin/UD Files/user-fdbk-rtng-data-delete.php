<?php

	include "../connection.php";

	if(isset($_GET['id']))
	{
		$delete = "DELETE FROM e_rate_or_feedback WHERE u_id= $_GET[id]";

		mysqli_query($conn, $delete);

		header('location: ../fdbk_and_rtng.php');
	}
?>