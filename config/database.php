<?php
class DBController {
    private $servername = "localhost" ;
    private $username = "root" ;
    private $password = "" ;
    private $database ='ars';
    private $conn;

    function __construct(){
        
        $this->conn = $this->connectDB();
    }
    function connectDB(){
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database;charset=utf8mb4", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
        return $conn;
    }
    function runQuery($query){
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        foreach($stmt as $x){
            print_r(($x));
        }
    }
}
$x = new DBController();
$x->runQuery('select * from address');
        
?>
