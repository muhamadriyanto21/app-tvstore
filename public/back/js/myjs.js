// function untuk ubah pekerjaan
document.addEventListener("DOMContentLoaded", function() {
    const penIcon = document.getElementById("pen-icon");
    const jobTitle = document.getElementById("job-title");
    const inputContainer = document.getElementById("input-container");
    const jobTitleInput = document.getElementById("job-title-input");
    const saveButton = document.getElementById("save-button");

    // Fungsi untuk menyimpan data ke Local Storage
    function saveDataToLocalStorage() {
        localStorage.setItem("jobTitle", jobTitle.textContent);
    }

    // Fungsi untuk memuat data dari Local Storage
    function loadDataFromLocalStorage() {
        const savedJobTitle = localStorage.getItem("jobTitle");

        if (savedJobTitle) {
            jobTitle.textContent = savedJobTitle;
        }
    }

    // Fungsi untuk menampilkan form input
    function toggleInput() {
        if (inputContainer.style.display === "none") {
            inputContainer.style.display = "block";
            jobTitleInput.value = jobTitle.textContent;
            jobTitleInput.focus();
        } else {
            inputContainer.style.display = "none";
        }
    }

    // Fungsi untuk menyimpan perubahan
    function saveChanges() {
        const newJobTitle = jobTitleInput.value;
        jobTitle.textContent = newJobTitle;
        saveDataToLocalStorage();
        toggleInput();
    }

    // Fungsi untuk membatalkan perubahan
    function cancelEdit() {
        toggleInput();
    }

    // Panggil fungsi untuk memuat data dari Local Storage
    loadDataFromLocalStorage();

    // Tambahkan event listener ke tombol dan ikon
    penIcon.addEventListener("click", toggleInput);
    saveButton.addEventListener("click", saveChanges);
    jobTitleInput.addEventListener("keyup", function(event) {
        if (event.key === "Enter") {
            saveChanges();
        }
    });
    jobTitleInput.addEventListener("blur", saveChanges);
    jobTitleInput.addEventListener("keydown", function(event) {
        if (event.key === "Escape") {
            cancelEdit();
        }
    });
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

    // Fungsi untuk menyimpan data ke Local Storage
    function saveDataToLocalStorage() {
        localStorage.setItem("email", emailText.textContent);
        localStorage.setItem("password", passwordText.textContent);
    }

    // Fungsi untuk memuat data dari Local Storage
    function loadDataFromLocalStorage() {
        const savedEmail = localStorage.getItem("email");
        const savedPassword = localStorage.getItem("password");

        if (savedEmail) {
            emailText.textContent = savedEmail;
        }

        if (savedPassword) {
            passwordText.textContent = savedPassword;
        }
    }

    // Fungsi untuk menampilkan form input
    function toggleInput() {
        if (inputContainer.style.display === "none") {
            inputContainer.style.display = "block";
            emailInput.value = emailText.textContent;
            passwordInput.value = passwordText.textContent;
        } else {
            inputContainer.style.display = "none";
        }
    }

    // Fungsi untuk menyimpan perubahan
    function saveChanges() {
        const newEmail = emailInput.value;
        const newPassword = passwordInput.value;
        emailText.textContent = newEmail;
        passwordText.textContent = newPassword;
        saveDataToLocalStorage();
        toggleInput();
    }

    // Fungsi untuk membatalkan perubahan
    function cancelEdit() {
        toggleInput();
    }

    // Panggil fungsi untuk memuat data dari Local Storage
    loadDataFromLocalStorage();

    // Tambahkan event listener ke tombol dan ikon
    penIcon.addEventListener("click", toggleInput);
    saveButton.addEventListener("click", saveChanges);
    cancelButton.addEventListener("click", cancelEdit);
});

// these will add fitur change image if botton pencil to click
document.addEventListener("DOMContentLoaded", function() {
    const penIcon = document.getElementById("pen-icon-for-change-image");
    const fileInput = document.getElementById("file-input-for-change-image");
    const profileImg = document.getElementById("profile-img");
    // Memuat foto yang tersimpan dalam Local Storage saat halaman dimuat
    loadProfileImage();
    // Tambahkan event listener untuk ikon pena
    penIcon.addEventListener("click", function() {
        fileInput.click();
    });
    // Tambahkan event listener untuk perubahan file input
    fileInput.addEventListener("change", function() {
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // Mengganti atribut src gambar dengan data URL yang dibaca dari file
                profileImg.setAttribute("src", e.target.result);
                // Simpan foto baru ke Local Storage
                saveProfileImage(e.target.result);
            };
            // Membaca file sebagai URL data
            reader.readAsDataURL(fileInput.files[0]);
        }
    });

    // Fungsi untuk menyimpan foto ke Local Storage
    function saveProfileImage(imageData) {
        localStorage.setItem("profileImage", imageData);
    }

    // Fungsi untuk memuat foto dari Local Storage
    function loadProfileImage() {
        const storedImage = localStorage.getItem("profileImage");
        if (storedImage) {
            profileImg.setAttribute("src", storedImage);
        }
    }


});
