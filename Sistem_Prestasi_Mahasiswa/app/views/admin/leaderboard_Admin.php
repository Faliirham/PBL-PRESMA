<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleAdmin.css">
    <title>SIPPMA</title>
    <link rel="icon" type="image/png" href="../img/logo_SIPPMA.png">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="profile">
            <img src="https://via.placeholder.com/100" alt="Profile" class="profile-img">
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
            <a href="inputAgenda_Admin.php" class="menu-item">
                <img src="../img/InputAgenda_Icon.png" alt="Input Agenda Icon" class="menu-icon">Input Agenda
            </a>
            <a href="leaderboard_Admin.php" class="menu-item">
                <img src="../img/Leaderboard_Icon.png" alt="Leaderboard Icon" class="menu-icon">Leader Board
            </a>
            <a href="validasiInput_Admin.php" class="menu-item">
                <img src="../img/Validasi_Icon.png" alt="Validasi Icon" class="menu-icon">Validasi Input
            </a>
            <a href="validasiMessage_Admin.php" class="menu-item">
                <img src="../img/Validasi_Icon.png" alt="Validasi Icon" class="menu-icon">Validasi Message
            </a>
        </nav>
        <footer>
            <p>© polinema.sch.id</p>
        </footer>
    </aside>

    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="../img/logo_SIPPMA.png" alt="Logo">
        </div>
        <h1 class="teks">
            IPP<span class="highlight">MA</span>
        </h1>
        <div class="logout">
            <button>Logout</button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="welcome">
        <h2>SELAMAT DATANG "Admin"</h2>
            <div class="leaderboard-content">
                <div class="leaderboard-ranking">
                    <h3>Ranking</h3>
                    <div class="leaderboard-ranking-item">
                        <img src="../img/juara1.png" alt="juara1" class="leaderboard-rank-number">
                        <div class="leaderboard-rank-info">
                            <p>Alvino Valerian</p>
                            <p>234720221</p>
                            <p>D-IV Teknik Informatika</p>
                        </div>
                        <span class="leaderboard-rank-score">98</span>
                    </div>
                    <div class="leaderboard-ranking-item">
                        <img src="../img/juara2.png" alt="juara2" class="leaderboard-rank-number">
                        <div class="leaderboard-rank-info">
                            <p>Alvino Valerian</p>
                            <p>234720220</p>
                            <p>D-IV Teknik Informatika</p>
                        </div>
                        <span class="leaderboard-rank-score">95</span>
                    </div>
                    <div class="leaderboard-ranking-item">
                        <img src="../img/juara3.png" alt="juara3" class="leaderboard-rank-number">
                        <div class="leaderboard-rank-info">
                            <p>Alvino Valerian</p>
                            <p>234720207</p>
                            <p>D-IV Teknik Informatika</p>
                        </div>
                        <span class="leaderboard-rank-score">90</span>
                    </div>
                    <div class="leaderboard-ranking-item">
                        <img src="../img/juara4.png" alt="juara4" class="leaderboard-rank-number">
                        <div class="leaderboard-rank-info">
                            <p>Alvino Valerian</p>
                            <p>234720204</p>
                            <p>D-IV Teknik Informatika</p>
                        </div>
                        <span class="leaderboard-rank-score">88</span>
                    </div>
                </div>

                <div class="leaderboard-agenda">
                    <h3>Agenda Lomba</h3>
                    <div class="leaderboard-agenda-item">
                        <p class="leaderboard-agenda-name">Nama Kompetisi</p>
                        <p class="leaderboard-agenda-date">22 Feb 2025</p>
                        <a href="#" class="leaderboard-agenda-link">Link</a>
                    </div>
                    <div class="leaderboard-agenda-item">
                        <p class="leaderboard-agenda-name">Nama Kompetisi</p>
                        <p class="leaderboard-agenda-date">24 Feb 2025</p>
                        <a href="#" class="leaderboard-agenda-link">Link</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
