const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input')

const expresiones = {

    usuario: /^(\w*\d+|\w*)(@)(gmail|yahoo|hotmail|outlook)(\.)(com\.co|com)$/, // validación correo
    contraseña: /[A-Z]{1}[A-Za-z0-9\W]{8,12} /  // validación contraseña

}

const campos = {
    usuario: false,
    password: false,
}


const validarFormulario = (e) => {

    switch (e.target.name) {

        case "usuario":

            validarCampo(expresiones.usuario, e.target, 'usuario');

        break;

        case "password":
        
            validarCampo(expresiones.contraseña, e.target, 'password');    

        break;

        
    }
}

// Función para validar formularios

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {

		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-circle-xmark');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-circle-check');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;

    } else {

		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-circle-xmark');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-circle-check');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
    }  
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);

});

formulario.addEventListener('submit', (e) => {
    e.preventDefault(); 

    if(campos.usuario && campos.password) {

        formulario.reset();

        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario__grupo-correcto');
        });

    } else {

        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
			document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
		}, 5000);
    }
});