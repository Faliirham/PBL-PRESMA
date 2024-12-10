<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPPMA</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="agenda.css">
    <link rel="stylesheet" href="leaderboard.css">
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
                    <a href="inputAgenda_Admin.php" class="menu-item">
                        <img src="../img/InputAgenda_Icon.png" alt="Input Agenda Icon" class="menu-icon">Input Agenda
                    </a>
                    <a href="leaderboard_Admin.php" class="menu-item">
                        <img src="../img/Leaderboard_Icon.png" alt="Leaderboard Icon" class="menu-icon">Leader Board
                    </a>
                    <a href="validasiInput_Admin.php" class="menu-item">
                        <img src="../img/InputAgenda_Icon.png" alt="Input Prestasi Icon" class="menu-icon">Input Prestasi
                    </a>
                    <a href="validasiMessage_Admin.php" class="menu-item">
                        <img src="../img/Validasi_Icon.png" alt="Validasi Icon" class="menu-icon">Validasi Message
                    </a>
                </nav>
                <footer>
                    <p>© polinema.sch.id</p>
                </footer>
            </aside>
            <main class="main-content">
                <div class="welcome">
                    <h2>SELAMAT DATANG "Admin"</h2>
                    <section class="agenda">
                        <div class="agenda-header">
                            <h2>Agenda Lomba Mahasiswa</h2>
                            <button class="tambah-data">Tambah Data</button>
                        </div>
                        <div class="agenda-list">
                            <div class="agenda-item">
                                <div class="edit-delete-icons">
                                    <img class="edit-icon" src="../img/Edit_icon.png" alt="edit">
                                    <img class="delete-icon" src="../img/Delete_icon.png" alt="delete">
                                </div>
                                <h3>Nama Kompetisi</h3>
                                <div class="agenda-item-content">
                                    <img class="time-icon" src="../img/time.png" alt="time">
                                    <p>22 November 2024</p>
                                </div>
                                <a href="#">Link</a>
                            </div>
                            <div class="agenda-item">
                                <div class="edit-delete-icons">
                                    <img class="edit-icon" src="../img/Edit_icon.png" alt="edit">
                                    <img class="delete-icon" src="../img/Delete_icon.png" alt="delete">
                                </div>
                                <h3>Nama Kompetisi</h3>
                                <div class="agenda-item-content">
                                    <img class="time-icon" src="../img/time.png" alt="time">
                                    <p>22 November 2024</p>
                                </div>
                                <a href="#">Link</a>
                            </div>
                            <div class="agenda-item">
                                <div class="edit-delete-icons">
                                    <img class="edit-icon" src="../img/Edit_icon.png" alt="edit">
                                    <img class="delete-icon" src="../img/Delete_icon.png" alt="delete">
                                </div>
                                <h3>Nama Kompetisi</h3>
                                <div class="agenda-item-content">
                                    <img class="time-icon" src="../img/time.png" alt="time">
                                    <p>22 November 2024</p>
                                </div>
                                <a href="#">Link</a>
                            </div>
                            <div class="agenda-item">
                                <div class="edit-delete-icons">
                                    <img class="edit-icon" src="../img/Edit_icon.png" alt="edit">
                                    <img class="delete-icon" src="../img/Delete_icon.png" alt="delete">
                                </div>
                                <h3>Nama Kompetisi</h3>
                                <div class="agenda-item-content">
                                    <img class="time-icon" src="../img/time.png" alt="time">
                                    <p>22 November 2024</p>
                                </div>
                                <a href="#">Link</a>
                            </div>
                            <div class="agenda-item">
                                <div class="edit-delete-icons">
                                    <img class="edit-icon" src="../img/Edit_icon.png" alt="edit">
                                    <img class="delete-icon" src="../img/Delete_icon.png" alt="delete">
                                </div>
                                <h3>Nama Kompetisi</h3>
                                <div class="agenda-item-content">
                                    <img class="time-icon" src="../img/time.png" alt="time">
                                    <p>22 November 2024</p>
                                </div>
                                <a href="#">Link</a>
                            </div>
                            <div class="agenda-item">
                                <div class="edit-delete-icons">
                                    <img class="edit-icon" src="../img/Edit_icon.png" alt="edit">
                                    <img class="delete-icon" src="../img/Delete_icon.png" alt="delete">
                                </div>
                                <h3>Nama Kompetisi</h3>
                                <div class="agenda-item-content">
                                    <img class="time-icon" src="../img/time.png" alt="time">
                                    <p>22 November 2024</p>
                                </div>
                                <a href="#">Link</a>
                            </div>
                        </div>
                    </section>
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
                        <div class="leaderboard-ranking-item">
                            <img src="../img/juara5.png" alt="juara5" class="leaderboard-rank-number">
                            <div class="leaderboard-rank-info">
                                <p>Alvino Valerian</p>
                                <p>234720204</p>
                                <p>D-IV Teknik Informatika</p>
                            </div>
                            <span class="leaderboard-rank-score">87</span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
