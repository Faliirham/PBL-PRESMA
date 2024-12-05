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
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="../img/logo_SIPPMA.png" alt="Logo">
        </div>
        <h1 class="teks">IPP<span class="highlight">MA</span></h1>
        <div class="logout">
        <button onclick="window.location.href='../login.php';">Logout</button>
        </div>
    </header>
    <!-- Main Content -->
    <main class="main-content">
        <div class="welcome">
        <h2>SELAMAT DATANG "Admin"</h2>
            <div class="validasi-message-title">
                    <h2>Message Validasi</h2>
                </div>
            <div class="validasi-message-container">
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA MAHASISWA</th>
                            <th>JUARA</th>
                            <th>KATEGORI</th>
                            <th>VALIDASI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Alvino Valerian</td>
                            <td>Juara 1</td>
                            <td>Nasional</td>
                            <td class="validasi-message-dropdown">
                            <select class="validasi-dropdown" name="validasiStatus">
                                <option value="validasi">Validasi</option>
                                <option value="ditolak">Ditolak</option>
                                <option value="diterima">Diterima</option>
                            </select>
                            <button class="validasi-message-btn-icon">👁</button>
                        </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ahmad Naufal</td>
                            <td>Juara 2</td>
                            <td>Nasional</td>
                            <td><select class="validasi-dropdown" id="validasi-status" onchange="ubahStatus()">
                            <option value="default" disabled selected>Validasi</option>
                            <option value="diterima">Diterima</option>
                            <option value="ditolak">Ditolak</option>
                            </select>
                            <button class="validasi-message-btn-icon" onclick="redirectToValidasi()">👁</button>
                        </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Billy Maulana</td>
                            <td>Juara 3</td>
                            <td>Nasional</td>
                            <td><select class="validasi-dropdown" id="validasi-status" onchange="ubahStatus()">
                            <option value="default" disabled selected>Validasi</option>
                            <option value="diterima">Diterima</option>
                            <option value="ditolak">Ditolak</option>
                            </select>
                            <button class="validasi-message-btn-icon" onclick="redirectToValidasi()">👁</button>
                        </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Fali Irham</td>
                            <td>Harapan 1</td>
                            <td>Nasional</td>
                            <td class="validasi-message-dropdown">
                            <select class="validasi-dropdown" name="validasiStatus">
                                <option value="validasi">Validasi</option>
                                <option value="ditolak">Ditolak</option>
                                <option value="diterima">Diterima</option>
                            </select>
                            <button class="validasi-message-btn-icon">👁</button>
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
