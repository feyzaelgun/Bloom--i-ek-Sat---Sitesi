<?php 

try {
	$db = new PDO("mysql:host=localhost;dbname=flower;charset=utf8", 'root', '12345678');
} catch (PDOException $e) { // Hata burada düzeltildi
	echo $e->getMessage();
}

?>
