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
$pdf->Ln(); 	// ��鹺�÷Ѵ����
$pdf->Write(10,'���˹ѧ��ͻ���');  // ������ͤ������ ���˹ѧ��ͻ��� �����˹觨ҡ��ҹ��ŧ�ҵ��᡹ Y 10 �ش	
$pdf->SetFont('bold','B',16); 	// �� Font angsanab Ẻ���˹� ��Ҵ 16
$pdf->Ln();	// ��鹺�÷Ѵ����
$pdf->Write(10,'���˹ѧ���˹�');  // ������ͤ������ ���˹ѧ���˹� �����˹觨ҡ��ҹ��ŧ�ҵ��᡹ Y 10 �ش	
$pdf->SetFont('italic','I',16);	// �� Font angsanai Ẻ������§ ��Ҵ 16
$pdf->Ln();	// ��鹺�÷Ѵ����
$pdf->Write(10,'���˹ѧ������§');  // ������ͤ������ ���˹ѧ������§ �����˹觨ҡ��ҹ��ŧ�ҵ��᡹ Y 10 �ش	 	
//����ش��û����ż�������͡����� PDF ���  
$pdf->Output();  
?>   
