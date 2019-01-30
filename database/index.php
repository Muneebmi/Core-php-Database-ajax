<?php
 $con=mysqli_connect("localhost","root","","sampledb");
 /*if($con)
   { echo "ok"; }
 else
   { echo "not ok" ; }
*/
?>

<html>
<head>
<title> heloiiiii </title>
</head>

<body>
<form action=# method = "post">
<table>
 <tr>
 <td> Name : </td>
 <td> <input type = "text" name = "name"> </td>
 </tr>
 <tr>
 <td> Address : </td>
 <td> <input type = "text" name = "adr"> </td>
 </tr>

 <tr>
 <td> Phone: </td>
 <td> <input type = "text" name = "phone"> </td>
 </tr>

 <tr>
 <td></td>
 <td> <input type = "submit" name = "sub" ></td>
 </tr>


<tr>
 <td></td>
 <td></td>
 <td> <a href="view.php"><input type = "button" name = "sub2" value="view table" ></a></td>
 </tr>
</table>


</body>

</html>


<?php
/*
echo "name : ".$_POST['name']." address : ".$_POST['adr']." phone : ".$_POST['phone'];
*/
if(isset($_POST['sub']))
{
$a = $_POST['name'];
$b = $_POST['adr'];
$c = $_POST['phone'];

$qry = "insert into student(name, adr, phone) values ('$a','$b','$c')";

mysqli_query($con,$qry);

}
?>

