		<?php
		$username="ghamdi";
		$password="B00537188";
		$dbname="ghamdi";
		$host="db.cs.dal.ca";
		
		$con=mysqli_connect($host,$username,$password,$dbname);
		
		if (mysqli_connect_errno())
  			{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}
  			?>