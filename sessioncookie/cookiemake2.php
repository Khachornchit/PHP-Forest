<?
	echo "���ҧ����� \$username ��� \$password <p>";
	setcookie("username", "charnchai", time()+60);
	setcookie("password", "12345", time()+60);
	echo "<a href=showcookie.php>��ԡ����� ���͵�Ǩ�ͺ��� cookie</a>";
?>