<?  
//��˹� Header ��ǹ�������Ǣ�ͧ  
define('FPDF_FONTPATH','font/');  // ��˹��Ҹ����� font
require ('fpdf.php');		// ���¡����� fpdf.php
$pdf=new FPDF();		// ���ҧ object ���� pdf �ҡ���� FPDF
$pdf->AddFont('regular','','angsana.php');	// ���� Font angsana ��ٻẺ��������Ѻ��ҹ
$pdf->AddFont('bold','B','angsanab.php');  	// ���� Font angsanab ��ٻẺ���˹�����Ѻ��ҹ
$pdf->AddFont('italic','I','angsanai.php');  	// ���� Font angsanai ��ٻẺ������§����Ѻ��ҹ
$pdf->AddPage();  	// ������ҧ����͡��� PDF
$pdf->Line(5,8,200,8);  // �Ҵ��鹵ç���ԡѴ������� (5,8) �������ش (200,8) 
//������ͤ���  
$pdf->SetFont('regular','',16); 	// �� Font angsana Ẻ���� ��Ҵ 16
$pdf->Text(25,20,'���˹ѧ��ͻ��� �����˹觾ԡѴ 25,20'); // �ʴ���ͤ������ԡѴ 25,20
$pdf->SetFont('bold','B',16); 	// �� Font angsanab Ẻ���˹� ��Ҵ 16
$pdf->Text(25,40,'���˹ѧ���˹� �����˹觾ԡѴ 25,40'); // �ʴ���ͤ������ԡѴ 25,40
$pdf->SetFont('italic','I',16);	// �� Font angsanai Ẻ������§ ��Ҵ 16
$pdf->Text(25,60,'���˹ѧ������§ �����˹觾ԡѴ 25,60'); // �ʴ���ͤ������ԡѴ 25,60
$pdf->Line(5,80,200,80);  // �Ҵ��鹵ç���ԡѴ������� (5,80) �������ش (200,80)
//����ش��û����ż�������͡����� PDF ���  
$pdf->Output();  
?>   
