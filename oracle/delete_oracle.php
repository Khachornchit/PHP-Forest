<?
	$username = "scott";
	$password = "ORACLE";
	$dbname = "chanchai";
	$conn = oci_connect($username,$password,$dbname);
	$query = oci_parse($conn,"Delete Dept Where DEPTNO=50");
	$result = oci_execute($query);
	if ($result)
	{
		echo "���ź������ŧ㹰ҹ�����Ż��ʺ���������<br>";
		oci_close($conn);
	}
	else
	{
		echo "�������öź�������͡�ҡ�ҹ��������<br>";
	}
?>