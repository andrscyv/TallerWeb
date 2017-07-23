
function piramide(){
var tam = document.getElementById("tam").value,cont = 1,aux = "",res = "";
Number(tam);
while(cont <= tam ){
	for (var i = 0; i < cont; i++) {
		aux = aux+"0";
	}
	cont++;
	aux ="<div>"+aux+"</div>\n";
	res=res+aux;
	aux ="";

}
document.getElementById("d1").innerHTML = res;
//console.log("holi");
}