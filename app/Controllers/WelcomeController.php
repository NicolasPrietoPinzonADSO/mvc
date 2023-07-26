<?php
class WelcomeController extends Controller{

   

    public function iniciar()
    {
        $data = [
            "titulo"    => "Login",
            "subtitulo" => "Ingresar al sistema",
            "welcome"   => "Bienvenido al sistema",

        ];
        $this->view("welcomePage", $data);
    }
   
}