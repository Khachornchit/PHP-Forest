<?
	echo "<body onLoad=reload();>";
	if (($user == "root") && ($pass == "123"))
	{
		echo "�Թ�յ�͹�Ѻ������˹�Ҩͧ͢�������к�<p>";
		echo "<a href=insert.php>����������</a><p>";
		echo "<a href=delete.php>ź������</a><p>";
		echo "<a href=updateload.php>��䢢�����</a><p>";
		echo "<a href=select.php>�Ѵ����§ҹ</a><p>";
		echo "<a href=logout.php>�͡�ҡ�к�</a><p>";
	}
	else
	{
		echo 'Invalid to entry the Admin page';
	}
?>