window.load = slide1();

var intervalo = 2000;

function slide1() {

	document.getElementById("imageBg").style.backgroundImage = "url('assets/js/banner1.jpg')";
	setTimeout("slide2()", intervalo);
	
}

function slide2() {

	document.getElementById("imageBg").style.backgroundImage = "url('assets/js/banner2.jpg')";
	setTimeout("slide3()", intervalo);
	
}

function slide3() {

	document.getElementById("imageBg").style.backgroundImage = "url('assets/js/banner3.jpg')";
	setTimeout("slide1()", intervalo);
	
}


//daqui para baixo é o funcionamento com botoes
//acima é o funciomento do slider automatico

