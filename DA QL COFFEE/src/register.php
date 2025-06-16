<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Kiểm tra trùng tên
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->execute([$username]);

    if ($stmt->fetch()) {
        $error = "Tên người dùng đã tồn tại!";
    } else {
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $password]);
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    }
}
?>

<h2>Đăng Ký</h2>
<form method="POST">
  Tên đăng nhập: <input type="text" name="username" required><br>
  Mật khẩu: <input type="password" name="password" required><br>
  <button type="submit">Đăng Ký</button>
</form>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
