<?php
class DBController {
    //create properties to be used for login to database
    private $servername = "localhost" ;
    private $username = "root" ;
    private $password = "" ;
    private $database ='ars';
    
    //pdo connection object container
    private $conn;

    function __construct(){
        
        $this->conn = $this->connectDB();
    }
    function connectDB(){
        try {
            //creating a PDO connection instance 
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
        $result = [];
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        //counting the number of rows return in the query
        $num = $stmt->rowCount();

        //if any rows returned do something
        if($num > 0){
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $result[] = $row;
            };
        }
        return json_encode($result);
    }
}
        
?>
