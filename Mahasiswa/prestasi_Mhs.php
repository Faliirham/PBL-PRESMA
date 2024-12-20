<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logo_SIPPMA.png">
    <title>SIPPMA</title>
    <link rel="stylesheet" href="../style/global.css">
    <link rel="stylesheet" href="../style/prestasi.css">
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
                    <img src="../img/profil.png" alt="Profile" class="profile-img">
                    <h3 class="profile-name">Hallo User</h3>
                    <p class="profile-name">2341010101010</p>
                    <p class="profile-name">TEKNIK INFORMASI</p>
                </div>
                <nav class="menu">
                    <a href="beranda_Mhs.php" class="menu-item"> 
                        <img src="../img/Beranda_Icon.png" alt="Beranda Icon" class="menu-icon">Beranda
                    </a>
                    <a href="profile_Mhs.php" class="menu-item">
                        <img src="../img/Profile_Icon.png" alt="Profile Icon" class="menu-icon">Profile
                    </a>
                    <a href="prestasi_Mhs.php" class="menu-item">
                        <img src="../img/Leaderboard_Icon.png" alt="Validasi Icon" class="menu-icon">Prestasi
                    </a>
                    <a href="cetakPrestasi_Mhs.php" class="menu-item">
                        <img src="../img/Cetak_Icon.png" alt="Cetak Icon" class="menu-icon">Cetak Prestasi
                    </a>
                    <a href="bantuan_Mhs.php" class="menu-item">
                        <img src="../img/Help_Icon.png" alt="bantuan Icon" class="menu-icon">Bantuan
                    </a>
                </nav>
                <footer>
                    <p>© polinema.sch.id</p>
                </footer>
            </aside>
    <main class="main-content">
            <div class="validasi-message-title">
                <h2>Prestasi</h2>
            </div>
            <div class="sub-header">
                <p>Daftar Prestasi / Penghargaan yang di terima oleh mahasiswa, seperti juara lomba keahlian, juara lomba karya tulis, dan lain-lainnya</p>
                <p><span>*Maksimal Pengeditan 1 hari (lebih dari itu data tidak bisa diubah)</span></p>
            </div>
            <div class="validasi-message-container">
            <button class="tambah-data" onclick="window.location.href='formInputPrestasi_Mhs.php'">Tambah Data</button>
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA MAHASISWA</th>
                            <th>JUARA</th>
                            <th>KATEGORI</th>
                            <th>VALIDASI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Alvino Valerian</td>
                            <td>Juara 1</td>
                            <td>Nasional</td>
                            <td class="status">
                                <p class="diterima">Diterima</p>
                            </td>
                            <td class="action-buttons">
                                <a href="#" class="edit-button"><img src="../img/Edit_Icon.png" alt="Edit"></a>
                                <a href="#" class="delete-button"><img src="../img/Delete_Icon.png" alt="Delete"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ahmad Naufal</td>
                            <td>Juara 2</td>
                            <td>Nasional</td>
                            <td class="status">
                                <p class="diterima">Diterima</p>
                            </td>
                            <td class="action-buttons">
                                <a href="#" class="edit-button"><img src="../img/Edit_Icon.png" alt="Edit"></a>
                                <a href="#" class="delete-button"><img src="../img/Delete_Icon.png" alt="Delete"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Billy Maulana</td>
                            <td>Juara 3</td>
                            <td>Nasional</td>
                            <td class="status">
                                <p class="ditolak">Ditolak</p>
                            </td>
                            <td class="action-buttons">
                                <a href="#" class="edit-button"><img src="../img/Edit_Icon.png" alt="Edit"></a>
                                <a href="#" class="delete-button"><img src="../img/Delete_Icon.png" alt="Delete"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Fali Irham</td>
                            <td>Harapan 1</td>
                            <td>Nasional</td>
                            <td class="status">
                                <p class="diterima">Diterima</p>
                            </td>
                            <td class="action-buttons">
                                <a href="#" class="edit-button"><img src="../img/Edit_Icon.png" alt="Edit"></a>
                                <a href="#" class="delete-button"><img src="../img/Delete_Icon.png" alt="Delete"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="sub-header-pesan">
                    <p><span>*pesan validasi dari admin</span></p>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>PESAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Data nama yang dimasukkan salah</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>