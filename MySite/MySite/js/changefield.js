let div = document.querySelector("#changediv")

div.onmouseover = function(){
	
    this.firstElementChild.src="img/secondsize.jpg";
}

div.onmouseout = function(){
	
    this.firstElementChild.src="img/firstsize.jpg";
}
    