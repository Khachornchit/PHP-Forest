<?
// ���ҧ�δ�����ٻ�Ҿ������ JPEG
Header("Content-type: image/jpeg"); 
// ���ҧ�ٻ�Ҿ��Ҵ 300x200 �ԡ��
$image = ImageCreate(300,200); 
// ��˹��բͧ�ٻ������
ImageColorAllocate($image,190,190,190); 
// ��˹��բͧ��ͺ�������������մ�
$photo = ImageColorAllocate($image,0,0,0); 
//���ҧ��ͺ�����������ҡ�ԡѴ (0,0) �֧ (299,199)
ImageRectangle($image, 0, 0, 299, 199, $photo); 
// ��˹��շ����ŧ��������ͧ
$yellow = ImageColorAllocate($image, 255, 255, 0);
// �������ͧ�ҡ�������������ҡ��ѡѴ (50,50) �֧ (250,150)
ImageFilledRectangle($image,50, 50, 250, 150, $yellow);
ImageJpeg($image); // �觢������ٻ�Ҿ��ѧ��������
ImageDestroy($image); // �׹��Ңͧ˹��¤��������к�
?> 