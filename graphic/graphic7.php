<?
header("Content-type: image/png");  // ���ҧ�δ�����ٻ�Ҿ������ PNG
// ���ҧ�ٻ�Ҿ��Ҵ 400x300 �ԡ��
$image = ImageCreate(400, 300) or die("Cannot Initialize new GD image stream");
ImageColorAllocate($image, 0, 0, 0);   // ��˹��բͧ�ٻ���մ�
// ��˹��բͧ��ͺ�ٻ��������������բ��
$col_poly = ImageColorAllocate($image, 255, 255, 255);
// �Ҵ�ٻ����������������ٻ 3 ��������վԡѴ��� (0,0),(100,200),(300,200)
ImagePolygon($image, array (0, 0, 100, 200, 300, 200), 3, $col_poly);
// ��˹���Ңͧ������ͧ
$yellow = ImageColorAllocate($image, 255, 255, 0);   
ImageFilledPolygon($image, array (5, 5, 98, 199, 298, 199), 3, $yellow);
Imagepng($image);	// �觢������ٻ�Ҿ��ѧ��������
Imagedestroy($image);   // �׹��Ңͧ˹��¤��������к�
?>
