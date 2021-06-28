<<?php
//creating a connection with the database
$con = mysqli_connect("localhost", "root", "test" );

/// setting variables

$engine1 = $_POST['engine1']
$engine2 = $_POST['engine2']
$engine3 = $_POST['engine3']
$engine4 = $_POST['engine4']
$engine5 = $_POST['engine5']
$engine6 = $_POST['engine6']


/// command to insert data into data table

$sql = "INSERT INTO engines(engine 1, engine 2, engine 3, engine 4, engine 5, engine 6)
 VALUES ('$engine1', $engine2, $engine3, $engine4, $engine5, $engine6)" ;

 ///checking if data inserted

 if (!mysqli_query($con, $sql)) {

   echo " data is not saved ";

 } else {
   echo "data saved";
 }






 ?>
