document.addEventListener("DOMContentLoaded", function () {

    // ===============================
    // OUTPUT DASAR
    // ===============================
    console.log("Website berhasil dimuat!");
    alert("Selamat datang di website latihan JavaScript!");

    // ===============================
    // VARIABEL & TIPE DATA
    // ===============================
    let namaUser = "Pengunjung";
    const tahun = 2026;

    let angka = 10;
    let aktif = true;

    let mahasiswa = {
        nama: "Nadia",
        umur: 20
    };

    let nilaiArray = [80, 90, 100];

    console.log(mahasiswa);
    console.log(nilaiArray);

    // ===============================
    // DOM (AMBIL ELEMEN)
    // ===============================
    const judul = document.querySelector("h1");
    const form = document.querySelector("form");
    const inputNama = document.querySelector("#nama");
    const inputEmail = document.querySelector("#email");

    // ===============================
    // CEK ELEMENT (ANTI ERROR)
    // ===============================
    if (judul) {
        judul.innerHTML = "Selamat Datang di Web + JavaScript 🚀";

        // event klik judul
        judul.addEventListener("click", function () {
            alert("Judul diklik!");
        });
    }

    // ===============================
    // FUNCTION
    // ===============================
    function sapa(nama) {
        return "Halo " + nama + "!";
    }

    console.log(sapa("Nadia"));

    // ===============================
    // ARROW FUNCTION
    // ===============================
    const tambah = (a, b) => a + b;
    console.log("Hasil tambah:", tambah(5, 3));

    // ===============================
    // PERCABANGAN
    // ===============================
    let nilai = 80;

    if (nilai >= 75) {
        console.log("Lulus");
    } else {
        console.log("Tidak Lulus");
    }

    // ===============================
    // PERULANGAN
    // ===============================
    for (let i = 1; i <= 5; i++) {
        console.log("Perulangan ke-" + i);
    }

    // ===============================
    // VALIDASI FORM
    // ===============================
    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();

            let nama = inputNama.value.trim();
            let email = inputEmail.value.trim();

            if (nama === "" || email === "") {
                alert("Semua data harus diisi!");
            } else {
                alert(
                    "Data berhasil dikirim!\nNama: " +
                    nama +
                    "\nEmail: " +
                    email
                );
            }
        });
    }

});