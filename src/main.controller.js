class Main{
    constructor(nombre, apellido, edad, estatura){
        this.nombre = nombre;
        this.apellido = apellido;
        this.edad = edad;
        this.estatura = estatura;
    }

    mostrarDatos(){
        console.info(`
            NOMBRE: ${this.nombre},
            APELLIDO: ${this.apellido},
            EDAD: ${this.edad},
            ESTATURA: ${this.estatura}
        `);
    }

    actualizarDatos(nombre = this.nombre, apellido = this.apellido, edad = this.edad, estatura = this.estatura){
        this.nombre = nombre;
        this.apellido = apellido;
        this.edad = edad;
        this.estatura = estatura;
        this.mostrarDatos();
    }

    setNombre(nombre){
        if(/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s-]+$/.test(nombre)){
            this.nombre = nombre;
        } else {
            console.error("Nombre no válido. Debe contener solo letras.");
        }
    }

    setApellido(apellido){
        if(/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s-]+$/.test(apellido)){
            this.apellido = apellido;
        } else {
            console.error("Apellido no válido. Debe contener solo letras.");
        }
    }

    setEdad(edad){
        if(/^[0-9]+$/.test(edad) && parseInt(edad) > 0){
            this.edad = parseInt(edad);
        } else {
            console.error("Edad no válida. Debe ser un número entero positivo.");
        }
    }

    setEstatura(estatura){
        if(/^[0-9]+(\.[0-9]+)?$/.test(estatura)){
            this.estatura = parseFloat(estatura);
        } else {
            console.error("Estatura no válida. Debe ser un número.");
        }
    }

    getNombre(){
        return this.nombre;
    }

    getApellido(){
        return this.apellido;
    }

    getEdad(){
        return this.edad;
    }

    getEstatura(){
        return this.estatura;
    }
}

let persona1 = new Main("Valeria", "Aguilar", 23, 168);
let persona2 = new Main("Sarahi", "Hernandez", 23, 168);

persona2.setNombre("Fatima");
persona2.setEdad("18");
persona2.setEstatura("175");

console.log(persona2.getNombre());
console.log(persona2.getApellido());
console.log(persona2.getEdad());
console.log(persona2.getEstatura());

