// function untuk ubah pekerjaan
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

// form settings
document.addEventListener("DOMContentLoaded", function() {
    const penIcon = document.getElementById("pen-icon1");
    const inputContainer = document.getElementById("input-container1");
    const emailText = document.getElementById("email-text1");
    const passwordText = document.getElementById("password-text1");
    const emailInput = document.getElementById("email-input1");
    const passwordInput = document.getElementById("password-input1");
    const saveButton = document.getElementById("save-button1");
    const cancelButton = document.getElementById("cancel-button1");

    function toggleInput() {
        if (inputContainer.style.display === "none") {
            inputContainer.style.display = "block";
            emailInput.value = emailText.textContent;
            passwordInput.value = passwordText.textContent;
        } else {
            inputContainer.style.display = "none";
        }
    }

    function saveChanges() {
        const newEmail = emailInput.value;
        const newPassword = passwordInput.value;
        emailText.textContent = newEmail;
        passwordText.textContent = newPassword;
        toggleInput();
    }

    function cancelEdit() {
        toggleInput();
    }

    penIcon.addEventListener("click", toggleInput);
    saveButton.addEventListener("click", saveChanges);
    cancelButton.addEventListener("click", cancelEdit);
});
