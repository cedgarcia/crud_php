

<?php
class Database{	
    
    // private $host = "192-96-216-94.cprapid.com";
    // private $username = "cedic4c";
    // private $password = "(9*bf,Bd[S-,";
    // private $database = "cedic4c_crud-api-db";

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "crud-api-db";	

    protected function connect(){
		try {
			$connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
			$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo 'connected';
			return $connect;	
		} catch (Exception $e) {
			die('Error db(connect) '.$e->getMessage());
		}
	}
}

// // For testing
// // Change protected to public to test
// $dbConnect = new Database(); 
// $db = $dbConnect->connect();

