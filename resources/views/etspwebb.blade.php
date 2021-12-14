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
    <title>uts_5026201069</title>
</head>

<style>
    body{
        background: url(https://wallpaperaccess.com/full/626893.jpg) no-repeat;
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
        <form action="/action_page.php" method="post" onsubmit="validate()">
            <table>
                <div class="identitas">
                    <p1>Nama Lengkap : Aisyah Rahmawati</p1><br>
                    <p2>Nama Panggilan : Ais</p2><br>
                    <p3>NRP : 5026201069</p3><br>
                </div>
                <h5 align="center">Form Input Data Barang</h5>
                <tr>
                    <td>Nama Barang</td>
                    <td>: <input type="text" name="nama" id="nama" required minlength="10"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>: <input type="number" name="harga" id="harga" required min="5000"></td>
                </tr>
                <tr>
                    <td>Jenis Barang</td>
                    <td>: <select id="country" name="country" form="country" required>
                            <option selected></option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                            <option value="Non Mamin">Non Mamin</option>
                    </td>
                    </select>
                </tr>
                <tr>
                    <td>Kode Barcode</td>
                    <td>: <input type="number" name="code" id="code" required minlength="10"></td>
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
