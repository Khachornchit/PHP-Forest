<?
	function pass($val)
	{
		$val = $val + 10;
		return $val;
	}

	$value = 100;
	echo "����Ԥ�ҵ���� \$value �դ����ҡѺ $value <br>";
	echo "��Ңͧ����� \$value ��͹�����觼�ҹ�����ѧ�ѧ��ѹ�դ����ҡѺ $value <br>";
	pass($value);
	echo "��Ңͧ����� \$value ��ѧ�ҡ�׹��ҡ�Ѻ�ҡ�ѧ��ѹ�դ����ҡѺ $value <br>";		
?>