<?php
echo "����-���ʡ�� ��� $name <br>";
if ($sex == "1") {
	echo "�Ȫ�� <br>";
} else {
	echo "��˭ԧ <br>";
}

switch ($education) {
	case "1" :
		echo "�дѺ����֡���٧�ش ��� ��ӡ��һ�ԭ�ҵ�� <br>";
		break;
	case "2" :
		echo "�дѺ����֡���٧�ش ��� ��ԭ�ҵ�� <br>";
		break;
	case "3" :
		echo "�дѺ����֡���٧�ش ��� ��ԭ��� <br>";
		break;
	case "4" :
		echo "�дѺ����֡���٧�ش ��� ��ԭ���͡ <br>";
		break;
}

if (($source1 == "1") && ($source2 == "2") && ($source3 == "3")) {
	echo "��Ҿ��ҷ�Һ���䫵����Ҩҡ ���͹ ��� ��ä��Ҩҡ Search Engine ��� �ɳҷҧ����/�Է�� <br>";
} elseif (($source1 == "1") && ($source2 == "2")) {
	echo "��Ҿ��ҷ�Һ���䫵����Ҩҡ ���͹ ��� ��ä��Ҩҡ Search Engine <br>";
} elseif (($source1 == "1") && ($source3 == "3")) {
	echo "��Ҿ��ҷ�Һ���䫵����Ҩҡ ���͹ ��� �ɳҷҧ����/�Է�� <br>";
} elseif ($source1 == "1") {
	echo "��Ҿ��ҷ�Һ���䫵����Ҩҡ ���͹ <br>";
} elseif (($source2 == "2") && ($source3 == "3")) {
	echo "��Ҿ��ҷ�Һ���䫵����Ҩҡ  ��ä��Ҩҡ Search Engine ��� �ɳҷҧ����/�Է�� <br>";
} elseif ($source2 == "2") {
	echo "��Ҿ��ҷ�Һ���䫵����Ҩҡ  ��ä��Ҩҡ Search Engine <br>";
} elseif ($source3 == "3") {
	echo "��Ҿ��ҷ�Һ���䫵����Ҩҡ  �ɳҷҧ����/�Է�� <br>";
} else {
	echo "��Ҿ��ҷ�Һ���䫵����Ҩҡ  (��ҹ��������͡������͡���) <br>";
}
echo "���й�����Ѻ���䫵� ��� $comment";