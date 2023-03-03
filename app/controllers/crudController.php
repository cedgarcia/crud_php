<?php

// // require_once('Validator.php');
require_once('app/model/Crud.php');
require_once('app/libs/Validation.php');
require_once('app/libs/Sanitize.php');


class crudController extends controller{

	public function __construct()
    {
        // if(!isLoggedIn()){
        //     redirect('users/login');
        // }
        //new model instance
        $this->crudModel = $this->model('Crud');
        // $this->userModel = $this->model('User');
    }

  

	// function __construct()
	// {
	// 	// $this->args = $_REQUEST;
	// 	// $this->validate = $this->libs('validation');
	// 	$this->Model = $this->Model('Crud');
	// }
	function index(){
	
		require_once('app/views/header.php');
		require_once('app/views/index/index.php');
		require_once('app/views/index/modals.php');
		require_once('app/views/footer.php');
		
	}

	function table_users(){
		$allData = $this->crudModel->view_users();
        $data = [
            'allData' => $allData
        ];

		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Options</th>
				</tr>
			</thead>
			<tbody >		
		<?php // foreach (parent::get_view_users()	as $data) {?>
			<?php foreach ($data['allData'] as $data) { ?>


		<tr>
			<td><?php echo $data->id_user; ?> </td>
			<td><?php echo $data->name_user; ?> </td>
			<td><?php echo $data->last_name_user; ?> </td>
			<td><?php echo $data->email_user; ?> </td>
			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			   Select <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->id_user; ?>','<?php echo $data->name_user; ?>','<?php echo $data->last_name_user; ?>','<?php echo $data->email_user; ?> ');">Update</a></li>
			      <li><a href="#" onclick="deleteUser('<?php echo $data->id_user; ?>');">Delete</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function deleteuser(){		
			parent::set_delete_user($_REQUEST['id']);		
    }


	
	function registeruser(){
	
		$allData = $this->crudModel->view_users();
        $data = [
            'allData' => $allData
        ];

		$data = array(
			'name' 		=> $_REQUEST['name'],
			'last_name' => $_REQUEST['last_name'],
			'email'		=> $_REQUEST['email']
			);		

		$sanitizedData = Validation::sanitizeAndValidate($data);
		if (!$sanitizedData) {
			echo 'Invalid data.';
		} else {
			$this->set_register_user($sanitizedData);
			// $this->crudModel->register_users($sanitizedData);	
		}
    }    



	function updateuser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'name' 		=> $_REQUEST['name'],
					'last_name' => $_REQUEST['last_name'],
					'email'		=> $_REQUEST['email']
					);		
			parent::set_update_user($data);		
	}    
    
}
