
<?php
 $con=mysqli_connect("localhost","root","","sampledb");
 
$qry = "delete from student where id = ".$_GET['id'];

$res = mysqli_query($con,$qry);

header("location: view.php");



?>