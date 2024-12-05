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
            <div class="input-agenda-title">
                    <h2>Input Agenda</h2>
                <div class="input-agenda-container">
                    <div class="input-agenda-content">
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
                            <button type="reset" class="input-agenda-btn-batal">Batal</button>
                            <button type="submit" class="input-agenda-btn-unggah">Unggah</button>
                        </div>
                    </form>
                    </div>  
                </div>
            </div>
        </div>
    </main>
</body>
</html>
