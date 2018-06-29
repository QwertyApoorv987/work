<?php
$connect = mysqli_connect("localhost","root","","Redcross");
$select_query="INSERT INTO campinfo VALUES ('$_POST[name]', '$_POST[campcity]', '$_POST[campdate]', '$_POST[one]', '$_POST[two]', '$_POST[two]/$_POST[one]')";
mysqli_query($connect,$select_query);
?>