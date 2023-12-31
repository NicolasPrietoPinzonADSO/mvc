<?php

/**
 * Controlador para el Login
 */
class LoginController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = $this->model("LoginModel");
    }

    public function iniciar()
    {
        $data = [
            "titulo"    => "Login",
            "subtitulo" => "Ingresar al sistema",
            "welcome"   => "Bienvenido al sistema",

        ];
        $this->view("loginView", $data);
    }
    public function welcome()
    {
        $data = [

            "welcome"   => "Bienvenido al sistema",

        ];
        $this->view("welcomePage", $data);
    }
    public function olvido()
    {
        $errorres = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recepción de los datos
            $email = $_POST['email'] ?? "";
            // Validación de los datos
            if ($email == "") {
                array_push($errorres, "El correo electronico es requerido");
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Validamos que el correo sea correcto
                array_push($errorres, "El correo electronico no es valido ");
            }
            //Proceso de los datos si el arreglo esta vacio
            if (empty($errorres)) {
                if ($this->model->validarEmail($email)) {
                    if ($this->model->enviarCorreo($email)) {
                        // Enviado
                    } else {
                        array_push($errorres, "El correo de recuperación no fue enviado correctamente.");
                    }
                    
                } else {
                    array_push($errorres, "Sus datos son erroneos");
                }
            }
            $data = [
                "titulo"    => "Olvido de contraseña",
                "subtitulo" => "¿Olvidaste tu contraseña?",
                "errores"   => $errorres,
                "datos"     => []
            ];
            $this->view("loginOlvidoView", $data);
        } else {
            $data = [
                "titulo"    => "Olvido de contraseña",
                "subtitulo" => "¿Olvidaste tu contraseña?",
                "errores"   => $errorres,
                "datos"     => []
            ];
            $this->view("loginOlvidoView", $data);
        }
    }
    public function header()
    {
        $errorres = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recepción de los datos
            $email = $_POST['email'] ?? "";
            // Validación de los datos
            if ($email == "") {
                array_push($errorres, "El correo electronico es requerido");
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Validamos que el correo sea correcto
                array_push($errorres, "El correo electronico no es valido ");
            }
            //Proceso de los datos si el arreglo esta vacio
            if (empty($errorres)) {
                if ($this->model->validarEmail($email)) {
                    if ($this->model->enviarCorreo($email)) {
                        // Enviado
                    } else {
                        array_push($errorres, "El correo de recuperación no fue enviado correctamente.");
                    }
                    
                } else {
                    array_push($errorres, "Sus datos son erroneos");
                }
            }
            $data = [
                "titulo"    => "Olvido de contraseña",
                "subtitulo" => "¿Olvidaste tu contraseña?",
                "errores"   => $errorres,
                "datos"     => []
            ];
            $this->view("LoginView", $data);
        } else {
            $data = [
                "titulo"    => "Olvido de contraseña",
                "subtitulo" => "¿Olvidaste tu contraseña?",
                "errores"   => $errorres,
                "datos"     => []
            ];
            $this->view("LoginView", $data);
        }
    }
}