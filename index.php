<?php
require_once('config.php');
session_start();

if (isset($_GET['controller']) && isset($_SESSION['username'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index.php';
    }
} else {
    $controller = 'pages';
    $action = 'login';
}
require_once('route.php');

