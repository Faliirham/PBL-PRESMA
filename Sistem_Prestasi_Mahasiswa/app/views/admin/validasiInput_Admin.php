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
            <div class="validasi-input-title">
                    <h2>Input Prestasi</h2>
                <div class="validasi-input-container">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="validasi-input-form-group">
                            <label for="nama-mahasiswa">Nama Mahasiswa</label>
                            <input type="text" id="nama-mahasiswa" placeholder="Nama Mahasiswa">
                        </div>
                        <div class="validasi-input-form-group">
                            <label for="nama-prestasi">Nama Prestasi</label>
                            <input type="text" id="nama-prestasi" placeholder="Nama Prestasi">
                        </div>
                        <div class="validasi-input-form-group">
                            <label for="penyelenggara">Penyelenggara</label>
                            <input type="text" id="penyelenggara" placeholder="Penyelenggara">
                        </div>
                        <div class="validasi-input-form-group">
                            <label for="tanggal-juara">Tanggal Juara</label>
                            <input type="text" id="tanggal-juara" placeholder="DD/MM/YYYY">
                        </div>
                        <div class="validasi-input-form-group">
                            <label for="tingkat-kompetisi">Tingkat Kompetisi</label>
                            <input type="text" id="tingkat-kompetisi" placeholder="Nasional">
                        </div>

                        <div class="validasi-input-form-group-file">
                        <label for="sertifikat">
                            Upload Sertifikat Lomba
                        </label>
                        <div class="form-upload">
                            <div class="file-info">
                                <span class="file-name" id="sertifikat-name">Tidak ada file yang dipilih</span>
                                <button onclick="triggerFileInput('sertifikat')" type="button">
                                    Pilih File
                                </button>
                            </div>
                            <input id="sertifikat" type="file" onchange="updateFileName('sertifikat', 'sertifikat-name')" required style="display: none;" />
                            <div class="note">
                                <p>Max 2 MB | File berupa format PDF / IMG</p>
                            </div>
                            </div>
                        </div>
                        <div class="validasi-input-form-group-file">
                            <label for="foto">
                                Upload Foto Kegiatan
                            </label>
                            <div class="form-upload">
                                <div class="file-info">
                                    <span class="file-name" id="foto-name">Tidak ada file yang dipilih</span>
                                    <button onclick="triggerFileInput('foto')" type="button">
                                        Pilih File
                                    </button>
                                </div>
                                <input id="foto" type="file" onchange="updateFileName('foto', 'foto-name')" required style="display: none;" />
                                <div class="note">
                                    <p>Max 2 MB | File berupa format PDF / IMG</p>
                                </div>
                            </div>
                        </div>
                        <div class="validasi-input-form-group-file">
                            <label for="surat">
                                Upload Surat Tugas
                            </label>
                            <div class="form-upload">
                                <div class="file-info">
                                    <span class="file-name" id="surat-name">Tidak ada file yang dipilih</span>
                                    <button onclick="triggerFileInput('surat')" type="button">
                                        Pilih File
                                    </button>
                                </div>
                                    <input id="surat" type="file" onchange="updateFileName('surat', 'surat-name')" required style="display: none;" />
                                    <div class="note">
                                        <p>Max 2 MB | File berupa format PDF / IMG</p>
                                    </div>
                            </div>
                        </div>
                        <div class="validasi-input-form-group-file">
                            <label for="proposal">
                                Upload Proposal/Karya
                            </label>
                        <div class="form-upload">
                            <div class="file-info">
                                <span class="file-name" id="proposal-name">Tidak ada file yang dipilih</span>
                                <button onclick="triggerFileInput('proposal')" type="button">
                                    Pilih File
                                </button>
                            </div>
                                <input id="proposal" type="file" onchange="updateFileName('proposal', 'proposal-name')" required style="display: none;" />
                                <div class="note">
                                    <p>Max 2 MB | File berupa format PDF / IMG</p>
                                </div>
                            </div>
                        </div>
                        <div class="validasi-input-form-group">
                            <label for="point-sertifikat">
                                Point Sertifikat
                            </label>
                            <input type="text" id="point-sertifikat" placeholder="Point Sertifikat">
                        </div>
                        <div class="validasi-input-form-group">
                            <label for="point-sertifikat">Point Sertifikat</label>
                            <input type="text" id="point-sertifikat" placeholder="Point Sertifikat">
                        </div>
                        <div class="validasi-input-form-group">
                            <label for="pesan-validasi">Pesan Validasi</label>
                            <textarea id="pesan-validasi" placeholder="Pesan Validasi"></textarea>
                        </div>

                        <div class="validasi-input-form-actions">
                            <button type="reset" class="validasi-input-btn-batal">Batal</button>
                            <button type="submit" class="validasi-input-btn-unggah">Unggah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>