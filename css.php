<html>
<head>
<script type="text/javascript">
		
	function init(){

		var extText = window.frames.messageTxt.document.body.lastChild.lastChild.data;
		extText = extText.replace(/[\r\n]/g," ");
		document.forms[0].nMessage.value = extText;
	}

	window.onload=init;

</script>
</head>
<body>

<a id="a1">Click me</a> 
<script> 
  if (location.hash.slice(1)) { 
    document.getElementById("a1").style.cssText = "color: " + location.hash.slice(1); 
  } 
</script> 


<img name='messageTxt' src='lineData.t' style='display:none'></img>
<form>
<textarea name='nMessage'></textarea>
</form>



</body>
</html>


