<?
	$username = "scott";
	$password = "ORACLE";
	$dbname = "chanchai";
	$conn = oci_connect($username,$password,$dbname);
	$query = oci_parse($conn,"Insert Into Dept Values (50,'���ʹ��','�غ��Ҫ�ҹ�')");
	$result = oci_execute($query);
	if ($result)
	{
		echo "�������������ŧ㹰ҹ�����Ż��ʺ���������<br>";
		oci_close($conn);
	}
	else
	{
		echo "�������ö��������������ŧ㹰ҹ��������<br>";
	}
?>