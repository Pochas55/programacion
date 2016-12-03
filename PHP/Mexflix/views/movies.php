<?php 
$movies = new MoviesView();

if ( $_SESSION['role'] && $_GET && !$_POST ) {
	$movies->get();
} else if ( $_SESSION['role'] && $_GET && $_POST['r'] == 'show-record' ) {
	$movies->get( $_POST['imdb_id'] );
} else if ( $_SESSION['role'] == 'Admin' ) {
	switch ( $_POST['r'] ) {
		case 'add-form':
			$movies->add_form();
			break;
		case 'add-crud':
			$new_movie = array(
				array(
					'imdb_id' => $_POST['imdb_id'],
					'title' => $_POST['title'],
					'plot' => $_POST['plot'],
					'author' => $_POST['author'],
					'actors' => $_POST['actors'],
					'premiere' => $_POST['premiere'],
					'poster' => $_POST['poster'],
					'trailer' => $_POST['trailer'],
					'rating' => $_POST['rating'],
					'category' => $_POST['category'],
					'state' => $_POST['status']
				),
				$_POST['genres'],
				$_POST['countries']
			);

			$movies->set( $new_movie );
			break;
		case 'edit-form':
			$movies->edit_form( $_POST['imdb_id'] );
			break;
		case 'edit-crud':
			$save_movie = array(
				array(
					'imdb_id' => $_POST['imdb_id'],
					'title' => $_POST['title'],
					'plot' => $_POST['plot'],
					'author' => $_POST['author'],
					'actors' => $_POST['actors'],
					'premiere' => $_POST['premiere'],
					'poster' => $_POST['poster'],
					'trailer' => $_POST['trailer'],
					'rating' => $_POST['rating'],
					'category' => $_POST['category'],
					'state' => $_POST['status']
				),
				$_POST['genres'],
				$_POST['countries']
			);
			$movies->set( $save_movie );
			break;
		case 'delete-form':
			$movies->del_form( $_POST['imdb_id'] );
			break;
		case 'delete-crud':
			$movies->del( $_POST['imdb_id'] );
			break;
		default:
			RouterController::app_unauthorized();
			break;
	}
} else {
	RouterController::app_unauthorized();
}