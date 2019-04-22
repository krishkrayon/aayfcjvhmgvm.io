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
	 <input type="int" placeholder="Withdrawal" name="withdrawal"><br> 
	<input type="int" placeholder="Deposit" name="deposit"><br> 

	  

<input type="submit" name="submit" value="Transaction submit"><br>
</form>
<form action="/frontpage.php" method="POST">
  <input type="submit" value="HOME">
</form>



<?php
$d=$_POST['accno'];
$e=$_POST['withdrawal'];
$f=$_POST['deposit'];
$query = "SELECT * from custbalance where accnum = $d "; 
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_row($result);
//print "<pre>";
//print_r($row[2]);
//print "<pre>";
//<?php $sql = 'INSERT INTO custbalance '.'(accnum,username,balance,acctype) '.'VALUES ('.$d.',"'.$c.'",'.$e.',"'.$f.'")';    //'.$a.'-->
$g=$row[2]+$f-$e;
if ($g<500) {
    die('No min balance');
} else {
    echo "Possible";
}
$sql= "UPDATE custbalance SET balance = $g  WHERE accnum = $d ";
if ($link->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $link->error;
}
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
</html><html>
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
	 <input type="int" placeholder="Withdrawal" name="withdrawal"><br> 
	<input type="int" placeholder="Deposit" name="deposit"><br> 

	  

<input type="submit" name="submit" value="Transaction submit"><br>
</form>
<form action="/frontpage.php" method="POST">
  <input type="submit" value="HOME">
</form>



<?php
$d=$_POST['accno'];
$e=$_POST['withdrawal'];
$f=$_POST['deposit'];
$query = "SELECT * from custbalance where accnum = $d "; 
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_row($result);
//print "<pre>";
//print_r($row[2]);
//print "<pre>";
//<?php $sql = 'INSERT INTO custbalance '.'(accnum,username,balance,acctype) '.'VALUES ('.$d.',"'.$c.'",'.$e.',"'.$f.'")';    //'.$a.'-->
$g=$row[2]+$f-$e;
if ($g<500) {
    die('No min balance');
} else {
    echo "Possible";
}
$sql= "UPDATE custbalance SET balance = $g  WHERE accnum = $d ";
if ($link->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $link->error;
}
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
