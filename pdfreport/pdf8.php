<?  
//��˹� Header ��ǹ�������Ǣ�ͧ  
efine('FPDF_FONTPATH','font/');  // ��˹��Ҹ����� font
require ('fpdf.php');		// ���¡����� fpdf.php
$pdf=new FPDF();		// ���ҧ object ���� pdf �ҡ���� FPDF
$pdf->AddFont('regular','','angsana.php');  // ���� Font angsana ��ٻẺ��������Ѻ��ҹ
$pdf->AddPage();  	// ������ҧ����͡��� PDF
$pdf->SetFont('regular','',16); 	// �� Font angsana Ẻ���� ��Ҵ 16
$pdf->Text(80,5,'��§ҹ�ʴ���¡���Թ���'); 	// ����������§ҹ
$pdf->Line(5,8,200,8);  			// �Ҵ��鹵ç		
// ����������§ҹ
$pdf->Text(5,15,'�����Թ���'); 			
$pdf->Text(38,15,'�����Թ���'); 
$pdf->Text(98,15,'�Ҥҷع'); 
$pdf->Text(135,15,'�ҤҢ��'); 
$pdf->Text(165,15,'�ӹǹ'); 
$pdf->Line(5,18,200,18);  			// �Ҵ��鹵ç
$link = mysql_connect("localhost", "root", "1234");	// �������Ͱҹ������ MySQL		  
$sql = "use productdb";			// ���͡��ҹ������ productdb				
$result = mysql_query($sql);			// query ������					 
mysql_query("set NAMES tis620");		// set ������
$sql = "select * from product;";		  	// �֧�����ŷء��Ŵ�ҡ���ҧ product
$result = mysql_query($sql);			// query ������					 
$line = 25;					// ��˹���÷Ѵ��������ʴ�������㹰ҹ������
while ($dbarr = mysql_fetch_array($result))		// ǹ�ٻ���ʹ֧�����Ũҡ��� query		 
{					
	$pdf->Text(10,$line,$dbarr[code]);  	// �ʴ���������Թ���
	$pdf->Text(40,$line,$dbarr[name]);  	// �ʴ���Ҫ����Թ���
	$pdf->Text(100,$line,$dbarr[cost]);  	// �ʴ�����Ҥҷع
	$pdf->Text(140,$line,$dbarr[price]);  	// �ʴ�����ҤҢ��
	$pdf->Text(170,$line,$dbarr[quantity]);  	// �ʴ���Ҩӹǹ
	$line = $line + 5;			// ������ record �����ʴ�㹺�÷Ѵ�����˹�᡹ Y ��������ա 5 �ش
}
mysql_close($link);				// �Դ����������Ͱҹ������ MySQL
$pdf->Line(5,$line,200,$line);  			// �Ҵ��鹵ç		
$pdf->Output();  
?>   
