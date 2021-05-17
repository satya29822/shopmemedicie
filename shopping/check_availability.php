<?php 
require_once("includes/config.php");
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	
		$result =mysqli_query($con,"SELECT  email FROM  users WHERE  email='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Email already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
<!DOCTYPE html>
<html>
<head><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150511820-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150511820-1');
</script>

	<title>check_availability</title>
</head>
<body>

</body>
</html></head>
