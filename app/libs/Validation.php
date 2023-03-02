<?php

class Validation extends AppDirectory{
	function __construct(){
		$this->sanitize = $this->libs('Sanitization');
	}
	function email($email)
	{
		$clean_email = $this->sanitize->email($email);
		$response = (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 
					$clean_email : Response::output(4.2,$clean_email);
		return $response;
	}

    function name($name){

        
    }

}
    ?>