"use strict";

function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : String(i); }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var Main = /*#__PURE__*/function () {
  function Main(nombre, apellido, edad, estatura) {
    _classCallCheck(this, Main);
    this.nombre = nombre;
    this.apellido = apellido;
    this.edad = edad;
    this.estatura = estatura;
  }
  _createClass(Main, [{
    key: "mostrarDatos",
    value: function mostrarDatos() {
      console.info("\n            NOMBRE: ".concat(this.nombre, ",\n            APELLIDO: ").concat(this.apellido, ",\n            EDAD: ").concat(this.edad, ",\n            ESTATURA: ").concat(this.estatura, "\n        "));
    }
  }, {
    key: "actualizarDatos",
    value: function actualizarDatos() {
      var nombre = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : this.nombre;
      var apellido = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.apellido;
      var edad = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : this.edad;
      var estatura = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : this.estatura;
      this.nombre = nombre;
      this.apellido = apellido;
      this.edad = edad;
      this.estatura = estatura;
      this.mostrarDatos();
    }
  }, {
    key: "setNombre",
    value: function setNombre(nombre) {
      if (/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s-]+$/.test(nombre)) {
        this.nombre = nombre;
      } else {
        console.error("Nombre no válido. Debe contener solo letras.");
      }
    }
  }, {
    key: "setApellido",
    value: function setApellido(apellido) {
      if (/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s-]+$/.test(apellido)) {
        this.apellido = apellido;
      } else {
        console.error("Apellido no válido. Debe contener solo letras.");
      }
    }
  }, {
    key: "setEdad",
    value: function setEdad(edad) {
      if (/^[0-9]+$/.test(edad) && parseInt(edad) > 0) {
        this.edad = parseInt(edad);
      } else {
        console.error("Edad no válida. Debe ser un número entero positivo.");
      }
    }
  }, {
    key: "setEstatura",
    value: function setEstatura(estatura) {
      if (/^[0-9]+(\.[0-9]+)?$/.test(estatura)) {
        this.estatura = parseFloat(estatura);
      } else {
        console.error("Estatura no válida. Debe ser un número.");
      }
    }
  }, {
    key: "getNombre",
    value: function getNombre() {
      return this.nombre;
    }
  }, {
    key: "getApellido",
    value: function getApellido() {
      return this.apellido;
    }
  }, {
    key: "getEdad",
    value: function getEdad() {
      return this.edad;
    }
  }, {
    key: "getEstatura",
    value: function getEstatura() {
      return this.estatura;
    }
  }]);
  return Main;
}();
var persona1 = new Main("Valeria", "Aguilar", 23, 168);
var persona2 = new Main("Sarahi", "Hernandez", 23, 168);
persona2.setNombre("Fatima");
persona2.setEdad("18");
persona2.setEstatura("175");
console.log(persona2.getNombre());
console.log(persona2.getApellido());
console.log(persona2.getEdad());
console.log(persona2.getEstatura());

//variable donde se guarda el objeto -> persona1 
//= -> es asignación 
//new -> nuevo espacio de memoria 
//Main-> nombre de la clase con los () se vuelve metodo o función -> metodo que se llama igual a la clase principal

//constructor -> primera funcion porimer metodo que se inicializa al mandar a traer una clase
// inicializa las propiedades de una clase
//propiedades variables dentro de una clase