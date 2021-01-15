<?php
$connect = mysqli_connect("localhost","root","","purv");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL:-". mysqli_connect_error();
}

if(isset($_POST['submit']))
{
$usn=$_POST['usn'];
$name=$_POST['name'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$s="insert into stud values('$usn','$name','$email',$mob)";
$ins=mysqli_query($connect,$s);

if($ins)
{
echo "
<script>
alert('Inserted Successfully');
</script>
";
}
else
{
echo mysqli_error($connect);
echo "
<script>
alert('Error in insertion');
</script>
";
}
}
?>
