document.addEventListener('DOMContentLoaded', function() {
    var tambahButton = document.getElementById('tambah-user');
    var popupUser = document.getElementById('popupUser');
    var closeButton = document.querySelector('.close-btn-user');

    // Tampilkan popup ketika tombol "Tambah" ditekan
    tambahButton.addEventListener('click', function() {
        popupUser.style.display = 'block';
    });

    // Tutup popup ketika tombol close ditekan
    closeButton.addEventListener('click', function() {
        popupUser.style.display = 'none';
    });

    // Tutup popup jika pengguna mengeklik di luar area popup
    window.addEventListener('click', function(event) {
        if (event.target === popupUser) {
            popupUser.style.display = 'none';
        }
    });
});
