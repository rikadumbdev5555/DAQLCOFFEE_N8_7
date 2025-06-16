<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
        exit;
    } else {
        $error = "Sai tên đăng nhập hoặc mật khẩu!";
    }
}
?>

<h2>Đăng Nhập</h2>
<form method="POST">
  Tên đăng nhập: <input type="text" name="username" required><br>
  Mật khẩu: <input type="password" name="password" required><br>
  <button type="submit">Đăng Nhập</button>
</form>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
