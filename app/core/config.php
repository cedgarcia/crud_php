<?php
define('DATABASE_DRIVER', 'PDO');


// live database
if ($_SERVER['SERVER_NAME'] == "192-96-216-94.cprapid.com") {
    //devstaging
    define('DB_HOST', '192-96-216-94.cprapid.com');
    define('DB_NAME', 'cedic4c_ic4c');
    define('DB_USER', 'cedic4c');
    define('DB_PASS', '(9*bf,Bd[S-,');

//test database
} else if ($_SERVER['SERVER_NAME'] == 'localhost') {

    define('DB_HOST', 'localhost');
    define('DB_NAME', 'crud-api-db');
    define('DB_USER', 'root');
    define('DB_PASS', '');}

