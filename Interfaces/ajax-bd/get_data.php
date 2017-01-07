<?php 
require_once('../../PHP/Mexflix/models/Model.php');
require_once('../../PHP/Mexflix/models/MoviesModel.php');
require_once('./data/MoviesView.php');

$movies = new MoviesView();

$id = isset( $_GET['id'] ) ? $_GET['id'] : '';

print $movies->get( $id );