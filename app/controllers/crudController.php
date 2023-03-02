<?php

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
	// 	$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //     if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //         $data = [
    //             'name' => trim($_POST['name']),
    //             'last_name' => trim($_POST['last_name']),
	// 			'email'		=> $_POST['email'],

	// 			'name_err'=>'',
	// 			'last_name_err'=>'',
             
    //         ];

	// 		// validation
	// 		if(empty($data['name'])){
    //             $data['name_err'] = 'Enter your Name';
    //         }
    //         if(empty($data['last_name'])){
    //             $data['last_name_err'] = 'Enter your Lastname';
    //         }

	

    //     // validation
    //         if(empty($data['name_err']) && empty($data['last_name_err'])){
    //             if(parent::set_register_user($data)){
    //                 flash('post_message', 'data added');
    //             }else{
    //                 die('something went wrong');
    //             }
               
    //         }else{
	// 				parent::set_register_user($data);		
	// }


	// 		}else{
    //         $data = [
    //             'name' => (isset($_POST['name']) ? trim($_POST['name']) : ''),
    //             'last_name' =>  (isset($_POST['last_name'])? trim($_POST['last_name']) : '')
    //         ];

	// 				parent::set_register_user($data);		
	// }
		$data = array(
					'name' 		=> $_REQUEST['name'],
					'last_name' => $_REQUEST['last_name'],
					'email'		=> $_REQUEST['email']
					);		
					parent::set_register_user($data);		
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
