<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
    include('connect.php');

// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $nama = $_POST['nama'];
    $brand = $_POST['brand'];
    $warna = $_POST['warna'];
    $tipe = $_POST['tipe'];
    $harga = $_POST['harga'];
    $query = mysqli_query($connect, "INSERT INTO Tambah Mobil(nama,brand,warna,tipe,harga) 
                                    VALUES('$nama','$brand','$warna','$tipe','$harga') ");
    
    if($query){
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    } else {
        echo "<script>alert('Data gagal ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";                             
    }
}
// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    
    // b. Ambil data brand mobil

    // c. Ambil data warna mobil

    // d. Ambil data tipe mobil

    // e. Ambil data harga mobil

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
   

    // (5) Buatkan kondisi jika eksekusi query berhasil

    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 

// (7) Tutup koneksi ke database setelah selesai menggunakan database
?>