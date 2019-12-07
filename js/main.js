// js document
//给轮播图加序号
window.onload=function(){
	var imglist=document.getElementsByClassName("galleryimg");
	for(var i=0;i<imglist.length;i++){
		imglist[i].name=i;
	}
}
function preimg(){
	var current=document.getElementsByClassName("active")[0];
	var imgList=document.getElementsByClassName("galleryimg");
	current.classList="galleryimg";
	imgList[parseInt(current.name)==0?imgList.length-1:(parseInt(current.name)-1)%5].classList="galleryimg active";
	console.log("preimg success");
}
function nextimg(){
	var current=document.getElementsByClassName("active")[0];
	var imgList=document.getElementsByClassName("galleryimg");
	current.className="galleryimg";
	imgList[(parseInt(current.name)+1)%5].classList="galleryimg active";
	console.log("toggle success");
}
function auto(){
	window.setInterval(nextimg(),1000);
}
