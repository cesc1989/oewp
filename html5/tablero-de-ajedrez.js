//con esta funcion obtengo el lienzo del elemento canvas para poder dibujar en el
function cargaContextoCanvas(idCanvas){
	
	var elemento=document.getElementById(idCanvas);
	if(elemento && elemento.getContext){
		var contexto=elemento.getContext('2d');
		if(contexto){
			return contexto;
		}
	}
	return FALSE;
}

//una vez cargada toda la pagina procedo a llamar la funcion para obtener el lienzo y dibujar en el
window.onload=function(){
	
	var contexto=cargaContextoCanvas('micanvas');
	if(contexto){
		var x=0;
		var y=0;
		var i2=0;
		var alternaColor="no";
		
		for(var i=0;i<=7;i++){
			while(i2<=7 && x<=400){
				//alternar los colores en cada linea de cuadros
				if(alternaColor=="no"){
					if(i2%2==0){
						contexto.fillStyle="#fff";
					}else{
						contexto.fillStyle="#000";
					}
				}else{
					if(i2%2!=0){
						contexto.fillStyle="#fff";
					}else{
						contexto.fillStyle="#000";
					}
				}
				//crea el cuadro y el contorno del mismo
				contexto.fillRect(x,y,50,50);
				contexto.strokeRect(x,y,50,50);
				x+=50;
				i2++;
			}
			//con la variable alternaColor controlo que se alternen los colores de los cuadros del tablero.
			if(alternaColor=="no"){
				alternaColor="si";
			}else{
				alternaColor="no";
			}
			//inicializo las variables para que repitan la linea de cuadros
			i2=0;
			x=0;
			//aumento el eje y solo 1 vez por linea de cuadros horizontales
			y+=50;
		}
	}
}