<?
	session_start();
	echo "¡��ԡ���ŧ����¹����� \$name <p>";
	session_unregister("name");
	echo "<a href=session_register2.php>��ԡ�������ѧ����� 2</a>";
?>