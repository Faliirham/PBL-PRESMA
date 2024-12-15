<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logo_SIPPMA.png">
    <title>SIPPMA</title>
    <link rel="stylesheet" href="../style/global.css">
    <link rel="stylesheet" href="../style/agenda.css">
    <link rel="stylesheet" href="../style/leaderboard.css">
    <link rel="stylesheet" href="../style/fitur.css">
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
                <div class="welcome">
                    <h2>SELAMAT DATANG "Admin"</h2>
                    <section class="agenda">
                        <div class="agenda-header">
                            <h2>Agenda Lomba Mahasiswa</h2>
                            <script src="js/agenda.js" ></script>
                            <button class="tambah-agenda">Tambah Data</button>
                            <div id="popupAgenda" class="popup-agenda">
                                <div class="popup-content-agenda">
                                    <span class="close-btn-agenda">&times;</span>
                                    <form class="input-agenda-form" action="#" method="post" enctype="multipart/form-data">
                                    <div class="input-agenda-form-group">
                                        <label for="nama-agenda">Nama Agenda</label>
                                        <input type="text" id="nama-agenda" name="nama-agenda" placeholder="Nama Agenda" required>
                                    </div>
                                    <div class="input-agenda-form-group">
                                        <label for="tanggal-agenda">Tanggal Agenda</label>
                                        <input type="date" id="tanggal-agenda" name="tanggal-agenda" placeholder="DD/MM/YYYY" required>
                                    </div>
                                    <div class="input-agenda-form-group">
                                        <label for="link-agenda">Link Agenda</label>
                                        <input type="text" id="link-agenda" name="link-agenda" placeholder="Link Agenda" required>
                                    </div>
                                    <div class="input-agenda-form-actions">
                                        <button type="submit" class="input-agenda-btn-unggah">Unggah</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
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
                        <h1>Ranking</h1>
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
                    <section id="features" class="features">
                        <h2>Fitur</h2>
                        <div class="features-list">
                        <div class="feature">
                            <div class="feature-image">
                                <img src="../img/InputPrestasi-page.png" alt="Input Prestasi">
                            </div>
                            <h3>Tambah User</h3>
                            <p>Ingin menambahkan pengguna baru? 
                                Kelola dengan mudah dan tambahkan data pengguna terbaru sekarang juga!</p>
                                <script src="js/user.js"></script>
                            <button id="tambah-user" class="tambah-data">Tambah</button>
                            <div id="popupUser" class="popup-user">
                                <div class="popup-content-user">
                                    <span class="close-btn-user">&times;</span>
                                    <form class="input-user-form" action="#" method="post" enctype="multipart/form-data">
                                        <div class="input-user-form-group">
                                            <label for="username">Username</label>
                                            <input type="text" id="username" name="username" placeholder="Username" required>
                                        </div>
                                        <div class="input-user-form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="input-user-form-group">
                                            <label for="role">Role</label>
                                            <label>
                                                <input type="radio" name="role" value="mahasiswa"> 1. MAHASISWA
                                            </label>
                                            <label>
                                                <input type="radio" name="role" value="admin"> 2. ADMIN
                                            </label>
                                        </div>
                                        <div class="input-user-form-actions">
                                            <button type="submit" class="input-user-btn-unggah">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-image">
                                <img src="../img/InputPrestasi-page.png" alt="Validasi Input">
                            </div>
                            <h3>Tambah Tingkat Prestasi</h3>
                            <p> Tidak ada tingkat! Tambahkan tingkat prestasi baru 
                                untuk mencatat pencapaian yang lebih luar biasa.</p>
                            <script src="js/tingkat.js"></script>
                            <button id="tambah-prestasi" class="tambah-data">Tambah</button>
                            <div id="popupPrestasi" class="popup-prestasi">
                                <div class="popup-content-prestasi">
                                    <span class="close-btn-prestasi">&times;</span>
                                    <form class="input-prestasi-form" action="#" method="post" enctype="multipart/form-data">
                                        <div class="input-prestasi-form-group">
                                            <label for="nama-prestasi">Tingkat Prestasi</label>
                                            <input type="text" id="nama-prestasi" name="nama-prestasi" placeholder="Tingkat Prestasi" required>
                                        </div>
                                        <div class="input-prestasi-form-actions">
                                            <button type="submit" class="input-prestasi-btn-unggah">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
        
    </div>
</body>
</html>
