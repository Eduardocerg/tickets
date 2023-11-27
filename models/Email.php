<?php
/* librerias necesarias para que el proyecto se  pueda enviar emails */
require '../include/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


/* llamada a las clases necesarias que se usaran en el envio del mail */
require_once("../config/conexion.php");
require_once("../Models/Ticket.php");

class Email extends PHPMailer{

    // variable que contiene el correo del destinatario
    protected $gCorreo = 'administrador@helpdesktickets.online'; 
    // variable que contiene el contraseña del destinatario
    protected $gContrasena = 'Administrador2023!';
    
    public function ticket_abierto($tick_id){
        $ticket = new Ticket ();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }

        //Igual
        $this->IsSMTP();
        $this->Host = 'smtp.hostinger.com';//Aquí el server
        $this->Port = 587;//Aquí el puerto
        $this->SMTPAuth = true;
        $this->SMTPSecure = 'tls';

        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->setFrom($this->gCorreo, "Ticket Abierto: ".$id);
        
        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->addAddress($_SESSION["usu_mail"]);
        $this->isHTML(true);
        $this->Subject = "Ticket Abierto ";
        //Igual
        $cuerpo = file_get_contents('../public/NuevoTicket.html'); /*Ruta del template en formato HTML*/
        /* Parametros del template a reemplazar */
        $cuerpo =  str_replace("xnroticket", $id, $cuerpo);
        $cuerpo =  str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo =  str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo =  str_replace("lblCate", $categoria, $cuerpo);

        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Abierto ");

        try{
            $this->send();
            return true;
        }catch(Exception $e){
            return false;
        }         
    }

    public function ticket_cerrado($tick_id){
        $ticket = new Ticket ();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }

        //Igual
        $this->IsSMTP();
        $this->Host = 'smtp.hostinger.com';//Aquí el server
        $this->Port = 587;//Aquí el puerto
        $this->SMTPAuth = true;
        $this->SMTPSecure = 'tls';

        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->setFrom($this->gCorreo, "Ticket Cerrado: ".$id);

        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->addAddress($_SESSION["usu_mail"]);
        $this->isHTML(true);
        $this->Subject = "Ticket Cerrado ";
        //Igual
        $cuerpo = file_get_contents('../public/CerradoTicket.html'); /*Ruta del template en formato HTML*/
        /* Parametros del template a reemplazar */
        $cuerpo =  str_replace("xnroticket", $id, $cuerpo);
        $cuerpo =  str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo =  str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo =  str_replace("lblCate", $categoria, $cuerpo);

        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Cerrado ");

        try{
            $this->send();
            return true;
        }catch(Exception $e){
            return false;
        }        
    }

    public function ticket_asignado($tick_id){
        $ticket = new Ticket ();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }

        //Igual
        $this->IsSMTP();
        $this->Host = 'smtp.hostinger.com';//Aquí el server
        $this->Port = 587;//Aquí el puerto
        $this->SMTPAuth = true;
        $this->SMTPSecure = 'tls';

        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->setFrom($this->gCorreo, "Ticket Asignado: ".$id);

        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->addAddress($_SESSION["usu_mail"]);
        $this->isHTML(true);
        $this->Subject = "Ticket Asignado ";
        //Igual
        $cuerpo = file_get_contents('../public/AsignarTicket.html'); /*Ruta del template en formato HTML*/
        /* Parametros del template a reemplazar */
        $cuerpo =  str_replace("xnroticket", $id, $cuerpo);
        $cuerpo =  str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo =  str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo =  str_replace("lblCate", $categoria, $cuerpo);

        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Asignado ");

        try{
            $this->send();
            return true;
        }catch(Exception $e){
            return false;
        }         
    }

}

?>