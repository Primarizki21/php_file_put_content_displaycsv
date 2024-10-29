<table class="tabel-utama">
    <tr>
        <th>Id</th>
        <th>F_Name</th>
        <th>L_Name</th>
        <th>Email</th>
        <th>Email2</th>
        <th>Profesi</th>
    </tr>

    <?php
    // Load file CSV, pastikan pathnya benar
    $file = 'datapribadi.csv';

    // Membuka File csv dengan read mode
    if (($handle = fopen($file, "r")) !== FALSE) {
        // Membaca csv lalu mengahpus baris pertama
        fgetcsv($handle);
        // Membaca setiap baris selama ada
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            echo "<tr>";
            // Array yang didapat dilakukan pembacaan
            foreach ($data as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";
        }
        fclose($handle);
    }
    ?>
</table>