<?
	ob_start();
	echo "����� 2 (������鹡�÷ӧҹ�ͧ session) <p>";
	session_start();
	echo "��Ңͧ����� \$name ��� $name <br>";
	echo "��Ңͧ����� \$surname ��� $surname";
	ob_end_flush();
?>