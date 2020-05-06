<?php 
    require_once "../../complement/connection.php";
    class Crud{
        private $con;
        public function __construct(){
            $this->con=new Connection();
        }
        public function delete($table, $campo, $id){
            $sql="DELETE FROM {$table} WHERE {$campo}={$id}";
            $this->con->simpleQuery($sql);
            return $sql;
        }
        public function showCamp($camp,$table){
            $sql="SELECT {$camp} FROM {$table}";
            $resSql=$this->con->queryReturns($sql);

            while($list=mysqli_fetch_array($resSql)){
                $res[]=$list;
            }
            

            return $res;    
        }
    }
    $query="consulta=";
    $prueba=new Crud;
    $res=$prueba->showCamp('name_user','users');  
    $query.= $res[0][0]; 
    echo $query."<br>";
    print_r($res[0]['name_user']);
    // print_r($res['name_user']);

?>