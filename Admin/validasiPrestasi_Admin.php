<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logo_SIPPMA.png">
    <title>SIPPMA</title>
    <link rel="stylesheet" href="../style/admin/global.css">
    <link rel="stylesheet" href="../style/admin/validasiPrestasi.css">
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
                    <a href="validasiPrestasi_Admin.php" class="menu-item">
                        <img src="../img/Validasi_Icon.png" alt="Validasi Icon" class="menu-icon">Validasi Prestasi
                    </a>
                </nav>
                <footer>
                    <p>© polinema.sch.id</p>
                </footer>
            </aside>
    <!-- Main Content -->
    <main class="main-content">
            <div class="validasi-message-title">
                    <h2>Validasi Prestasi</h2>
                </div>
            <div class="validasi-message-container">
            <button class="tambah-data" onclick="window.location.href='validasiInput_Admin.php'">Tambah Data</button>
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
                                <a href="validasiInput_Admin.php" class="validasi-message-btn-icon">👁</a>
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
                                <a href="validasiInput_Admin.php" class="validasi-message-btn-icon">👁</a>
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
                                <p class="proses">Proses</p>
                            </td>
                            <td class="action-buttons">
                                <a href="validasiInput_Admin.php" class="validasi-message-btn-icon">👁</a>
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
                                <a href="validasiInput_Admin.php" class="validasi-message-btn-icon">👁</a>
                                <a href="#" class="edit-button"><img src="../img/Edit_Icon.png" alt="Edit"></a>
                                <a href="#" class="delete-button"><img src="../img/Delete_Icon.png" alt="Delete"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

  <script>
    function ubahStatus() {
  var dropdown = document.getElementById("validasi-status");
  var status = dropdown.value;

  dropdown.style.backgroundColor = "#ffffff";  
  if (status === "ditolak") {
    dropdown.style.backgroundColor = "#FF2800"; 
  } else if (status === "diterima") {
    dropdown.style.backgroundColor = "#01FB37"; 
  }
}
    function redirectToValidasi() {
  window.location.href = "validasiInput_Admin.php";
}
  </script>
</body>
</html>
