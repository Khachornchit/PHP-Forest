<?
	//echo "$u <br>";
	//echo "$p <br>";
	if (($u == "root") && ($p == "123"))
	{
		session_register("u");
		session_register("p");
		echo "<a href=admin_session.php>�������к� </a>";
	}
	else
	{
		echo "Error Login";
	}
?>