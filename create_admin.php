<?php

require_once "config/database.php";

$name = "Administrator";
$email = "admin@gmail.com";
$password = "admin123";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO admins (name, email, password)
        VALUES (:name, :email, :password)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    "name" => $name,
    "email" => $email,
    "password" => $passwordHash
]);

echo "Admin berhasil dibuat.<br>";
echo "Email: " . $email . "<br>";
echo "Password: " . $password;