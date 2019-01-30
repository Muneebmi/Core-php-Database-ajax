<?php
 $con=mysqli_connect("localhost","root","","sampledb");
 
$qry = "select * from student where id = ".$_GET['id'];

$res = mysqli_query($con,$qry);

while($row=mysqli_fetch_array($res))
{
    $id = $row['id'];

$name = $row['name'];
$adr = $row['adr'];
$phone = $row['phone'];

}



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
 <td> <input type = "text" name = "name" value = "<?php echo $name ?>"> </td>
 </tr>
 <tr>
 <td> Address : </td>
 <td> <input type = "text" name = "adr" value = "<?php echo $adr ?>"> </td>
 </tr>

 <tr>
 <td> Phone: </td>
 <td> <input type = "text" name = "phone" value = "<?php echo $phone ?>"> </td>
 </tr>

 <tr>
 <td></td>
 <td> <input type = "submit" name = "sub" Value="Change"></td>
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

$qry = "update student set name = '$a', adr = '$b', phone = '$c' where id = ".$_GET['id'];

mysqli_query($con,$qry);

header("location: view.php");
}


?>