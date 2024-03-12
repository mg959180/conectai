<?php
require_once '../configs/env.php';
require_once '../configs/app.php';
if (isset($_GET['route'])) {
    $route_url = $_GET['route'];
    // Trim right slash
    $route_url = rtrim($route_url, '/');
    // Sanitize URL string
    $route_url = filter_var($route_url, FILTER_SANITIZE_URL);
} else {
    $route_url = '';
}
require_once APP_DIR . 'bootstrap.php';
