<?	
	function testdate($day, $month, $year)
	{
		if (checkdate($month, $day, $year))
		{
			echo "�ѹ��� $day ��͹ $month �� $year �������ԧ <br>";
		}
		else
		{
			echo "�ѹ��� $day ��͹ $month �� $year ����������ԧ <br>";
		}
	}

	$day1 = 31;
	$month1 = 12;
	$year1 = 2000;
	testdate($day1, $month1, $year1);
	
	$day2 = 29;
	$month2 = 2;
	$year2 = 2001;
	testdate($day2, $month2, $year2);
?>