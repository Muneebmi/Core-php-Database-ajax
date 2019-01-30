<?php
 $con=mysqli_connect("localhost","root","","sampledb");
 
$qry = "select * from student";

$res = mysqli_query($con,$qry);
echo "<table border = 1>";
echo "<th>Name</th><th>Address</th><th>Phone</th>";
while($row=mysqli_fetch_array($res)){
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['adr']."</td>";
echo "<td>".$row['phone']."</td>";
$id = $row['id'];
echo "<td><a href='edit.php?id=".$id."'>Edit</td>";
echo "<td><a href='dlt.php?id=".$id."'>Delete</td";

echo "</tr>";
echo "<select>
<option value='volvo'>District</option>
<option value='saab'>Saab</option>
<option value='Mercedes'>Mercedes</option>
<option value='audi'>Audi</option>
</select>";
}
echo "</table>";
echo "<a href='index.php'><input type = 'button' value='Home' ></a></td>";
 
?>
