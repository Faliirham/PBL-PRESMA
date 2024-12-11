document.addEventListener('DOMContentLoaded', function() {
    var tambahButton = document.getElementById('tambah-prestasi');
    var popupPrestasi = document.getElementById('popupPrestasi');
    var closeButton = document.querySelector('.close-btn-prestasi');

    // Tampilkan popup ketika tombol "Tambah" ditekan
    tambahButton.addEventListener('click', function() {
        popupPrestasi.style.display = 'block';
    });

    // Tutup popup ketika tombol close ditekan
    closeButton.addEventListener('click', function() {
        popupPrestasi.style.display = 'none';
    });

    // Tutup popup jika pengguna mengeklik di luar area popup
    window.addEventListener('click', function(event) {
        if (event.target === popupPrestasi) {
            popupPrestasi.style.display = 'none';
        }
    });
});
