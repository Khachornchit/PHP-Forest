<?
	$handle = fopen("info.txt", "r");
	fseek($handle, 10);
	$content = fgets($handle,17);
	echo "��ҹ�����Ũҡ��������������ҹ�ҡ����ѡ�õ�Ƿ�� 10 ��� $content <br>";
	fclose($handle);
?>