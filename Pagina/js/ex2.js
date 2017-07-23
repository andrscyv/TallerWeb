var tags = [];
min = 1000;
max = 3000;
function nuevoTag(){
	var res = "";
	tags[tags.length] = getRndInteger(min,max);
	document.getElementById('d1').innerHTML = imprimeTags();
}

function quitaTag(yo){
	tag = yo.parentNode.id;
	indice = tags.indexOf(Number(tag));
	console.log("busca"+tag+" y res : "+indice);
	tags.splice(indice,1);
	document.getElementById('d1').innerHTML = imprimeTags();
}
function imprimeTags(){
	var res ="";
	tam = tags.length;
	for (var i = 0; i < tam ; i++){
		res = res + "<div class ='tag' id='"+tags[i]+"'><input type ='button' value='X' onclick ='quitaTag(this)'><p>" + tags[i] 
		+ "</p></div>";
	}
	return res;
}
function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
}

