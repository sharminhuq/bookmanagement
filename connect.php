<?php
$name = $POST['name'];
$publisher = $POST['publisherName'];
$age = $POST['age'];
$Date = $POST['date'];
$page = $POST['page'];



$conn = new mysqli('localhost','root','','snigdha');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into snigdha(Name, Publisher name, Age,Date,Page,Book Type) value(?,?,?,?,?,?)");
$stmt->bind_param("sssssi",$name, $publisher, $age, $Date, $page);
$stmt->execute();
echo "registration successfully...";
$stmt->close();
$conn->close;
}
?>


