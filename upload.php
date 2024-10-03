<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    // Simpan berita ke database atau file
    // Untuk contoh ini, kita hanya menampilkan pesan sukses
    echo "<h2>Berita berhasil di-upload!</h2>";
    echo "<h3>Judul: $title</h3>";
    echo "<p>Konten: $content</p>";
}
?>
