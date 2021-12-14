<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <!-- Metode toggle() untuk menyembunyikan baris (display: none) yang tidak cocok dengan pencarian. Kita menggunakan
    metode DOM toLowerCase() untuk mengonversi teks menjadi huruf kecil, yang membuat pencarian tidak peka huruf besar /
    kecil -->
    <style>
        h2 {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>Playlist Belajar Ais</h2>
    <p>Ketik dibawah untuk mencari penyanyi, judul lagu, album, ataupun tahun rilis: </p>
    <input id="myInput" type="text" placeholder="Cari..">
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penyanyi</th>
                <th>Album</th>
                <th>Tahun Rilis</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td>My Sea</td>
                <td>IU</td>
                <td>LILAC</td>
                <td>2021</td>
            </tr>
            <tr>
                <td>Sincerity Is Scary</td>
                <td>The 1975</td>
                <td>A Brief Inquiry into Online Relationships</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>Right Through Me</td>
                <td>Even of Day</td>
                <td>Right Through Me</td>
                <td>2021</td>
            </tr>
            <tr>
                <td>True Colors</td>
                <td>Anna Kendrick, Justin Timberlake</td>
                <td>Trolls OST</td>
                <td>2016</td>
            </tr>
            <tr>
                <td>Grown Ups</td>
                <td>Sondia</td>
                <td>My Mister OST</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>Love Poem</td>
                <td>IU</td>
                <td>Love Poem</td>
                <td>2019</td>
            </tr>
            <tr>
                <td>Zombie</td>
                <td>DAY6</td>
                <td>The Book of Us: The Demon</td>
                <td>2020</td>
            </tr>
            <tr>
                <td>Dive</td>
                <td>Ed Sheeran</td>
                <td>Divide</td>
                <td>2017</td>
            </tr>
            <tr>
                <td>Nuansa Bening</td>
                <td>Vidi Aldiano</td>
                <td>Pelangi di Malam Hari</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>It's Not Living (If It's Not With You)</td>
                <td>The 1975</td>
                <td>A Brief Inquiry into Online Relationships</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>How to Love</td>
                <td>DAY6</td>
                <td>The Book of Us: Gravity </td>
                <td>2019</td>
            </tr>
            <tr>
                <td>Life is Still Going On</td>
                <td>NCT DREAM</td>
                <td>Hello Future - The 1st Album Repackage</td>
                <td>2021</td>
            </tr>
            <tr>
                <td>The Most Beautiful Thing</td>
                <td>Bruno Major</td>
                <td>To Let A Good Thing Die</td>
                <td>2020</td>
            </tr>
            <tr>
                <td>Where Do Broken Hearts Go</td>
                <td>One Direction</td>
                <td>FOUR (Deluxe)</td>
                <td>2014</td>
            </tr>
        </tbody>
    </table>

    <p>penugasan eksplorasi JQuery Filters</p>

</body>

</html>
