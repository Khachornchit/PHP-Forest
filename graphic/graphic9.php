<?
	header("Content-type:image/png"); // ���ҧ�δ�����ٻ�Ҿ������ PNG
	// ���ҧ�ٻ�Ҿ��Ҵ 300x200 �ԡ��
	$image = ImageCreate(300,200) or die("Cannot Initialize new GD image stream");
	ImageColorAllocate($image,0,0,0);  // ��˹��բͧ�ٻ���մ�
	// ��˹��բͧ��鹵ç����ᴧ
	$line_color = ImageColorAllocate($image,233,14,91);
	// ���ҧ��鹵ç�ҡ�ԡѴ (1,100) �֧ (299,100)
	ImageLine($image,1,100,299,100,$line_color);
	Imagepng($image);	// �觢������ٻ�Ҿ��ѧ��������
	Imagedestroy($image);   // �׹��Ңͧ˹��¤��������к�
?>