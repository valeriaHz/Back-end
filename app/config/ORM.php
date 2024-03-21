<?php
namespace config;
use config\Conexion;
use Exception;
use PDO;
require_once realpath('.../../vendor/autoload.php');
class ORM{
    protected $tabla;
    protected $id_tabla;
    protected $atributos;
    private $contadorWhere;
    private $query = "";
    function __construct(){
        $this->atributos = $this->atributos_tabla();        
    }

    private function atributos_tabla(){
        $consulta = Conexion::obtener_conexion()->prepare("DESCRIBE $this->tabla");
        $consulta->execute();
        $campos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $atributos = [];
        foreach($campos as $campo){
            array_push($atributos,$campo['Field']);              
        }
        return $atributos;        
    }

    public function where($campo,$valor_campo = "",$tipo="AND"){
        try{
            $queryFinal = $this->query;
            if($valor_campo == ""){
                $this->query = "$queryFinal WHERE $campo ";
            }else{
                if($this->contadorWhere > 0){
                    $this->query = "$queryFinal".($tipo != "AND" ? "OR" : $tipo)." $campo = '$valor_campo'";
                }else{
                    $this->query = "$queryFinal WHERE $campo = '$valor_campo'";
                    $this->contadorWhere++;
                }
            }
            return $this;
            /* if($this->contadorWhere > 0){
                $this->query = "$queryFinal ".($tipo != "AND" ? 'OR' : $tipo)." $campo = '$valor_campo'";
            }else{
                $this->query = "$queryFinal WHERE $campo = '$valor_campo'";
            }
            $this->contadorWhere++;
            return $this; */
        }catch(Exception){
            echo("Se produjo un error");
        } 
    }  

    public function count(){
        try{
            $this->query = "SELECT COUNT(*) FROM $this->tabla";
            return $this;
        }catch(Exception){
            echo("Se produjo un error en el conteo ");
        }       
    }

    public function max($campo){
        try{
            $this->query = "SELECT MAX($campo)FROM $this->tabla";
            return $this;
        }catch(Exception){
            echo("Se produjo un error");
        }
    }

    public function min($campo){
        try{
            $this->query = "SELECT MIN($campo)FROM $this->tabla";
            return $this;
        }catch(Exception){
            echo("Se produjo un error");
        }
    }

    public function like($valor = ""){
        try{
            $queryFinal = $this->query; 
            if($valor != ""){
                $this->query = "$queryFinal LIKE '$valor'"; 
            }
            return $this;
        }catch(Exception){
            echo("Se produjo un error");
        } 
    }

    public function sum($seleccion = ['*']){
        try{
            $seleccion = implode(',',$seleccion);   
            $this->query = "SELECT SUM($seleccion) FROM $this->tabla";
            return   $this;
        }catch (\Exception) {
            return ["error"];
        }
    }

    public function avg($seleccion = ['*']){
        try{
            $seleccion = implode(',',$seleccion);   
            $this->query = "SELECT AVG($seleccion) FROM $this->tabla";
            return   $this;
        }catch(Exception){
            echo("Se produjo un error");
        }
    }

    public function limit($limit, $offset = 0){
        try{
            $queryFinal = $this->query;
            $this->query = "$queryFinal LIMIT $offset, $limit";
            return $this;
        }catch(Exception){
            echo("Se produjo un error al aplicar el límite");
        } 
    }

    public function all(){
        try{
            $queryFinal = $this->query;
            $consulta = Conexion::obtener_conexion()->prepare($queryFinal);
            if($consulta->execute()){
                $data = $consulta->fetchAll(PDO::FETCH_ASSOC);
            }else{
                $data = [];
            }    
            return $data; 
        }catch(Exception){
            echo("Se produjo un error");
        }        
    }

    public function first(){
        try{
            $queryFinal = $this->query;
            $consulta = Conexion::obtener_conexion()->prepare($queryFinal);
            if($consulta->execute()){
                $data = $consulta->fetch(PDO::FETCH_ASSOC);
            }else{
                $data = [];
            }    
            return $data; 
        }catch(Exception){
            echo("Se produjo un error");
        }       
    }

    public function get(){
        try{
            $queryFinal = $this->query;
            $consulta = Conexion::obtener_conexion()->prepare($queryFinal);
            return $consulta->execute();
        }catch(Exception){
            echo("Se produjo un error");
        }       
    }

    public function consulta($seleccion = ['*']){
        try{
            $seleccion = implode(',',$seleccion);
            $this->query = "SELECT $seleccion FROM $this->tabla";
            return  $this;
        }catch(Exception){
            echo("Se produjo un error");
        }
    }

    public function insercion($data){
        try{
            $temp = array();
            foreach($this->atributos as $valor){
                if($this->id_tabla != $valor){
                    array_push($temp, $valor);
                }
            }
            $datos_tabla = implode(",", $temp);
            $datos_values = ":" . implode(", :", $temp);
            $consulta = Conexion::obtener_conexion()->prepare("INSERT INTO $this->tabla ($datos_tabla) VALUES ($datos_values)");
            return $consulta->execute($data);
        }catch(Exception){
            echo("error al insertar datos");
        }
    }

    public function actualizar($datos){
        try{
            $query = [];
            foreach(array_keys($datos) as $key ){
                if($this->id_tabla != $key){
                    array_push($query,$key.'='."'$datos[$key]'");
                }
            }
            $query = implode(', ',$query);
            $this->query = "UPDATE $this->tabla SET $query";
            return $this;
        }catch(Exception){
            echo("Error al actualizar los datos");
        }
    }

    public function eliminar(){
        try{
            $this->query = "DELETE FROM $this->tabla";
            return $this;
        }catch(Exception){
            echo("No se pudo eliminar al usuario");
        }
    }
}
?>