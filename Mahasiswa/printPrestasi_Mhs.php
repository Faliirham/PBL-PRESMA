<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/mahasiswa/global.css">
    <link rel="stylesheet" href="../style/mahasiswa/printPrestasi.css">
    <title>SIPPMA</title>
    <link rel="icon" type="image/png" href="../img/logo_SIPPMA.png">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/af.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function($) 
    { 
        $(document).on('click', '.btn_print', function(event) 
        {
            event.preventDefault();

            // Pilih elemen yang akan dicetak
            var element = document.getElementById('file'); 

            // Pengaturan custom untuk pdf
            var opt = {
                margin:       0.5,   // Kurangi margin jika diperlukan
                filename:     'SIPPMA_'+js.AutoCode()+'.pdf',
                image:        { type: 'jpeg', quality: 2.98 },
                html2canvas:  { dpi: 300, scale: 3 },  // Menambah kualitas gambar yang dicetak
                jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' } // Ukuran kertas
            };

            // Menggunakan html2pdf untuk menyimpan PDF
            html2pdf().set(opt).from(element).save();
        });
    });
</script>

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

        <!-- Main Content -->
        <div class="main-content">
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
            <section class="welcome">
                <h2>SELAMAT DATANG "Users"</h2>
            </section>
            <div class="content">
                <div class="file" id="file">                    
                    <div class="template">
                        <img src="../img/Template_Cetak.png" alt="Template_Cetak">
                    </div>
                    <div class="data overlay">
                        <div class="user-data">
                            <p>Nim<span class="tab1"></span>: 2341720027</p>
                            <p>Nama<span class="tab2"></span>: Alvino Valerian Daniswara Rahman</p>
                            <p>Program Studi<span class="tab3"></span>: Diploma IV Teknik Informatika</p>                            
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama Penghargaan</th>
                                    <th>Juara</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                                    <td>Juara 1</td>
                                    <td>Nasional</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                                    <td>Juara 2</td>
                                    <td>Nasional</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                                    <td>Juara 3</td>
                                    <td>Nasional</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                                    <td>Harapan 1</td>
                                    <td>Nasional</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                                    <td>Harapan 2</td>
                                    <td>Nasional</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="btn-cetak">
                    <button class="btn_print"><img src="../img/Cetak_Icon.png" alt="cetak">Cetak</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
