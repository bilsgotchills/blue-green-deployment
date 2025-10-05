<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$bucket = getenv('S3_BUCKET');
$region = getenv('AWS_REGION');

if (!isset($_FILES['fileToUpload'])) {
    die("No file selected.");
}

$file = $_FILES['fileToUpload']['tmp_name'];
$key = basename($_FILES['fileToUpload']['name']);

try {
    $s3 = new S3Client([
        'version' => 'latest',
        'region'  => $region
    ]);

    $result = $s3->putObject([
        'Bucket' => $bucket,
        'Key'    => $key,
        'SourceFile' => $file
    ]);

    echo "<p>✅ File uploaded successfully to S3 bucket <strong>{$bucket}</strong>.</p>";

} catch (AwsException $e) {
    echo "<p>❌ Upload failed: " . $e->getMessage() . "</p>";
}
?>
