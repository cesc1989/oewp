$(function(){
	
	var letras=["a","b","c","d","e","f",0,1,2,3,4,5,6,7,8,9];
	
	$("div#cuadros div").each(function(i){
		//Este ciclo es para crear 6 diferentes caracteres para formar un color hexadecimal.
		for(var inc=1;inc<=6;inc++){
			//Estas variables a-f son para almacenar un valor aleatorio diferente
			var a=aleatoria(0,16);
			var c=aleatoria(0,16);
			var e=aleatoria(0,16);
			var b=aleatoria(0,16);
			var d=aleatoria(0,16);
			var f=aleatoria(0,16);
			//en el vector color almaceno los valores encontrados en la posicion determinada por las letras a-f que son aleatorios.
			var color=[letras[a],letras[b],letras[c],letras[d],letras[e],letras[f]];
			//en las variables esa-n guardo un valor del vector color para poderlo sacar y concatenarlo luego y hacer un color hexadecimal
			var esa=color[0];
			var esa1=color[1];
			var esa2=color[2];
			var esa3=color[3];
			var esa4=color[4];
			var esa5=color[5];
			//Invierto el orden de los vectores color y letras para crear variacion de colores
			color.reverse();
			letras.reverse();
			var colorentrada=esa+esa1+esa2+esa3+esa4+esa5;
			var colorsalida=esa5+esa2+esa4+esa+esa1+esa3;
		}
	
		$(this).mouseenter(function(evento){$(this).css("background-color","#"+colorentrada)});
		$(this).mouseleave(function(evento){$(this).css("background-color","#"+colorsalida)});
	});
	
	function aleatoria(infe,supe){
		numpo=supe-infe;
		var aleat=Math.random()*numpo;
		aleat=Math.floor(aleat);
		return aleat;
	}
});