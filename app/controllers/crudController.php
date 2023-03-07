<?php
require_once('app/core/controller.php');

require_once('app/model/Crud.php');
require_once('app/libs/Validation.php');
require_once('app/libs/Sanitize.php');

// require_once('SanitizationAndValidation.php');

// $sanitizer = new SanitizationAndValidation();

class crudController extends Controller {

	function index(){
	
		require_once('app/views/header.php');
		require_once('app/views/index/index.php');
		require_once('app/views/index/modals.php');
		require_once('app/views/footer.php');
		
	}

	function table_users(){
		$crud_table = $this->model('Crud');

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
		foreach (
			$c_table = $crud_table->view_users()
			// Crud::view_users()	
			as $data) {
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
		$crud_table = $this->model('Crud');
		$c_table = $crud_table->delete_user($_REQUEST['id']);
			// Crud::delete_user($_REQUEST['id']);
    }

	function registeruser(){
		$crud_table = $this->model('Crud');

			$data = array(
					'name' 		=> $_REQUEST['name'],
					'last_name' => $_REQUEST['last_name'],
					'email'		=> $_REQUEST['email']
					);		

		$sanitizedData = Validation::sanitizeAndValidate($data);
		if (!$sanitizedData) {
		} else {
			$c_table= $crud_table->register_users($sanitizedData);
						// Crud::register_users($sanitizedData);

	
		}
    }    
	function updateuser(){
		$crud_table = $this->model('Crud');

		$data = array(
					'id'		=> $_REQUEST['id'],
					'name' 		=> $_REQUEST['name'],
					'last_name' => $_REQUEST['last_name'],
					'email'		=> $_REQUEST['email']
					);		
			$c_table=$crud_table->update_user($data);	
						// Crud::update_user($data);
	
	}    
    
}
