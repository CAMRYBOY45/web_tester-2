// Objek untuk menyimpan teks dalam dua bahasa
const translations = {
    en: {
        greeting: "Hello<b>, Welcome</b>",
        email: "Your email is 123@gmail.com<b>, Welcome</b>",
        age: "And You Are <b>20 Years Old.</b>"
    },
    id: {
        greeting: "Halo<b>, Selamat Datang</b>",
        email: "Email Anda adalah 123@gmail.com<b>, Selamat Datang</b>",
        age: "Dan Anda Berusia <b>20 Tahun.</b>"
    }
};

// Ambil elemen-elemen yang ingin diubah
const greeting = document.getElementById("greeting");
const email = document.getElementById("email");
const age = document.getElementById("age");

// Tombol bahasa
const btnInd = document.getElementById("ind");
const btnEng = document.getElementById("eng");

// Fungsi untuk mengganti bahasa
function changeLanguage(lang) {
    greeting.innerHTML = translations[lang].greeting;
    email.innerHTML = translations[lang].email;
    age.innerHTML = translations[lang].age;
}

// Tambahkan event listener ke tombol
btnInd.addEventListener("click", () => changeLanguage("id"));
btnEng.addEventListener("click", () => changeLanguage("en"));
