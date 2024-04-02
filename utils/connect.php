<?php
$host="localhost";
$username="root";
$pass="";
$dbname="tatlituzlueksi";

$conn= mysqli_connect($host,$username,$pass,$dbname);

$result = $conn->query("SHOW TABLES");

$tables = array(); 

if ($result->num_rows > 0) {
    while($row = $result->fetch_row()) {
        $tables[] = $row[0];
    }
}
$sql = "";
foreach ($tables as $table) {
    $sql .= "SELECT id,yemekAdi,yemekTarifi,tablo_adi FROM " . $table . " UNION ALL ";
}

$sql = rtrim($sql, "UNION ALL ");



$results=mysqli_query($conn,$sql);
$json_array=array();

while($data = mysqli_fetch_assoc($results)){
    $json_array[]=$data;
}
echo json_encode($json_array);
?>