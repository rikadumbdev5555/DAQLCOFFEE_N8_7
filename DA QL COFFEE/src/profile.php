<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);

    $stmt = $pdo->prepare("UPDATE users SET fullname = ?, email = ? WHERE id = ?");
    $stmt->execute([$fullname, $email, $user_id]);
    $message = "Cập nhật thành công!";
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();
?>

<h2>Hồ sơ cá nhân</h2>
<form method="POST">
  Họ tên: <input type="text" name="fullname" value="<?= htmlspecialchars($user['fullname'] ?? '') ?>"><br>
  Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>"><br>
  <button type="submit">Cập Nhật</button>
</form>
<?php if (isset($message)) echo "<p style='color:green;'>$message</p>"; ?>
