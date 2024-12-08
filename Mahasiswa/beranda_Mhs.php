<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/mahasiswa/global.css">
    <link rel="stylesheet" href="../style/mahasiswa/beranda.css">
    <title>SIPPMA</title>
    <link rel="icon" type="image/png" href="../img/Logo_SIPPMA.png">
</head>
<body>
    <div class="container">
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
                <a href="bantuan_Mhs.php" class="menu-item">
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
                <h2>SELAMAT DATANG "Users"</h2>
            </section>
            <div class="content">
                <!-- Ranking Section -->
                <div class="ranking">
                <h3>Ranking</h3>
                <div class="ranking-item">
                    <img src="../img/juara1.png" alt="juara1" class="rank-number">
                    <div class="rank-info">
                    <p>Alvino Valerian</p>
                    <p>234720221</p>
                    <p>D-IV Teknik Informatika</p>
                    </div>
                    <span class="rank-score">98</span>
                </div>
                <div class="ranking-item">
                    <img src="../img/juara2.png" alt="juara2" class="rank-number">
                    <div class="rank-info">
                    <p>Alvino Valerian</p>
                    <p>234720220</p>
                    <p>D-IV Teknik Informatika</p>
                    </div>
                    <span class="rank-score">95</span>
                </div>
                <div class="ranking-item">
                    <img src="../img/juara3.png" alt="juara3" class="rank-number">
                    <div class="rank-info">
                    <p>Alvino Valerian</p>
                    <p>234720207</p>
                    <p>D-IV Teknik Informatika</p>
                    </div>
                    <span class="rank-score">90</span>
                </div>
                <div class="ranking-item">
                    <img src="../img/juara4.png" alt="juara4" class="rank-number">
                    <div class="rank-info">
                    <p>Alvino Valerian</p>
                    <p>234720204</p>
                    <p>D-IV Teknik Informatika</p>
                    </div>
                    <span class="rank-score">88</span>
                </div>
                </div>

                <!-- Agenda Section -->
                <div class="agenda">
                    <h3>Agenda Lomba</h3>
                    <div class="agenda-item">
                        <p>Nama Kompetisi</p>
                        <p>22 Feb 2025</p>
                        <a href="#" class="agenda-link">Link</a>
                    </div>
                    <div class="agenda-item">
                        <p>Nama Kompetisi</p>
                        <p>24 Feb 2025</p>
                        <a href="#" class="agenda-link">Link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
