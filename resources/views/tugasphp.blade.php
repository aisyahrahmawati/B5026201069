<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>tugasphp</title>
</head>

<body>
    <div class="container">
        <div class="alert alert-success alert-dismissable fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Selamat, <?php echo $_GET["nama"]; ?>!</h4>
            <h6>Telah berhasil mengisikan data penyewaan Rental Mobil "SS" dengan rincian sebagai berikut:</h6>
            <tr>
                <td>Nama Penyewa</td>
                <td>: </td>
                <?php echo $_GET["nama"]; ?><br>
            </tr>
            <tr>
                <td>NIK</td>
                <td>: </td>
                <?php echo $_GET["nomor"]; ?><br>
            </tr>
            <tr>
                <td>Jumlah Hari</td>
                <td>: </td>
                <?php echo $_GET["hari"]; ?><br>
            </tr>
            <tr>
                <?php $merkmobil = $_GET["merk"];
                if ($merkmobil == "Innova") {
                    echo "Anda memperoleh mobil sewaan sesuai pilihan yaitu Innova";
                } else if ($merkmobil == "Avanza") {
                    echo "Anda memperoleh mobil sewaan sesuai pilihan";
                } else {
                    echo "Pilihan mobil yang tersedia lainnya dapat langsung mengunjungi Rental Mobil SS" ;
                }
                ?><br>
            </tr>
        </div>
    </div>

</body>

</html>
