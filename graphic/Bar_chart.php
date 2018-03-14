<?
function Bar_Chart($title,$value)
{
	header("Content-type: image/png");       //��˹��δ����
	$img = ImageCreate(450, 440);            //���ҧ�ٻ��Ҵ 450x440 �ԡ��
	ImageColorAllocate($img, 255, 255, 255); //��˹�����ٻ���բ��

	//��˹��շ����㹡���Ҵ
	$line = ImageColorAllocate($img ,176, 208, 210);
	$dataFill = ImageColorAllocate($img, 122, 176, 180);
	$black = ImageColorAllocate($img, 0, 0, 0);

	//���ҧ��鹵ç��ǹ͹
	ImageLine($img, 20, 420, 430, 420, $black);

	//���ҧ��鹵ç��ǵ��
	ImageLine($img, 20, 420, 20, 20, $black);

	$bartick = 20;   //����˹ҢͧἹ�����������ѹ
	$barspace = 90;  //������ҧ�����ҧἹ�����������ѹ
	$barmax = 400;   //��������٧�ش�ͧἹ������
	$baseX = 30;     //�ش���������ǹ͹�ͧἹ������
	$baseY = 420;     //�ش���������ǵ�駢ͧἹ������

	//ǹ�ٻ�������ҧἹ�����觷�����
	for ($i=0; $i<=4; $i++) {
	// ���ҧ��������������纾ԡѴ�ͧ�����ҧ�ͧἹ������ ���͹�仡�˹����ѧ���� ImagePolygon() 
	$setBar[$i] = array($baseX, $baseY, $baseX,($baseY-$barmax),($baseX+$bartick),($baseY-$barmax),($baseX+$bartick),$baseY);
	//��ѧ���� ImagePolygon() �������ҧἹ������
	ImagePolygon($img, $setBar[$i], 4, $line);
	//�ҴἹ������ ����ѧ���� ImageFilledRectangle()
	ImageFilledRectangle($img, $baseX, ($baseY-$value[$i]), ($baseX+$bartick),$baseY, $dataFill);
  
	ImageString($img, 3, ($baseX + 10), ($baseY + 5), $title[$i], $black);
	ImageString($img, 3, ($baseX + 10), ($baseY-$value[$i]-15) , $value[$i], $black);

	$baseX += $barspace;     //��Ѻ�ش���������ǵ�駢ͧἹ������
	}
	ImagePNG($img);
	ImageDestroy($img);
}

//��˹��������������ͧ���͢����� 5 ���
	$title = array("Beef","Pork","Chicken","Lamb","Fish");
//��˹��������������ͧ��Ť�Ңͧ������ 5 ���
	$value = array("150","180","300","250","400");

// ���¡�ѧ��ѹ Bar_Chart() 
Bar_Chart($title,$value);

?>
