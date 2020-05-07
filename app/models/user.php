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
       public function log($mail,$pass) {
            $this->email=$mail;
            $this->passUser=$pass;
            $sql="SELECT name_user FROM users WHERE email='{$this->email}' AND password_user='{$this->passUser}'";
            $resSql=$this->con->queryReturns($sql);          
            $res=$resSql->fetch_assoc();
            $this->ValidateUserLog($res);
       }
       private function ValidateUserLog($user){
            if ($user) {
                echo "se encontro un usuario";
            }else{
                $sqlEamil=$sql="SELECT name_user FROM users WHERE email='{$this->email}'";
                $resSqlEmail=$this->con->queryReturns($sqlEamil);
                $resEmail=$resSqlEmail->fetch_assoc();
                if($resEmail){
                    echo "Tu contraseña y usuario no coinciden";
                }else{
                    echo "nO se encontro un usuario";
                }
                
            }
       }
    }
    $kevin = new User();
    // $kevin->update('users','name_user','kevin gutierrez', 'id_user', 1);
    
    // $res=$kevin->showcamp(['name'=>'name_user'],'users');
    // print_r($res);

    // $kevin->createNewRegister(['DEFAULT', 'kevin','kaksdlj@gmail.com','contraseña'],'users');
    $kevin->log('keivn@gmail.com','contraseña');
?>