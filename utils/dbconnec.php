<?php
try
{
	$db=new PDO("mysql:host=localhost;dbname=tatlituzlueksi","root","");

}
catch(PDOException $e)
{
	echo "bağlantı sağlanamadı". $e->getMessage();
}
?>