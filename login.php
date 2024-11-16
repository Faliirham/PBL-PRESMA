<?php
session_start();
include 'config.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mendapatkan user berdasarkan username dengan role admin atau mahasiswa
    $sql = "SELECT u.idusername, u.role, a.Password AS admin_password, m.Password AS mahasiswa_password
            FROM username u
            LEFT JOIN Admin a ON u.Admin_idAdmin = a.idAdmin
            LEFT JOIN mahasiswa m ON u.mahasiswa_idMahasiswa = m.idMahasiswa
            WHERE u.username = ? AND (u.role = 1 OR u.role = 2)";
    $params = array($username);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

    if ($user) {
        // Cek password berdasarkan role
        if (
            ($user['role'] == 2 && $password === $user['admin_password']) ||
            ($user['role'] == 1 && $password === $user['mahasiswa_password'])
        ) {
            $_SESSION['user_id'] = $user['idusername'];
            $_SESSION['role'] = $user['role'];

            header('Location: index.php');
            exit();
        } else {
            echo "<script>alert('Password salah!'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Username atau role tidak valid!'); window.location.href='login.php';</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleLogin.css">
    <title>Login - Pencatatan Prestasi Mahasiswa</title>
</head>
<body>
    <div class="background">
        <div class="overlay">
            <div class="login-card">
                <div class="logo-container">
                    <img src="img/Logo.png" alt="Logo" class="logo">
                </div>
                <h2>LOGIN</h2>
                <p class="subtitle">PENCATATAN PRESTASI MAHASISWA</p>
                <form action="" method="post">
                    <input type="text" name="username" placeholder="USERNAME" required>
                    <input type="password" name="password" placeholder="PASSWORD" required>
                    <a href="#" class="forgot-password">Lupa Password ?</a>
                    <button type="submit">LOGIN</button>
                </form>
            </div>
        </div>
        <footer>
            <div class="footer-content">
                <p><strong>Informasi Kontak</strong>: support@polinema.ac.id | (+62) 341-404424</p>
                <p>Jl. Soekarno-Hatta No. 9 Malang 65141</p>
            </div>
        </footer>
    </div>
</body>
</html>
