	<?php
		include 'connection.php';
		$sql_get = mysqli_query($conn, "SELECT * FROM leave_requests WHERE status=0");
		$count = mysqli_num_rows($sql_get);
	?>  