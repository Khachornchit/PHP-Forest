<?
	ob_start();
	echo "����� 1 (ŧ����¹����� \$name ��� \$surname) <p>";
	$name = "�ҭ���";
	$surname = "�����ö��";
	session_register("name","surname");
	echo "<a href=session_register2.php>��ԡ�������ѧ����� 2</a>";	
	ob_end_flush();
?>