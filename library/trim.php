<?
	$text = "\t\tThese are a few words :) ... ";
	$text1 = trim($text); 
	$text2 = ltrim($text);
	$text3 = rtrim($text);
	echo "ʵ�ԧ�鹩�Ѻ $text �դ������ ".strlen($text)."<br>";
	echo "��ѧ�� trim() ����  $text1 �դ������ ".strlen($text1)."<br>";
	echo "��ѧ��ltrim() ����  $text2 �դ������ ".strlen($text2)."<br>";
	echo "��ѧ�� rtrim() ����  $text3 �դ������ ".strlen($text3)."<br>";
?>