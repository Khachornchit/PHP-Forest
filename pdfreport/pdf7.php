<?  
//��˹� Header ��ǹ�������Ǣ�ͧ  
define('FPDF_FONTPATH','font/');  // ��˹��Ҹ����� font
require ('fpdf.php');		// ���¡����� fpdf.php
$pdf=new FPDF();		// ���ҧ object ���� pdf �ҡ���� FPDF
$pdf->AddPage();  		// ������ҧ����͡��� PDF
$pdf->Image('logo.gif', 59, 52);	// ����ʴ��ٻ�Ҿ logo.gif ���ԡѴ 59,52
$pdf->Output();  		//����ش��û����ż�������͡����� PDF ���  
?>   
