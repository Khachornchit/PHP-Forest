<?
  	$handle1 = fopen('c:/windows/win.ini', 'r');
	$handle2 = fopen('c:/php/php.exe', 'r');
   	echo "�����Ţ��ҧ�ԧ�ͧ����Դ��� win.ini ��� $handle1 <br>";
	echo "�����Ţ��ҧ�ԧ�ͧ����Դ��� php.exe ��� $handle2 <br>";
	fclose($handle1);
	fclose($handle2);
?>