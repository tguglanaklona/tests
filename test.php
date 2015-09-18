<html>
<head>
<script type="text/javascript">
	alert(6);
</script>
</head>
<body>

<?php
include('css.php');
echo '<script>alert(7);</script>';
return '<script>alert(7);</script>';
?>

<script type="text/javascript">
	alert(8);
</script>

<?php
$text=str_repeat("=", 22)."\n";
$fp=fopen("./lineData.t","a");
fputs($fp,$text);
fclose($fp);
?>

</body>
</html>


