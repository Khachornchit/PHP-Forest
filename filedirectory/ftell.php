<?
	$handle = fopen("info.txt", "r");
	$data = fgets($handle, 3);
	echo "���˹觢ͧ���������͹���������˹觷�� ".ftell($handle);
	fclose($handle);
?>