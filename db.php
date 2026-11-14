<?php
require_once __DIR__ . '/config.php';

$host     = env('DB_HOST', 'localhost');
$dbname   = env('DB_NAME', 'crown_asia');
$username = env('DB_USER', 'root');
$password = env('DB_PASS', '');

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Crown Asia DB Connection Error: " . $e->getMessage());
    if (env('APP_ENV') === 'development' || env('APP_DEBUG') === true) {
        die("Database connection failed: " . htmlspecialchars($e->getMessage()));
    } else {
        http_response_code(503);
        die("Service temporarily unavailable. Please try again shortly.");
    }
}
?>
