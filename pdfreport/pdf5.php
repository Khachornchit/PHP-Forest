<?  
//��˹� Header ��ǹ�������Ǣ�ͧ  
define('FPDF_FONTPATH','font/');  // ��˹��Ҹ����� font
require ('fpdf.php');		// ���¡����� fpdf.php
$pdf=new FPDF();		// ���ҧ object ���� pdf �ҡ���� FPDF
$pdf->AddFont('regular','','angsana.php');	// ���� Font angsana ��ٻẺ��������Ѻ��ҹ
$pdf->AddFont('bold','B','angsanab.php');  	// ���� Font angsanab ��ٻẺ���˹�����Ѻ��ҹ
$pdf->AddFont('italic','I','angsanai.php');  	// ���� Font angsanai ��ٻẺ������§����Ѻ��ҹ
$pdf->AddPage();  	// ������ҧ����͡��� PDF
//������ͤ���  
$pdf->SetFont('regular','',16); 	// �� Font angsana Ẻ���� ��Ҵ 16
$pdf->Text(25,20,'���˹ѧ��ͻ��� �����˹觾ԡѴ 25,20'); // �ʴ���ͤ������ԡѴ 25,20
$pdf->SetFont('bold','B',16); 	// �� Font angsanab Ẻ���˹� ��Ҵ 16
$pdf->Text(25,40,'���˹ѧ���˹� �����˹觾ԡѴ 25,40'); // �ʴ���ͤ������ԡѴ 25,40
$pdf->SetFont('italic','I',16);	// �� Font angsanai Ẻ������§ ��Ҵ 16
$pdf->Text(25,60,'���˹ѧ������§ �����˹觾ԡѴ 25,60'); // �ʴ���ͤ������ԡѴ 25,60
//����ش��û����ż�������͡����� PDF ���  
$pdf->Output();  
?>   
