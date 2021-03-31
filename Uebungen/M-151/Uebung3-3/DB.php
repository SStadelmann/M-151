<?php
class DB
{
    protected static $instance;
    
    protected $pdo;

    protected $isTransactionRunning = false;
    
    private function __construct()
    {
        $servername = "localhost";
        $username = "vmadmin";
        $password = "sml12345";
        $database = "northwind";

        $this->pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public static function get() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        
        return self::$instance;
    }

    public function startTransaction() {
        if($isTransactionRunning == false) {
        $this->pdo->exec("START TRANSACTION");
        $this->$isTransactionRunning = true;
        }
        else {
            throw new Exception("Bitte zuerst Transaction schliessen");
        }
    }

    public function commitTransaction() {
        if($isTransactionRunning == true) {
        $this->pdo->exec("COMMIT");
        $this->$isTransactionRunning = false;
    }
    else{
        throw new Exception("Bitte zuerst Transaction starten");
    }
    }

    public function rollbackTransaction() {
        if($isTransactionRunning == true) {
        $this->pdo->exec("ROLLBACK");
        $this->$isTransactionRunning = false;
        }
        else{
            throw new Exception("Bitte zuerst Transaction starten");
        }
    }

    public function query($sql, $params) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
    }

    public function select($sql, $params) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        
        return $stmt->fetchAll();
    }

    public function __destruct(){
        if(mysqli_close($this->$pdo))
        {
            echo "<br>Connection Terminated";
        } 
    }
}

?>