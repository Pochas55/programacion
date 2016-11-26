<?php 
$status = new StatusView();

if ( $_SESSION['role'] && $_GET && !$_POST  ) {
	$status->get();
}  else if ( $_SESSION['role'] == 'Admin' ) {
	switch ( $_POST['r'] ) {
		case 'add-form':
			$status->add_form();
			break;
		case 'add-crud':
			$new_status = array(
				'state_id' => 0,
				'state_name' => $_POST['state_name']
			);
			$status->set( $new_status );
			break;
		case 'edit-form':
			$status->edit_form( $_POST['state_id'] );
			break;
		case 'edit-crud':
			$save_status = array(
				'state_id' => $_POST['state_id'],
				'state_name' => $_POST['state_name']
			);
			$status->set( $save_status );
			break;
		case 'delete-form':
			$status->del_form( $_POST['state_id'] );
			break;
		case 'delete-crud':
			$status->del( $_POST['state_id'] );
			break;
		default:
			RouterController::app_unauthorized();
			break;
	}
} else {
	RouterController::app_unauthorized();
}
