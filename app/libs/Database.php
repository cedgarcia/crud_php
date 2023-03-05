

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
// Change protected to public to test
// $dbConnect = new Database(); 
// $db = $dbConnect->connect();


//   /*
//    * PDO Database Class
//    * Connect to database
//    * Create prepared statements
//    * Bind values
//    * Return rows and results
//    */
//   class Database {
//     private $host = DB_HOST;
//     private $user = DB_USER;
//     private $pass = DB_PASS;
//     private $dbname = DB_NAME;

//     private $dbh;
//     private $stmt;
//     private $error;

//     public function __construct(){
//       // Set DSN
//       $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
//       $options = array(
//         PDO::ATTR_PERSISTENT => true,
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//       );

//       // Create PDO instance
//       try{
//         $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
//       } catch(PDOException $e){
//         $this->error = $e->getMessage();
//         echo $this->error;
//       }
//     }

//     // Prepare statement with query
//     public function query($sql){
//       $this->stmt = $this->dbh->prepare($sql);
//     }

//     // Bind values
//     public function bind($param, $value, $type = null){
//       if(is_null($type)){
//         switch(true){
//           case is_int($value):
//             $type = PDO::PARAM_INT;
//             break;
//           case is_bool($value):
//             $type = PDO::PARAM_BOOL;
//             break;
//           case is_null($value):
//             $type = PDO::PARAM_NULL;
//             break;
//           default:
//             $type = PDO::PARAM_STR;
//         }
//       }

//       $this->stmt->bindValue($param, $value, $type);
//     }

//     // Execute the prepared statement
//     public function execute(){
//       return $this->stmt->execute();
//     }

//     // Get result set as array of objects
//     public function resultSet(){
//       $this->execute();
//       return $this->stmt->fetchAll(PDO::FETCH_OBJ);
//     }

//     // Get single record as object
//     public function single(){
//       $this->execute();
//       return $this->stmt->fetch(PDO::FETCH_OBJ);
//     }

//     // Get row count
//     public function rowCount(){
//       return $this->stmt->rowCount();
//     }
//   }
