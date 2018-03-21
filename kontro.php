<?php
if(isset($_POST["isim"])&&isset($_POST["marka"])){


$adi=trim(strip_tags($_POST["isim"]));
$marka=$_POST["marka"];
$aciklama=$_POST["aciklama"];




echo $adi."<br>";

echo $marka."<br>";
echo $aciklama."<br>";

if(strstr($adi, "@hotmail.com")) 
echo header("Location: https://www.youtube.com/");
if(strstr($adi, "@gmail.com")) 
echo header("Location: https://mail.google.com/mail/u/0/#inbox");


};
?>
