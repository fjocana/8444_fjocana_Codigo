
function funcion(Formulario) {
	var input1 = Formulario.lado_1
	var input2 = Formulario.lado_2
	var input3 = Formulario.lado_3
	var input4 = Formulario.lado_4
	var TipoFigura = Formulario.tipo.value;
	 
	if(TipoFigura == "cuadrado"){
		input1.disabled = false;
		input2.disabled = true;
		input3.disabled = true;
		input4.disabled = true;
	}
	else{
		if(TipoFigura == "rectangulo"){
			input1.disabled = false;
			input2.disabled = false;
			input3.disabled = true;
			input4.disabled = true;
		}
		else{
			if(TipoFigura == "triangulo"){
				input1.disabled = false;
				input2.disabled = false;
				input3.disabled = false;
				input4.disabled = true;
			}
			else{
				if(TipoFigura == "sel"){
					input1.disabled = true;
					input2.disabled = true;
					input3.disabled = true;
					input4.disabled = true;}
				}
			}
		}
	}
