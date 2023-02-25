function rezervisi() {
	var rezSed=parseInt(document.getElementById("sediste").value);
	document.getElementById(""+rezSed).style.color="red";
}
function uformu(x){
	document.getElementById("sediste").value=x;
}