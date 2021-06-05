window.addEventListener("load", function() {

	var estadoPrimeraRespuesta = 0;

	var primeraRespuesta = document.querySelector('#resp0');

	primeraRespuesta.onmouseover = function () {
		primeraRespuesta.style.backgroundColor = 'green';
	}

	primeraRespuesta.onmouseout = function () {
		if (estadoPrimeraRespuesta == 0) {

			primeraRespuesta.style.backgroundColor = '#545b62';
		}
	}

	primeraRespuesta.onclick = function () {
		estadoPrimeraRespuesta++;
		if(estadoPrimeraRespuesta == 1) {
			primeraRespuesta.style.backgroundColor = 'green';
			segundaRespuesta.style.backgroundColor = '#545b62';
			estadoSegundaRespuesta = 0;
			terceraRespuesta.style.backgroundColor = '#545b62';
			estadoTerceraRespuesta = 0;
		}
		if(estadoPrimeraRespuesta == 2)  {

			primeraRespuesta.style.backgroundColor = '#545b62';
			estadoPrimeraRespuesta = 0;
		}
	}

	var estadoSegundaRespuesta = 0;

	var segundaRespuesta = document.querySelector('#resp1');

	segundaRespuesta.onmouseover = function () {
		segundaRespuesta.style.backgroundColor = 'green';
	}


	segundaRespuesta.onmouseout = function () {
		if (estadoSegundaRespuesta == 0) {

			segundaRespuesta.style.backgroundColor = '#545b62';
		}
	}

	segundaRespuesta.onclick = function () {
		estadoSegundaRespuesta++;
		if(estadoSegundaRespuesta == 1) {
			segundaRespuesta.style.backgroundColor = 'green';
			primeraRespuesta.style.backgroundColor = '#545b62';
			estadoPrimeraRespuesta = 0;
			terceraRespuesta.style.backgroundColor = '#545b62';
			estadoTerceraRespuesta = 0;
		}
		if(estadoSegundaRespuesta == 2)  {

			segundaRespuesta.style.backgroundColor = '#545b62';
			estadoSegundaRespuesta = 0;
		}
	}

	var estadoTerceraRespuesta = 0;

	var terceraRespuesta = document.querySelector('#resp2');

	terceraRespuesta.onmouseover = function () {
		terceraRespuesta.style.backgroundColor = 'green';
	}


	terceraRespuesta.onmouseout = function () {
		if (estadoTerceraRespuesta == 0) {

			terceraRespuesta.style.backgroundColor = '#545b62';
		}
	}

	terceraRespuesta.onclick = function () {
		estadoTerceraRespuesta++;
		if(estadoTerceraRespuesta == 1) {
			terceraRespuesta.style.backgroundColor = 'green';
			primeraRespuesta.style.backgroundColor = '#545b62';
			estadoPrimeraRespuesta = 0;
			segundaRespuesta.style.backgroundColor = '#545b62';
			estadoSegundaRespuesta = 0;
		}
		if(estadoTerceraRespuesta == 2)  {

			terceraRespuesta.style.backgroundColor = '#545b62';
			estadoTerceraRespuesta = 0;
		}
	}

}
)