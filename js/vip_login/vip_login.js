window.onload=function(){
//用户名
var rule1=/^1[3|4|5|7|8]\d{9}|[a-zA-Z0-9_]{3,16}$/;
var tel=document.getElementById('tel');
tel.onblur=function(){
	if(!rule1.test(tel.value)){
	document.getElementsByClassName('error')[0].innerHTML='请输入正确的手机号或用户名';
	
}else{
	document.getElementsByClassName('error')[0].innerHTML='';
}
}	
//密码
var rule2=/^[a-zA-Z]\w{5,17}$/;
var pwd=document.getElementById('pwd');
pwd.onblur=function(){
	if(!rule2.test(pwd.value)){
	document.getElementsByClassName('error')[0].innerHTML='请输入5至17位的密码';
	
}else{
	document.getElementsByClassName('error')[0].innerHTML='';
}
}






}