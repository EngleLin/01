<?php
$data =json_decode(file_get_contents('php://input'));

echo $data->("prod");
echo $data->("price");
try {
	$db = new PDO('mysql:host=localhost;dbname=test0329;charset=utf8'
		,'mememe','123456', array( 
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		) );
}catch(PDOException $err) {
	echo "ERROR:";
	echo $err->getMessage();  
	echo '<a href="list.php">¦^¨ì¦Cªí</a>';
	exit;
}

$stmt = $db->prepare('insert into moneybook (name,cost) values (?,?)');
$stmt->execute([$_data['prod'],$_data['price']]);

echo "OK";