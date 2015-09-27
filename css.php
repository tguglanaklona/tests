<html>
<head>
</head>
<body>

<a id="a1">Click me</a> 
<script> 
  if (location.hash.slice(1)) { 
    document.getElementById("a1").style.cssText = "color: " + location.hash.slice(1); 
  } 
</script> 


<img name='messageTxt' src='lineData.t' style='display:none'></img>


</body>
</html>


