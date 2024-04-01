<?php
include("connect.php");
$result = $connect->query("SELECT * FROM products");
$i=0;
while($i<5){
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Название товара: " . $row["name_products"]. "<br>";
    }
}
$i++; }
$connect->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
</head>
<body>
    
</body>
</html>