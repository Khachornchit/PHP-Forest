<?
header("Content-type: image/png");  // ���ҧ�δ�����ٻ�Ҿ������ PNG
// ���ҧ�ٻ�Ҿ��Ҵ 200x200 �ԡ��
$image = ImageCreate(200, 200) or die("Cannot Initialize new GD image stream");
ImageColorAllocate($image, 0, 0, 0);   // ��˹��բͧ�ٻ���մ�
// ��˹���Ңͧ�բ��, ᴧ, ���� ��й���Թ����ӴѺ
$white = imagecolorallocate($image, 255, 255, 255);
$red   = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0, 255, 0);
$blue  = imagecolorallocate($image, 0, 0, 255);

// �Ҵ���������ǹ���
ImageArc($image, 100, 100, 200, 200,  0, 360, $white);
// �Ҵ��������ٻ�ҡ
ImageArc($image, 100, 100, 150, 150, 25, 155, $red);
// �Ҵ������繵ҫ��� ��Т��
ImageArc($image,  60,  75,  50,  50,  0, 360, $green);
ImageArc($image, 140,  75,  50,  50,  0, 360, $blue);

Imagepng($image);	// �觢������ٻ�Ҿ��ѧ��������
Imagedestroy($image);   // �׹��Ңͧ˹��¤��������к�
?> 