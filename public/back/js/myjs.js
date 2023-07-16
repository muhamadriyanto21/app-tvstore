document.addEventListener("DOMContentLoaded", function() {
    // Mengambil elemen ikon menggunakan ID
    const penIcon = document.getElementById("pen-icon");

    // Mengambil elemen teks pekerjaan menggunakan ID
    const jobTitle = document.getElementById("job-title");

    // Mengambil elemen input container menggunakan ID
    const inputContainer = document.getElementById("input-container");

    // Mengambil elemen input pekerjaan menggunakan ID
    const jobTitleInput = document.getElementById("job-title-input");

    // Mengambil elemen tombol simpan menggunakan ID
    const saveButton = document.getElementById("save-button");


    // Fungsi untuk menampilkan input dan menyembunyikan teks
    function showInput() {
        // Menyembunyikan teks pekerjaan
        jobTitle.style.display = "none";

        // Menampilkan input dan tombol simpan
        inputContainer.style.display = "block";
    }

    // Fungsi untuk menyimpan perubahan dan menampilkan teks
    function saveChanges() {
        // Mendapatkan nilai input pekerjaan
        const newJobTitle = jobTitleInput.value;

        // Mengubah teks pekerjaan dengan nilai input pengguna
        jobTitle.textContent = newJobTitle;

        // Menampilkan teks pekerjaan
        jobTitle.style.display = "block";

        // Menyembunyikan input dan tombol simpan
        inputContainer.style.display = "none";
    }

    // Panggil fungsi showInput() saat ikon pena di klik
    penIcon.addEventListener("click", showInput);

    // Panggil fungsi saveChanges() saat tombol simpan di klik
    saveButton.addEventListener("click", saveChanges);
});

