<!-- app todos los procesos del sistema cerebro
config todos los archivos de la base de datos configuraciones del framework  -->
<!-- modificadores de acceso, encapsulamiento volverlo privado, exclusiva de la clase, 
token llave encriptada con ciertos datos de acceso -->

<!-- isset funcion de php encargada de verificar si una variable esta inicializada o existe
self:: para poder acceder a variables estaticas
:: acceso rapido
die mata el proceso 
define cadena nombre de la constante una coma y el valor para declarar una constante en php-->




<?php 
    require_once realpath('../../vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable('../../');
    $dotenv->load();
    define('SERVER' , $_ENV['HOST']);
    define('USER' , $_ENV['USUARIO']);
    define('PASS' , $_ENV['PASS']);
    define('PORT' , $_ENV['PUERTO']);
    define('DB' , $_ENV['DB']);

    class Conexion{
        private static $conexion;

        public static function abrir_conexion(){
            if(!isset(self::$conexion)){
                try{
                    self::$conexion = new PDO('mysql:host=' .SERVER.';db='.DB, USER, PASS);
                    self::$conexion->exec('SET CHARACTER SET utf8');
                    return self::$conexion;
                }catch(PDOException $e){
                    echo "Error en la conexion: " .$e;
                    die();
                }
            }else{
                return self::$conexion;
            }
        }

        public static function obtener_conexion(){
            $conexion = self::abrir_conexion();
            return $conexion;
        }

        public static function cerrar_conexion(){
            self::$conexion = null;
        }
    }

    /* echo print_r(Conexion::obtener_conexion());
    echo print_r($_ENV); */

    class Crud{
        public static function consulta(){
            $consulta = Conexion::obtener_conexion()->prepare("SELECT * FROM usuarios");
            if($consulta->execute()){
                $data = $consulta->fetchAll(PDO::FETCH_ASSOC);
                echo print_r(($data));
                echo "consulta completada";
            }else{
                echo "Error de consulta";
            }
        }

        function insertar($data){
            $conexion = Conexion::obtener_conexion();
            $query = "INSERT INTO usuarios (nombre) VALUES (:nombre)";
            $stmt = $conexion -> prepare($query);
            $stmt->bindParam(":nombre", $data["nombre"]);
            $stmt->execute();
            return json_encode($stmt);
        }

        function actualizar($data){
            $conexion = Conexion::obtener_conexion();
            $query = "UPDATE usuarios SET nombre=:nombre where id=:id";
            $stmt = $conexion -> prepare($query);
            $stmt->bindParam(":id", $data['id']);
            $stmt->execute();
            return $stmt;
        }

        function eliminar($data){
            $conexion = Conexion::obtener_conexion();
            $query = "DELETE FROM usuarios where id=:id";
            $stmt = $conexion -> prepare($query);
            $stmt->bindParam(":id", $data['id']);
            $stmt->execute();
            return $stmt;
        }     
    }   

    Crud::consulta();

?>

<!-- blindParam -> blinda el parametro o variable -->

<!-- actualizar eliminar e insertar -->