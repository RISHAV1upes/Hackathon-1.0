<?php
session_start();
include 'config.php';
$name=$_POST['name'];
$email=$_POST['email'];
$radioval=$_POST['selecttheme'];
$check=$_POST['otp'];

$que=mysql_query("SELECT * FROM teamdetails WHERE teamname='".$name."' AND emailid='".$email."'") or die("Could not execute query");
$cou=mysql_num_rows($que);
$value=mysql_fetch_array($que);
$theme=$value['theme'];
$ver=$value['otp'];
        $counter = mysql_query("SELECT counter FROM setcounter where theme='$radioval'");
        $row = mysql_fetch_array($counter);
        $num= ($row['counter']);
if($cou == 0)
{
	echo "<script>alert('Sorry. Wrong email-id or Team Name. Please try again ');window.location ='theme.php';</script>"; 
}
if ($ver!=$check) 
{
    echo "<script>alert('Incorrect Verification id');window.location='theme.php';</script>";
 }

if($theme=="" && $ver==$check)
{
    if($num!=0&& $cou!=0)
	  {
	    
        $s="UPDATE teamdetails set theme='$radioval' where teamname='$name'";
		$res=mysql_query($s);
		$num=$num-1;
		$upd="UPDATE setcounter set counter='$num' where theme='$radioval'";
		$up=mysql_query($upd);
		}
	else
      {
	  echo "<script>alert('This theme is no longer avialable.Please choose another theme.');window.location='theme.php';</script>";
	  }
 }
else
{
echo "<script>alert('You have already selected a theme.');window.location ='theme.php';</script>"; 
} 
if($cou!=0 && $res!=0)
{
echo "<script>alert('Your have successfully selected the theme.');window.location ='theme.php';</script>";
}
?>



