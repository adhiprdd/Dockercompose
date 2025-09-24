<?php
$host = 'db';
$db   = 'myapp';
$user = 'appuser';
$pass = 'apppass';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
   $pdo = new PDO($dsn, $user, $pass);
   echo "✅ Connected to MySQL database successfully!";
} catch (PDOException $e) {
   echo "❌ Connection failed: " . $e->getMessage();
}
?>
