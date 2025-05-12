<?php
ob_start();


require_once'baglan.php';


if (isset($_POST['insertislemi'])) {
echo $_POST['form_name']."<br>";
echo $_POST['form_email']."<br>";
echo $_POST['form_konu']."<br>";
echo $_POST['form_mesaj']."<br>";
$kaydet=$db->prepare("INSERT into form set
form_name=:form_name,
form_email=:form_email,
form_konu=:form_konu,
form_mesaj=:form_mesaj
");
$insert=$kaydet->execute(array(
'form_name'=>$_POST['form_name'],
'form_email'=>$_POST['form_email'],
'form_konu'=>$_POST['form_konu'],
'form_mesaj'=>$_POST['form_mesaj']
));
}



?>