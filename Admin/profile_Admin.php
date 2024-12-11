<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logo_SIPPMA.png">
    <title>SIPPMA</title>
    <link rel="stylesheet" href="../style/admin/global.css">
    <link rel="stylesheet" href="../style/admin/profile.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="../img/logo_SIPPMA.png" alt="Logo">
            </div>
            <h1 class="teks">
                IPP<span class="highlight">MA</span>
            </h1>
            <div class="logout">
                <button onclick="window.location.href='../login.php';">Logout</button>
            </div>
        </header>
        <div class="main">
            <aside class="sidebar">
                <div class="profile">
                    <img src="../img/admin.jpg" alt="Profile" class="profile-img">
                    <h3 class="profile-name">Hallo Admin</h3>
                    <p class="profile-name">2341010101010</p>
                    <p class="profile-name">TEKNIK INFORMASI</p>
                </div>
                <nav class="menu">
                    <a href="beranda_Admin.php" class="menu-item">
                        <img src="../img/Beranda_Icon.png" alt="Beranda Icon" class="menu-icon">Beranda
                    </a>
                    <a href="profile_Admin.php" class="menu-item">
                        <img src="../img/Profile_Icon.png" alt="Profile Icon" class="menu-icon">Profile
                    </a>
                    <a href="prestasi_Admin.php" class="menu-item">
                        <img src="../img/Leaderboard_Icon.png" alt="Validasi Icon" class="menu-icon">Prestasi
                    </a>
                </nav>
                <footer>
                    <p>© polinema.sch.id</p>
                </footer>
            </aside>
            <main class="main-content">
                <div class="profile-container">
                    <h1>Data diri Admin</h1>
                    <div class="profile-content">
                        <div class="profile-picture">
                            <img src="../img/admin.jpg" alt="Profile Picture">
                            <div>
                                <button class="profile-btn-ubah">Ubah Foto</button>
                            </div>
                        </div>
                        <div class="profile-form">
                            <form action="#" method="post">
                                <div class="profile-form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" value="Hallo Admin">
                                </div>
                                <div class="profile-form-group">
                                    <label for="nip">NIP</label>
                                    <input type="text" id="nip" value="22047463888">
                                </div>
                                <div class="profile-form-group">
                                    <label for="studi">Studi</label>
                                    <input type="text" id="studi" value="Teknik Informatika">
                                </div>
                                <div class="profile-form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" value="adminPolinema@gmail.com">
                                </div>
                                <button type="submit" class="profile-btn-simpan">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
