<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPPMA</title>
    <link rel="stylesheet" href="../style/admin/agenda.css">
</head>
<body>
<main class="main-content">
    <div class="input-agenda-title">
    <h2>Input Agenda</h2>
    <div id="popupModal" class="popup-modal">
        <div class="popup-content">
        <span class="close-btn">&times;</span>
        <form class="input-agenda-form" action="#" method="post" enctype="multipart/form-data">
            <div class="input-agenda-form-group">
            <label for="nama-agenda">Nama Agenda</label>
            <input type="text" id="nama-agenda" name="nama-agenda" placeholder="Nama Agenda" required>
            </div>
            <div class="input-agenda-form-group">
            <label for="tanggal-agenda">Tanggal Agenda</label>
            <input type="date" id="tanggal-agenda" name="tanggal-agenda" required>
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
</main>
</body>
</html>
