<?php
// ロリポップ用の接続情報
$dsn = 'mysql:host=mysql325.phy.lolipop.lan;dbname=LAA1553906-todo;charset=utf8mb4';
$user = 'LAA1553906';
$password = 'Pass0813'; 

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
    exit;
}
?>

