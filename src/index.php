<?php
require_once 'config/db.php';
$object = new Database();
$object->connect();
require_once 'core/App.php';
$app = new App();
