<?php
    require_once "crud.php";
    class User{
        use Crud;
        public $id='DEFAULT';
        public $nameUser;
        public $email;
        private $passUser;
        private $con;
        public function __construct(){
            $this->con=new Connection();
        }
       
    }
    $kevin = new User();
    // $kevin->update('users','name_user','kevin gutierrez', 'id_user', 1);
    
    // $res=$kevin->showcamp(['name'=>'name_user'],'users');
    // print_r($res);

    $kevin->createNewRegister(['DEFAULT', 'kevin','kaksdlj@gmail.com','contraseña'],'users');  
?>