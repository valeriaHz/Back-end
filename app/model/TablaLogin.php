<?php 
    namespace model;
    use config\ORM;
    
    class TablaLogin extends ORM{
        protected $tabla = 't_usuarios';
        protected $id_tabla = 'id_usuario';
    }
?>