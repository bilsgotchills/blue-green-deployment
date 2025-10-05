<?php
require 'vendor/autoload.php';

$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASS');
$s3Bucket = getenv('S3_BUCKET');

echo "<h1 style='color:blue;'>BLUE Environment — Version 1</h1>";

if (!$dbHost || !$dbName || !$dbUser || !$dbPass) {
    echo "<p><strong>DB environment variables not set!</strong></p>";
    exit;
}

try {
    $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>✅ Connected to database: <strong>{$dbName}</strong></p>";

    $stmt = $pdo->query("SHOW TABLES");
    echo "<p>Tables:</p><ul>";
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo "<li>{$row[0]}</li>";
    }
    echo "</ul>";

} catch (PDOException $e) {
    echo "<p>❌ DB connection failed: " . $e->getMessage() . "</p>";
}
?>

<hr>
<h2>Upload a File to S3</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" required>
  <button type="submit">Upload</button>
</form>
