<?php
    session_start();
    
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                //Producción
                //$conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=helpdesk","nombreusuario","contraseñadeusuario");

                //Local
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=helpdesk","root","");
                return $conectar;
            } catch (Exception $e){
                print "¡Error DB: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public function ruta(){
            //Producción
            //En caso de querer subir a un dominio, agregar aquí la direcció y borrar la línea de localhost
            //return "http://dominio.com";

            //Local
            return "http://localhost/PERSONAL_HELPDESK/";
            
        }

    }
?>