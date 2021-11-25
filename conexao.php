<?php
$db = parse_url(getenv("DATABASE_URL"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["ec2-50-16-241-192.compute-1.amazonaws.com"],
    $db["5432"],
    $db["cktohxctskgqym"],
    $db["e53d0af2ea7c7688fec3909f104f64143b12e46a67d35a5e8a230c9236b36c74"],
    ltrim($db["path"], "/")
));

?>