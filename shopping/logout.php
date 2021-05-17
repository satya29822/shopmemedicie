<?php
session_start();
include("includes/config.php");
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($con,"UPDATE userlog  SET logout = '$ldate' WHERE userEmail = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
session_unset();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="index.php";
</script>
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

	<title></title>
</head>
<body>

</body>
</html>