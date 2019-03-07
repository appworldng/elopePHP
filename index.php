<?php

require_once('config/database.php');
require_once('models/ElopeModel.php');
require_once('controllers/ElopeController.php');
require_once('views/ElopeView.php');

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
require_once('models/'.ucwords($controller).'Model.php');
require_once('views/'.ucwords($controller).'View.php');
require_once('controllers/'.ucwords($controller).'Controller.php');

?>