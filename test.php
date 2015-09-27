<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="getXmlHttp.js"></script>
<script>
function loadjs() {
    (new Image()).src = "/tests/logjs.php?xml="+window.navigator.userAgent;
}
window.onload = loadjs();
</script>
</head>
<body>

<script>
var xmlhttp = getXmlHttp();
xmlhttp.open('GET', 'http://www.geographycollector.com', false); //'/tests/23913/index.html', false);
xmlhttp.send(null);
if(xmlhttp.status == 200) {
  alert(xmlhttp.responseText);
}
</script>

<?php
phpinfo();
//include('css.php');
//echo '<script>alert(7);</script>';
//return '<script>alert(7);</script>';
?>

<?php
/*$text=str_repeat("=", 22)."\n";
$fp=fopen("./lineData.t","a");
fputs($fp,$text);
fclose($fp);*/
?>

</body>
</html>


