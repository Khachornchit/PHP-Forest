<?
	$sell = array(1250, 2000, 1000, 3500, 4000);
	$count = 0;
	While ($count <= 4)
	{
		$sellno = $count + 1;
		echo "��ѡ�ҹ����� $sellno ���ʹ�����ҡѺ $sell[$count] <br>";
		$sum = $sum + $sell[$count];
		$count = $count + 1;
	}
	echo "������ͧ��ѡ�ҹ��·�� 5 �� �դ����ҡѺ $sum";
?>