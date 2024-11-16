<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT u.idusername, u.role, a.Password AS admin_password, m.Password AS mahasiswa_password
                FROM username u
                LEFT JOIN Admin a ON u.Admin_idAdmin = a.idAdmin
                LEFT JOIN mahasiswa m ON u.mahasiswa_idMahasiswa = m.idMahasiswa
                WHERE u.username = ? AND (u.role = 1 OR u.role = 2)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
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
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login - Pencatatan Prestasi Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="images/logo1.png" alt="Logo 1" class="logo">
            <img src="images/logo2.png" alt="Logo 2" class="logo">
        </div>
        <h2>LOGIN</h2>
        <p class="subtitle">PENCATATAN PRESTASI MAHASISWA</p>
        <form action="" method="post">
            <input type="text" name="username" placeholder="USERNAME" required><br>
            <input type="password" name="password" placeholder="PASSWORD" required><br>
            <a href="#" class="forgot-password">Lupa Password?</a><br>
            <button type="submit">LOGIN</button><br>
        </form>
    </div>
    <footer>
        <p>Informasi Kontak: support@polinema.ac.id (+62) 341-404424</p>
        <p>Alamat: Politeknik Negeri Malang, Jalan Soekarno-Hatta No.9, Jatimulyo, Kecamatan Lowokwaru Malang, Kode Pos: 65141, Jawa Timur-Indonesia</p>
    </footer>
</body>
</html>
