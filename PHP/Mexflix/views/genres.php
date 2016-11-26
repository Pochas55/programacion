<?php 
$genres = new GenresView();

if ( $_SESSION['role'] && $_GET && !$_POST ) {
	$genres->get();
} else if ( $_SESSION['role'] == 'Admin' ) {
	switch ( $_POST['r'] ) {
		case 'add-form':
			$genres->add_form();
			break;
		case 'add-crud':
			$new_genre = array(
				'genre_id' => 0,
				'genre_name' => $_POST['genre_name']
			);
			$genres->set( $new_genre );
			break;
		case 'edit-form':
			$genres->edit_form( $_POST['genre_id'] );
			break;
		case 'edit-crud':
			$save_genre = array(
				'genre_id' => $_POST['genre_id'],
				'genre_name' => $_POST['genre_name']
			);
			$genres->set( $save_genre );
			break;
		case 'delete-form':
			$genres->del_form( $_POST['genre_id'] );
			break;
		case 'delete-crud':
			$genres->del( $_POST['genre_id'] );
			break;
		default:
			RouterController::app_unauthorized();
			break;
	}
} else {
	RouterController::app_unauthorized();
}