<?php
if(!isset($_GET['aa']) || !isset($_GET['bb'])){
	echo "�ݭn���㪺��ӭ�";
	exit;
}
if(!is_numeric($_GET['aa']) || !is_numeric($_GET['bb'])){
	echo"�ݭn��Ӽƭ�";
	exit;
}
$x=$_GET['aa'];
$y=$_GET['bb'];
$z=$x+$y;

echo $z;