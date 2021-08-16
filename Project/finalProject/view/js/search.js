function getData(pForm){
	var xhttp =new XMLHttpRequest();
	xhttp.onload =function(){
		document.getElementById("result").innerHTML = this.responseText;
	}
	xhttp.open("GET",pForm.action + "?name=" + pForm.name.value,true);
	xhttp.send();

}