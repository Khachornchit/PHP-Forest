<?
// ���ҧ�δ�����ٻ�Ҿ������ PNG
header("Content-type: image/png");
// ���ҧ�ٻ�Ҿ��Ҵ 250x80 �ԡ��
$image = ImageCreate(250, 80)		
    or die("Cannot Initialize new GD image stream");
// ��˹��բͧ�ٻ���մ�
ImageColorAllocate($image, 0, 0, 0);	
Imagepng($image);	// �觢������ٻ�Ҿ��ѧ��������
Imagedestroy($image); // �׹��Ңͧ˹��¤��������к�
?>