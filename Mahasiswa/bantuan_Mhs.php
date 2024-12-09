<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/mahasiswa/global.css">
    <link rel="stylesheet" href="../style/mahasiswa/bantuan.css">
    <title>SIPPMA</title>
    <link rel="icon" type="image/png" href="../img/logo_SIPPMA.png">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="profile">
            <img src="../img/profil.png" alt="Profile" class="profile-img">
            <h3 class="profile-name">Alvino Valerian</h3>
            <p class="profile-name">23410100100</p>
            <p class="profile-name">D-IV Teknik Informatika</p>
        </div>
        <nav class="menu">
            <a href="beranda_Mhs.php" class="menu-item"> 
                <img src="../img/Beranda_Icon.png" alt="Beranda Icon" class="menu-icon">Beranda
            </a>
            <a href="profile_Mhs.php" class="menu-item">
                <img src="../img/Profile_Icon.png" alt="profile Icon" class="menu-icon">Profile Mahasiswa
            </a>
            <a href="inputPrestasi_Mhs.php" class="menu-item">
                <img src="../img/InputAgenda_Icon.png" alt="Input Agenda Icon" class="menu-icon">Input Prestasi
            </a>
            <a href="cetakPrestasi_Mhs.php" class="menu-item">
                <img src="../img/Cetak_Icon.png" alt="Leaderboard Icon" class="menu-icon">Cetak Prestasi
            </a>
            <a href="bantuan_Mhs.php" class="menu-item active">
                <img src="../img/Help_Icon.png" alt="Validasi Icon" class="menu-icon">Bantuan
            </a>
        </nav>
        <footer>
            <p>© polinema.sch.id</p>
        </footer>
    </div>
    
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="../img/Logo_SIPPMA.png" alt="Logo">
        </div>
        <h1 class="teks">
            IPP<span class="highlight">MA</span>
        </h1>
        <div class="bell">
            <a href="validasiMessage_Mhs.php"><img src="../img/Notification_Icon.png" alt="Notification"></a>
        </div>
        <div class="logout">
            <button onclick="window.location.href='../login.php';">Logout</button>
        </div>
    </header>
        
    <!-- Main Content -->
    <div class="main-content">
        <section class="welcome">
            <h2>Bantuan</h2>
            <p>Untuk bantuan lebih lanjut, Anda dapat menghubungi admin melalui kontak di bawah ini:</p>
        </section>

        <div class="contact-info">
            <h3>Kontak Admin:</h3>
            <ul>
                <li><strong>Email:</strong> admin@polinema.sch.id</li>
                <li><strong>WhatsApp:</strong> 0812-3456-7890 ( Admin )</li>
                <li><strong>Alamat:</strong> Politeknik Negeri Malang, Jalan Soekarno-Hatta, Malang</li>
            </ul>
        </div>
    </div>
</body>
</html>