<?
	session_start();
	if (($u=="root") && ($p=="123"))
	{
		echo "�Թ�յ�͹�Ѻ������˹�Ҩͧ͢�������к�<p>";
		echo "<a href=insert.php>����������</a><p>";
		echo "<a href=delete.php>ź������</a><p>";
		echo "<a href=updateload.php>��䢢�����</a><p>";
		echo "<a href=select.php>�Ѵ����§ҹ</a><p>";
	}
	else
	{
		echo 'Invalid to entry the Admin page';
	}
?>