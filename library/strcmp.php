<?
	$str1 = "computer";
	$str2 = "command";
	$result = strcmp($str1,$str2);
	if ($result < 0)
	{
		echo "computer �դ�ҹ��¡��� command";	
	}
	elseif ($result > 0)
	{
		echo "computer �դ���ҡ���� command";
	}
	else
	{
		echo "computer �դ����ҡѺ command";
	}
?>