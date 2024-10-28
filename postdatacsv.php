<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $profesi = $_POST['profesi'];

    // Data menjadi array
    $data = array($id, $f_name, $l_name, $email, $email2, $profesi);
    // Menjadikan array menjadi string
    $csvLine = implode(',', $data) . PHP_EOL; 
    $file = 'datapribadi.csv';

    // Menggunakan file_put_contents untuk menambahkan data
    if (file_put_contents($file, $csvLine, FILE_APPEND | LOCK_EX) !== false) {
        echo "Data Berhasil Dimasukkan";
    } else {
        echo "Data Gagal Dimasukkan";
    }

    // Redirect ke halaman index.php setelah 3 detik
    echo "<script>
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>";
}
?>
