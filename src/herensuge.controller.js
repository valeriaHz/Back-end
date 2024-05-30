class HerensugeBeltza {
    constructor(url, data, method) {
        this.url = url;
        this.data = data;
        this.method = method;
    }

    consulta = async () => {
        try {
            const respuesta = await fetch(this.url, {
                method: this.method,
                body: this.data
            });
            const datos = await respuesta.json();
            datos.map(contenido => {
                console.log(contenido);
            });
        } catch (error) {
            console.log(`error de consulta :\n${error}`);
        }
    }

    insercion() {
        fetch(this.url, {
            body: this.data,
            method: this.method
        })
            .then(respuesta => respuesta.json())
            .then(respuesta => {
                if (respuesta[0] == 1) {
                    respuesta[1].map((dato) => {
                        console.log(dato);
                    });
                } else {
                    console.log(respuesta[1]);
                }
            });
    }

    actualizar() {
        fetch(this.url, {
            body: this.data,
            method: this.method
        })
            .then(respuesta => respuesta.json())
            .then((respuesta) => {
                if (respuesta[0] == 1) {
                    alert("Datos actualizados correctamente")
                } else {
                    console.warn(respuesta[1]);
                }
            });
    }

    eliminar() {
        fetch(this.url, {
            body: this.data,
            method: this.method
        })
            .then(respuesta => respuesta.json())
            .then(respuesta => {
                if (respuesta[0] == 1) {
                    alert("datos eliminados correctamente");

                } else {
                    console.warn(respuesta[1]);
                }
            });
    }
}

function enviarDatos() {
    let datos = new FormData();
    datos.append('nombre', document.getElementById('nombre').value);
    datos.append('email', document.getElementById('email').value);
    datos.append('password', document.getElementById('password').value);

    let enviar = new HerensugeBeltza('http://backend.val', datos, 'POST');
    enviar.insercion();
}

class Interfaz{
    msj_error(msj){
        swal({
            title:`Error!`,
            text: msj,
            icon:`warning`,
            button: `Aceptar`,
        });
    }

    msj_exito(msj){
        swal({
            title:`Correcto!`,
            text: msj,
            icon:`success`,
            button: `Aceptar`,
        });
    }
}

const mis_input = ["nombre","email", "password"];

class Validacion extends Interfaz {
    static restriccion = {
        "vacios":{
            "expresion": /(?!(^$))/,
            "msj": "No puedes dejar vacio este campo"
        },
        "letras":{
            "expresion": /^([a-zA-Záéíóú]+[\s]?)/i,
            "msj": "Solo puedes ingresar letras en el campo"
        },
        "numeros":{
            "expresion": /^([0-9])+$/,
            "msj": "Solo puedes ingresar letras en el campo"
        },
        "email":{
            "expresion": /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/,
            "msj": "El correo no es correcto"
        },
        "password":{
            "expresion": /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!\.\-_%*?&])([A-Za-z\d$@$\.\-_!%*?&]|[^ ]){8,15}$/,
            "msj": "La contraseña debe contener: \n -Minimo 8 caracteres\n -Maximo 15 caracteres\n -Al menos una letra mayuscula\n -Al menos una letra minuscula\n -Al menos un digito y un caracter especial\n -No puede llevar espacios en blanco"
        }
    };

    limpiar_cadena = (cadena, caracter_busqueda, caracter_remplazo) => {
        return cadena.replace(`${caracter_busqueda}`, `${caracter_remplazo}`);
    }

    validar_campo (input, tipo_validacion, mensaje = ""){
        let resultado = true;
        let error = "";
        let msj_final = "";
        const incorrecto = (nombre, msj) => {
            error = (error == "") ? nombre : error;
            msj_final = (msj_final == "") ? msj : msj_final;
            return false
        }
        if (Array.isArray(input)){
            if(Array.isArray(tipo_validacion)){
                tipo_validacion.map(validacion => {
                    let {expresion, msj} = Validacion.restriccion[validacion];
                    input.map(nombre => {
                        resultado = expresion.test(document.getElementsByName(`${nombre}`)
                        [0].value) ? resultado : incorrecto(document.querySelector('[for="'
                    +nombre+'"]').textContent, msj);
                    });
                });
            }else{
                const {expresion, msj} = Validacion.restriccion[tipo_validacion];
                input.map(nombre =>{
                    resultado = expresion.test(document.getElementsByName(`${nombre}`)[0].
                    value) ? resultado : incorrecto(document.querySelector('[for="'+nombre
                    +'"]').textContent, msj);
                });
            }
        }
        error =! "" ? this.msj_error(mensaje =! "" ? mensaje : `${msj_final} ${error}`) : error;
        return resultado;
    }

    caracter_mayus = (input)=>{
        document.getElementsByName(`${input}`)[0].addEventListener("input", ()=>{
            document.getElementsByName(`${input}`)[0].value = document.getElementsByName(`${input}`)[0].value.toUpperCase();
        });
    }

    caracter_minus = (input)=>{
        document.getElementsByName(`${input}`)[0].addEventListener("input", ()=>{
            document.getElementsByName(`${input}`)[0].value = document.getElementsByName(`${input}`)[0].value.toLowerCase();
        });
    }

    caracter_letras = (input) =>{
        document.getElementsByName(`${input}`)[0].addEventListener("input", ()=>{
            document.getElementsByName(`${input}`)[0].value = document.getElementsByName(`${input}`)[0].value.replace(/([^a-zA-Záéíóú\s])/i, '');
        });
    }

    caracter_varios = (input) =>{
        document.getElementsByName(`${input}`)[0].addEventListener("input", ()=>{
            document.getElementsByName(`${input}`)[0].value = document.getElementsByName(`${input}`)[0].value.replace(/([^A-Za-z0-9ñÑ])/g, '');
        });    
    }

    primer_mayuscula = (input) =>{
        document.getElementsByName(`${input}`)[0].addEventListener("input", ()=>{
            document.getElementsByName(`${input}`)[0].value = document.getElementsByName(`${input}`)[0].value.charAt(0).toUpperCase() +
            document.getElementsByName(`${input}`)[0].value.slice(1);
        });
    }

    limitar_valor = (input, inicio, fin, msj) =>{
        return document.getElementsByName(`${input}`)[0].value > inicio && document.
        getElementsByName(`${input}`)[0].value < fin ? true : this.msj_error(msj);
    }

    longitud_campo = (input,inicio,fin,msj) => {
        let campo = document.getElementsByName(`${input}`)[0].value;
        return campo.length > inicio && campo.length < fin ? true : this.msj_error(msj);
    }

    longitud_campo_exacta = (input,longitud,msj) => {
        let campo = document.getElementsByName(`${input}`)[0].value;
        return campo.length == longitud ? true : this.msj_error(msj);
    }
}




