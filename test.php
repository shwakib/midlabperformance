<?php



	if( isset($_REQUEST['submit']))
	{
		$name=$_REQUEST['name'];

		if(empty($name))
		{
			echo "null";

		}

		elseif (strlen($name)<=1) 
			{
				echo "Too short";
			}

		/*elseif (strpos($name,"")) {
				
			}*/
		else
		{
			echo "okay";
		}
	}

	if(isset($_REQUEST['submit']))
	{
		$email=$_REQUEST['uemail'];

		if(empty($email))
		{
			echo "Cannot be empty";

		}
		else
		{

		}

	}

	if(isset($_REQUEST['submit']))
	{
		$gender=$_REQUEST['Gender'];

		if(empty($gender))
		{
			echo "Cannot be empty";

		}
		else
		{

		}
	}

	if(isset($_REQUEST['submit']))
	{
		$d=$_REQUEST['date'];
		$m=$_REQUEST['mm'];
		$y=$_REQUEST['year'];


		if(empty($d||$m||$y))
		{
			echo "Cannot be empty";

		}
		else if($d=)
		{

		}
	}




	


?>