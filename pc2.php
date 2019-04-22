<html>
<body>
<title>hi</title>

<?php
$link = mysqli_connect("localhost", "b", "password", "acc");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Success: A proper connection to MySQL was made! The my_db database is great.";
$a=17;
$b="hidd";
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
#<form method ="post" action="<?php echo $_SERVER['PHP_SELF'];
?>

 <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<input type="int" placeholder="Acc no" name="accno"><br> 
	 <input type="text" placeholder="Name" name="name"><br> 
	<input type="int" placeholder="Balance" name="balance"><br> 

	  
<input type="char" placeholder="Acc type" name="type"><br>

<input type="submit" name="submit" value="Submit Form"><br>
</form>
<form action="/frontpage.php" method="POST">
  <input type="submit" value="HOME">
</form>

<?php
$c=$_POST['name'];
$d=$_POST['accno'];
$e=$_POST['balance'];
$f=$_POST['type'];
?>


<?php $sql = 'INSERT INTO custbalance '.'(accnum,username,balance,acctype) '.'VALUES ('.$d.',"'.$c.'",'.$e.',"'.$f.'")';    //'.$a.'
mysqli_select_db($link,"acc");
   $retval = mysqli_query($link ,$sql); 
        if(! $retval ) 
{
    //  die('Could not enter data: ' . mysqli_error($link));
die('Could not enter data: ');
   }
   
   echo "Entered data successfully\n"; ?>

<?php
mysqli_close($link);
?>

</body>
</html>
