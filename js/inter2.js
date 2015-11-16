	var sumafa=0
	var sumaaci=0
	var res=0
	var nota=0
	var acireal=0
	var toaci=0
	var tofa=0
    function resbien(form,res)
{
		sumaaci=sumaaci+1;
		toaci=toaci+1;
		form.value=toaci;	
		return true
    }

    function resmal(form,res)
{
		sumafa=sumafa+1;
		tofa=tofa+1;
		form.value=tofa;
		return true
    }
    function averiguarNota(nota2){
		res=sumaaci+sumafa
		res=res/10
		acireal=sumaaci-(sumafa/2)
		nota=acireal/res
		nota=nota.toPrecision(3);
		if (nota <=0)
		{
		nota=0
    		}

		if (res <=0)
		{
		alert("Puedes empezar este ejercicio.   ¡Suerte!")
    		}
    		else
		if (nota >=9)
		{
		alert("Has tenido  "+sumaaci+"  aciertos  y  "+sumafa+"   errores. Muy Bien. Magnífico \n \nLa nota es de  "+nota+"  puntos. SOBRESALIENTE  ")
    		}
    		else
    		if (nota >=7)
    		{
		alert("Has tenido  "+sumaaci+"  aciertos  y   "+sumafa+"  errores. Puedes mejorar. \n \nLa nota es de  "+nota+"  puntos. NOTABLE  ")    		
		}
            else            
            if (nota >=6)
    		{
		alert("Has tenido  "+sumaaci+"  aciertos  y   "+sumafa+"  errores. Debes mejorar bastante. \n \nLa nota es de  "+nota+"  puntos. BIEN  ")    		
		}
		else
            if (nota >=5)
    		{
		alert("Has tenido  "+sumaaci+"  aciertos  y   "+sumafa+"  errores. Has de esforzarte más. \n \nLa nota es de  "+nota+"  puntos. SUFICIENTE  ")    		
		}
		else
            if (nota >=3)
    		{
		alert("Has tenido  "+sumaaci+"  aciertos  y   "+sumafa+"  errores. Debes repetir el ejercicio. \n \nLa nota es de  "+nota+"  puntos. INSUFICIENTE  ")    		
		}
		else
		{
		alert("Has tenido  "+sumaaci+"  aciertos  y   "+sumafa+"   errores. Debes poner más interés. \n \nLa nota es de  "+nota+"  puntos. MUY DEFICIENTE  ")
		}
		sumaaci=0
		sumafa=0
		}
