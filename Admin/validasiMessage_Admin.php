<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPPMA</title>
    <link rel="stylesheet" href="../style/styleAdmin.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="profile">
            <img src="../img/profil.png" alt="Profile" class="profile-img">
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
        <h1 class="teks">IPP<span class="highlight">MA</span></h1>
        <div class="logout">
            <button>Logout</button>
        </div>
    </header>
    <!-- Main Content -->
    <main class="main-content">
        <div class="welcome">
            <h2>SELAMAT DATANG "Admin"</h2>
            <div class="validasi-message-container">
                <div class="title">
                    <h1>Message Validasi</h1>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Penghargaan</th>
                            <th>Juara</th>
                            <th>Kategori</th>
                            <th>Validasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                            <td>Juara 1</td>
                            <td>Nasional</td>
                            <td class="validasi-message-btn">
                                <button class="validasi-message-btn-validasi">Validasi</button>
                                <button class="validasi-message-btn-icon">👁</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                            <td>Juara 2</td>
                            <td>Nasional</td>
                            <td class="validasi-message-btn">
                                <button class="validasi-message-btn-ditolak">Ditolak</button>
                                <button class="validasi-message-btn-icon">👁</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                            <td>Juara 3</td>
                            <td>Nasional</td>
                            <td class="validasi-message-btn">
                                <button class="validasi-message-btn-diterima">Diterima</button>
                                <button class="validasi-message-btn-icon">👁</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                            <td>Harapan 1</td>
                            <td>Nasional</td>
                            <td>
                                <button class="validasi-message-btn-diterima">Diterima</button>
                                <button class="validasi-message-btn-icon">👁</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
