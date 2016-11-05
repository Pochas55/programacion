<?php 
require('StatusModel.php');

echo '<h1>CRUD de la Tabla Status</h1>';

$status = new StatusModel();

$status_data = $status->read();
var_dump($status_data);