<?php

	include "../connection.php";

	if(isset($_GET['id']))
	{
		$delete = "DELETE FROM book_form WHERE u_id= $_GET[id]";

		mysqli_query($conn, $delete);

		header('location: ../user-book-info-update.php');
	}
?>