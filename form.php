<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang!</title>
    <style>
        body {
            font-family: "segoe ui";
        }
        h1 {
            font-size: 25px;
        }
        p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang!</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $kebangsaan = $_POST['kebangsaan'];
        $logat = isset($_POST['logat']) ? implode(", ", $_POST['logat']) : "Tidak ada logat yang dipilih";
        $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "Belum dipilih";
        $bio = $_POST['bio'];

        echo "<p>Nama: $nama</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Kebangsaan: $kebangsaan</p>";
        echo "<p>Logat: $logat</p>";
        echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
        echo "<p>Bio: $bio</p>";
    } else {

        echo "<p>Formulir tidak dikirim.</p>";
    }
    ?>

</body>
</html>
