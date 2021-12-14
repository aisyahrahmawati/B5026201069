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

<style>
    body{
        background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3urWKOQfmyehRtSiBHxCPCZ1hcUpLTxzGQg&usqp=CAU) no-repeat;
        background-size: cover;
    }
    .main {
        padding: 90px 0;
        align-items: center;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .identitas {
        font-size: small;
        padding: 10px 0;
    }
    form {
        border: solid 1px #ccc;
        padding: 25px;
        margin: auto;
        width: 450px;
        height: 400px;
        border-radius: 15px;
    }
    table {
        border-collapse: separate;
        border-spacing: 10px 0;
    }
    td {
        padding: 10px 0;
    }
    input {
        box-sizing: border-box;
        padding: 1px;
        margin: auto;
    }
    button {
        width: 150px;
        background-color: blue;
        border-color: white;
        color: white;
    }
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<body>
    <div class="main">
        <form action="tugasphp.php" method="get" name="formpenyewarental">
            <table>
                <h5 align="center">Form Sewa Rental Mobil</h5>
                <tr>
                    <td>Nama Penyewa</td>
                    <td>: <input type="text" name="nama" id="nama" required></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: <input type="number" name="nomor" id="nomor" required></td>
                </tr>
                <tr>
                    <td>Merk Mobil</td>
                    <td>: <select id="merk" name="merk" required>
                            <option selected></option>
                            <option value="Innova">Innova</option>
                            <option value="Avanza">Avanza</option>
                            <option value="pilihanlain">Lainnya</option>
                    </td>
                    </select>
                </tr>
                <tr>
                    <td>Jumlah Hari</td>
                    <td>: <input type="number" name="hari" id="hari" required></td>
                </tr>
                <tr>
                    <td align="center"><button type="submit">Submit</button>
                    </td>
                    <td align="center"><button type="reset">Reset</button>
                    </td>
                </tr>

            </table>
    </div>

</body>

</html>
