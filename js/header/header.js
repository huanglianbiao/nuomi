var myli=document.getElementsByClassName('myul')[0].children[0];
console.log(myli);
var down=document.getElementById('menu_fl');
myli.onmousemove=function(){	
	down.style.display='block';
}
myli.onmouseout=function(){	
	down.style.display='none';
}	