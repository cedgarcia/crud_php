<?php

require_once('app/model/Crud.php');
require_once('app/libs/Validation.php');
require_once('app/libs/Sanitize.php');


class crudController extends Crud{

	function index(){
	
		require_once('app/views/header.php');
		require_once('app/views/index/index.php');
		require_once('app/views/index/modals.php');
		require_once('app/views/footer.php');
		
	}

	function table_users(){

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
		<?php  
		foreach (parent::get_view_users()	as $data) {
			?>
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
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
					'name' 		=>trim($_POST['name']),
					'last_name' => trim($_POSIT['last_name']),
					// 'email'		=> $_REQUEST['email']
                // 'title' => trim($_POST['title']),
                // 'body' => trim($_POST['body']),
                // 'user_id' => $_SESSION['user_id'],
                // 'title_err' => '',
                'err' => '',
            ];
		
			if(empty($data['name'])){
                $data['err'] = 'Please enter post title';
            }
            if(empty($data['last_name'])){
                $data['err'] = 'Please enter the post content';
            }

		}
			else{

			}
			// $data = array(
			// 		'name' 		=> $_REQUEST['name'],
			// 		'last_name' => $_REQUEST['last_name'],
			// 		'email'		=> $_REQUEST['email']
			// 		);		

		$sanitizedData = Validation::sanitizeAndValidate($data);
		if (!$sanitizedData) {
        // flash('success_message', 'Your post have been added');
		} else {
			parent::set_register_user($sanitizedData);
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
