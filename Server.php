
<?php
// abstract  protected function logion ($username, $password);




include'Main_Server.php';
include 'Cliente.php';

class Server extends Main_Server {
    private $cliente;
    function __construct() {
        $this->cliente = new  Cliente();
    }

    
    public function login($user, $pass) {
         $exists = $this->cliente->validate($user, $pass);
        if ($exists) {
            echo 'Bienvenido'.$user.'<br/>';
            $exito= true;
            return $exito;
        }else{
            echo 'El usuario no estÃ¡ registrado';
            $exito= false;
            return $exito;
        }
        
       
    }

    public function error() {
        
    }

    public function mensaje() {
        
    }

}











