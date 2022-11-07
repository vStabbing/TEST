if(document.addEventListener){
	document.addEventListener("DOMContentLoaded", function(){
		loaded();
	});
} else if(document.attachEvent){
	document.attachEvent("onreadystatechange", function(){
		loaded();
	});
}

function loaded(){

	setInterval(loop, 350);

}

var x = 0;

var titleText = [ "% toggled.live", "% toggled.liv", "% toggled.li", "% toggled.l", "% toggled.", "% toggled", "% toggle", "% toggl", "% togg ", "% tog", "% to", "% t", "% to", "% tog", "% togg", "% toggl", "% toggled", "% toggled.", "% toggled.l", "% toggled.li ", "% toggled.liv", "% toggled.live"];

function loop(){

	document.getElementsByTagName("title")[0].innerHTML = titleText[x++%titleText.length];

}
