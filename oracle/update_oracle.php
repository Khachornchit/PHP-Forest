<?
	$username = "scott";
	$password = "ORACLE";
	$dbname = "chanchai";
	$conn = oci_connect($username,$password,$dbname);
	$query = oci_parse($conn,"Update Dept Set DNAME='IT', LOC='UBON' Where DEPTNO=50");
	$result = oci_execute($query);
	if ($result)
	{
		echo "�����䢢�����ŧ㹰ҹ�����Ż��ʺ���������<br>";
		oci_close($conn);
	}
	else
	{
		echo "�������ö��䢢���������ŧ㹰ҹ��������<br>";
	}
?>