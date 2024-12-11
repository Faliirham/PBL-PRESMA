document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("popupAgenda");
    const tagendaDataBtn = document.querySelector(".tambah-agenda");
    const closeBtnAgenda = document.querySelector(".close-btn-agenda");

    tagendaDataBtn.addEventListener("click", (e) => {
        e.preventDefault();
        modal.style.display = "block";
    });

    closeBtnAgenda.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});
