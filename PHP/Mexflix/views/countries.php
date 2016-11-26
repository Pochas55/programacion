<?php 
$countries = new CountriesView();

if ( $_SESSION['role'] && $_GET && !$_POST  ) {
	$countries->get();
}  else if ( $_SESSION['role'] == 'Admin' ) {
	switch ( $_POST['r'] ) {
		case 'add-form':
			$countries->add_form();
			break;
		case 'add-crud':
			$new_countries = array(
				'country_id' => 0,
				'country_name' => $_POST['country_name']
			);
			$countries->set( $new_countries );
			break;
		case 'edit-form':
			$countries->edit_form( $_POST['country_id'] );
			break;
		case 'edit-crud':
			$save_countries = array(
				'country_id' => $_POST['country_id'],
				'country_name' => $_POST['country_name']
			);
			$countries->set( $save_countries );
			break;
		case 'delete-form':
			$countries->del_form( $_POST['country_id'] );
			break;
		case 'delete-crud':
			$countries->del( $_POST['country_id'] );
			break;
		default:
			RouterController::app_unauthorized();
			break;
	}
} else {
	RouterController::app_unauthorized();
}
