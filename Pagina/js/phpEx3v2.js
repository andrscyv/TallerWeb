var path = "../archivosUsuario/"
function contenido(elem){
	var folder = elem.className.split(" ")[1];
	var nombre = elem.innerHTML+"."+folder;
	var rutaCompleto = path+folder+"/"+nombre;
	var res="";
	//console.log(folder);
	switch (folder) {
				case 'pdf':
					res= "<iframe src='"+rutaCompleto+"'></iframe>";
					break;
				case 'jpg':
					res = "<img src='"+rutaCompleto+"'>";
					break;
				case 'm4a':
					res = "<audio controls><source src='"+rutaCompleto+"' type ='audio/x-m4a'></audio>";
					break;
				case 'docx':
					res = "<p>"+folder+"</p>";
					break;
			}
	document.getElementById('res').innerHTML=res;
	console.log(res);

}