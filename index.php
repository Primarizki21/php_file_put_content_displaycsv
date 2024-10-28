
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_WebAPI.css">
    <title>Tugas API</title>
</head>
<body>
    <div class="bagian-form-isi">
    <h1 class="judul-form">Isi Form</h1>
        <form action="postdatacsv.php" method="POST">
            <label for="ID">ID:</label><br>
            <input type="text" id="id" name="id" required><br><br>

            <label for="f_name">F_name:</label><br>
            <input type="text" id="f_name" name="f_name" required><br><br>

            <label for="l_name">L_name:</label><br>
            <input type="text" id="l_name" name="l_name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" required><br><br>

            <label for="email2">Email2:</label><br>
            <input type="text" id="email2" name="email2" required><br><br>

            <label for="profesi">Profesi:</label><br>
            <input type="text" id="profesi" name="profesi" required><br><br>

            <input id="tombol-submit" type="submit" value="Submit" >
        </form>
    </div>

    <?php include 'postdatacsv.php'; ?>
    
    <div id="tombol-ke-bawah">
        <button onclick="scrollToBottom()">Ke Bawah</button>
    </div>

    <div class="bagian-tabel">
    <h1 class="judul-tabel">Display CSV</h1>
    <?php include 'displaycsv.php'; ?>
    </div>

    <div id="tombol-ke-atas">
        <button onclick="scrollToTop()">Ke Atas</button>
    </div>

    <script>
        // Scroll ke bawah
        function scrollToBottom() {
            document.getElementById("tombol-ke-atas").scrollIntoView({ behavior: "smooth" });
        }

        // Scroll ke atas
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: "smooth" });
        }
    </script>
</body>
</html>