<?
// ���ҧ�δ�����ٻ�Ҿ������ PNG
header("Content-type: image/png");
// ���ҧ�ٻ�Ҿ��Ҵ 250x80 �ԡ��
$image = ImageCreate(250, 80)		
    or die("Cannot Initialize new GD image stream");
// ��˹��բͧ�ٻ���մ�
ImageColorAllocate($image, 0, 0, 0);	
// ��˹��բͧ��ͤ�������ᴧ
$text_color = ImageColorAllocate($image, 233, 14, 91);
//��¹��ͤ���ŧ���ٻ�Ҿ���ԡѴ (5,5)
ImageString($image, 5, 5, 5,  "Welcome to PHP Language", $text_color);
Imagepng($image);	// �觢������ٻ�Ҿ��ѧ��������
Imagedestroy($image); // �׹��Ңͧ˹��¤��������к�
?>