import fs, { existsSync } from "fs";

/**console.log(process.argv.slice(2));
console.log("Ingresa algo: ");
process.argv ruta del archivo y carpeta donde se esta trabajando*/
//writeFile escribir archivo
// existsSync pregunta si hay o existe el archivo


class Herensuge {
    constructor() {
        this.tipoArchivo = {
            "controller": `<?php\n\tnamespace controller;\n\tuse model\\Usuarios;\n\tuse config\\Router;\n\tclass ${archivo}{}\n?>`,
            
            "model": `<?php
            namespace model;
            use config\\ORM;
            
            class Tabla${archivo} extends ORM{}\n?>`,

            "view": `<?php
            use config\\Router;
            use controller\\Login;
            ?>
            
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title></title>
            </head>
            <body>
            </body>
            </html>`
        }
    }

    comprobarRuta(ruta) {
        if (!fs.existsSync(`./app/controller/${ruta}`)) {
            fs.mkdir(`./app/controller/${ruta}`, error => {
                if (!error) {
                    console.log("Creación correcta!!!");
                } else {
                    console.log("Error al crear carpeta");
                }
            });
        } else if (!fs.existsSync(`./app/model/${ruta}`)) {
            fs.mkdir(`./app/model/${ruta}`, error => {
                if (!error) {
                    console.log("Creación correcta!!!");
                } else {
                    console.log("Error al crear carpeta");
                }
            });
        } else if (!fs.existsSync(`./view/${ruta}`)) {
            fs.mkdir(`./view/${ruta}`, error => {
                if (!error) {
                    console.log("Creación correcta!!!");
                } else {
                    console.log("Error al crear carpeta");
                }
            });
        }
    }
    crearArchivo([tipo, archivo, ruta = ""] = contenido) {
        this.comprobarRuta(ruta);
        fs.writeFile(`./app/controller/${ruta}/${archivo}.php`, this.
            tipoArchivo[tipo], error => {
                if (!error) {
                    console.log("Creación correcta!!!");
                } else {
                    console.log("Error al crear archivo");
                }
            }
        )
    }
}

let herensuge = new Herensuge();
let argumentos = process.argv.slice(2);
herensuge.crearArchivo(argumentos);