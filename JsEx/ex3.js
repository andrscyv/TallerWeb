var id = [];
var serial = 0;
var esPrimerAceptar = true;
function Idioma(id,nom,nivel){
	this.id = id;
	this.nom = nom;
	this.nivel = nivel;
}
function nuevoIdioma(elem){
	var nomId = elem.value;
	if(nomId != "sinSel"){
	if(!idiomaRepetido(nomId)){
		id[id.length] = new Idioma(serial,nomId);
		serial++;
	}
	document.getElementById('d1').innerHTML = imprimeIdiomas();
	//console.log(elem.value);
}
else
window.alert("Seleccione un idioma");
}

function imprimeIdiomas(){
	var res ="";
	tam = id.length;
	for (var i = 0; i < tam ; i++){
		res = res + "<div class ='divIdioma' id='"+id[i].id+"'>\n<input type ='button' value='X' onclick ='quitaIdioma(this)'><p>" 
			  + id[i].nom + "<br>Elija nivel:</p>\n<select onchange = 'elegirNiv(this)'>"+
			  "<option></option>"+
			  " <option value='Principiante'>Principiante</option>"+
			  " <option value='Intermedio'>Intermedio</option>"+
			  " <option value='Avanzado'>Avanzado</option></select></div>";
	}
	return res;
}
function idiomaRepetido(nom){
	var res = false;
	for(var i = 0; i < id.length; i++){
		if(id[i].nom == nom)
			res = true;
	}

	return res;
}
function findId(idDiv){
	var ind = -1;
	var i = 0;
	while( i < id.length && id[i].id != idDiv){
		i++;
	}
	if(id[i].id == idDiv)
		ind = i; 

	return ind;

}
function quitaIdioma(elem){
	ind = findId(elem.parentNode.id);
	console.log("busca : "+elem.parentNode.id+" res: "+ind);
	id.splice(ind,1);
	var div =document.getElementById(elem.parentNode.id);
	div.parentNode.removeChild(div);
}
function elegirNiv(elem){
	var idDiv = elem.parentNode.id;
	var ind = findId(idDiv);
	id[ind].nivel = elem.value;
	//console.log(id[ind]);
}
function muestraSel(){
	if(esPrimerAceptar){
		esPrimerAceptar = false;
	}
	else
		window.alert("Cambios realizados");
	var res = "";
	for(var i = 0; i < id.length ; i++){
		res = res + "Idioma: "+id[i].nom+" nivel: "+id[i].nivel+"<br>";
	}
	document.getElementById('d2').innerHTML = res;
}