<?
// ���ҧ�δ�����ٻ�Ҿ������ PNG
header('Content-type: image/png');
// ���ҧ�ٻ�Ҿ��Ҵ 100x100 �ԡ��
$image = ImageCreate(100, 100);
$string = 'PHP';	// ��˹���ͤ��� PHP ���㹵����
// ��˹��բͧ�ٻ��������ͧ
ImageColorAllocate($image, 255, 255, 0);
// ��˹��բͧ����ѡ�����մ�
$black = ImageColorAllocate($image, 0, 0, 0);
// ��������ѡ�� "P"����������ҹ���¢ͧ�ٻ
ImageChar($image, 5, 0, 0, $string, $black);
Imagepng($image);	// �觢������ٻ�Ҿ��ѧ��������
Imagedestroy($image); // �׹��Ңͧ˹��¤��������к�
?> 