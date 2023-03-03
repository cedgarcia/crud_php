<?php

class Crud
{
	private $db;
    public function __construct()
    {
        $this->db = new Database;
    }	
	
	
	public function view_users()
	{
	$this->db->query('SELECT * FROM users');
	$result = $this->db->resultSet();
	return $result;
	}

	
	
	public function register_users($data){

		// $this->db->query('INSERT INTO users (name_user,last_name_user,email_user) VALUES (:name_user, :last_name_user, :emai_user)');
		$this->db->query('INSERT INTO users (name_user,last_name_user,email_user) VALUES (?,?,?)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        
        //execute 
        // if($this->db->execute()){
        //     return true;
        // }else{
        //     return false;
        // }
		$this->db->execute(array(
										$data['name'],
										$data['last_name'],
										$data['email']
										)
								);	


		// try {
		// 	$SQL = 'INSERT INTO users (name_user,last_name_user,email_user) VALUES (?,?,?)';
		// 	$result = $this->connect()->prepare($SQL);
		// 	$result->execute(array(
		// 							$data['name'],
		// 							$data['last_name'],
		// 							$data['email']
		// 							)
		// 					);		
							
		// 				// $result =	$this->register_users($data);
		// 				} catch (Exception $e) {
		// 	die('Error Administrator(register_users) '.$e->getMessage());
		// } finally{
		// 	$result = null;
		// 	// $result = $this->register_users($data);
		// 	// rxeturn $result;
			
		// }
	}

	function set_register_user($data){
		$this->register_users($data);
	}
	
	private function update_user($data){
		try {
			$SQL = 'UPDATE users SET name_user = ?, last_name_user = ?, email_user = ? WHERE id_user = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['name'],
									$data['last_name'],
									$data['email'],
									$data['id']
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(update_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_update_user($data){
		$this->update_user($data);
	}

	private function delete_user($id){
		try {
			$SQL = 'DELETE FROM users WHERE id_user = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id));			
		} catch (Exception $e) {
			die('Error Administrator(delete_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_delete_user($id){
		$this->delete_user($id);
	}	
}
?>