<?
	$username = "scott";
	$password = "ORACLE";
	$dbname = "chanchai";
	$conn = oci_connect($username,$password,$dbname);
	$query = oci_parse($conn,'Select * from Dept');
	oci_execute($query);
	while($row = oci_fetch_array($query, OCI_NUM))
	{
		echo "����Ἱ�: ".$row[0];
		echo " ����Ἱ�: ".$row[1];
		echo " ������: ".$row[2]. "<br>";
	}
	oci_close($conn);
?>