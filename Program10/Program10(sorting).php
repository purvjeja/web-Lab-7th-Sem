<?php
$connect = mysqli_connect("localhost","root","","purv");
$id=array();
$i=0;
$s="select * from stud";
$res=mysqli_query($connect, $s);

if(mysqli_num_rows($res)>0)
{
	echo "<h3>Before Sorting</h3>";
	while($row=mysqli_fetch_assoc($res))
	{
		$id[$i]=$row['USN'];
		echo $id[$i]."<br/>";
		$i++;

	}
	$id=sorting($id);
}
echo "<h3>After Sorting</h3>";
for($k=0;$k<count($id);$k++)
{
	echo $id[$k]."<br/>";
}

echo "<h3>Sorted Data</h3>";
echo "<table border='2'><th>USN</th><th>NAME</th><th>EMAIL</th><th>MOBILE</th>";
for($k=0;$k<count($id);$k++)
{
	$sq="select * from stud where USN='$id[$k]'";

	$result=mysqli_query($connect,$sq);
	if(mysqli_num_rows($result)>0)
	{
		if($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";

			echo "<td>".$row['USN']."</td>";
			echo "<td>".$row['NAME']."</td>";
			echo "<td>".$row['EMAIL']."</td>";
			echo "<td>".$row['MOB']."</td>";

			echo "</tr>";
		}
	}
}
echo "</table>";
function sorting($list)
{
$len=count($list);

$x=0;
$y=0;

for($y=0;$y<$len-1;$y++)
{
	$min=$y;
	for($x=$y+1; $x< $len;$x++)
	{
		if($list[$x]<$list[$min])
		{
			$min=$x;
		}
	}

if($min!=$y)
{
	$temp=$list[$y];
	$list[$y]=$list[$min];
	$list[$min]=$temp;
}
}
return $list;
}
?>
