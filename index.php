<?php

require_once('config/database.php');
require_once('controllers/controller.php');
require_once('models/model.php');
require_once('views/view.php');

require_once('controllers/StudentController.php');
require_once('controllers/StudentView.php');

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'default';
echo $controller;

?>