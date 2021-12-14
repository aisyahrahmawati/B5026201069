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
    <title>Praktikum Form Validation</title>
</head>

<style>
    body{
        background: url(https://kepoper.com/wp-content/uploads/2021/04/Twitter-@day6official-3.jpg) no-repeat;
        background-size: cover;
    }
    form{
        border: solid 1px #ccc;
        padding: 20px;
        margin: auto;
        width: 450px;
        height: 450px;
        border-radius: 10px;
    }

    input{
        box-sizing: border-box;
        padding: 2px;
        margin: auto;
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

    button {
        width: auto;
    }
</style>

<body>
    <h3 align="center">Registration Form</h3>
    <div class="main">
        <form action="/action_page.php" method="post" onsubmit="validate()">
            <table>
                <tr>
                    <td>User ID</td>
                    <td>: <input type="text" name="id" id="id" required minlength="5" maxlength="12"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>: <input type="password" name="password" id="password" required minlength="7" maxlength="12">
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>: <input type="text" name="name" id="name" pattern="[A-Za-z]{*}" title="Only contain alphabets">
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>: <input type="text" name="address" id="address"></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>: <select id="country" name="country" form="country">
                            <option selected>Choose...</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Japan">Japan</option>
                            <option value="South Korea">South Korea</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Spain">Spain</option>
                    </td>
                    </select>
                </tr>
                <tr>
                    <td>ZIP Code</td>
                    <td>: <input type="number" name="zip" id="zip" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input type="email" name="email" id="email" required></td>
                </tr>
                <tr>
                    <td width="25%"><label for="sex">Sex</label></td>
                    <td> :
                        <input type="radio" name="sex" value="male" class="detail" required> Male
                    </td>
                    <td>
                        <input type="radio" name="sex" value="female" class="detail">Female
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>Languange</td>
                    <td>: <input class="checkbox" type="checkbox" name="english"> English
                    </td>
                    <td><input class="checkbox my-auto" type="checkbox" name="nonenglish"> Non-English
                    </td>
                </tr>
                <tr>
                    <td>About </td>
                    <td><textarea class="form-control" rows="1" id="about" name="text"></textarea></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="center"> <input type="submit" name="kirim" value="Submit" </td>
                </tr>
            </table>
        </form>
    </div>

    <script>
        function validate() {
            let id = document.getElementById("id").value;
            let password = document.getElementById("password").value;
            let name = document.getElementById("name").value;
            let address = document.getElementById("address").value;
            let country = document.getElementById("country").value;
            let zip = document.getElementById("zip").value;
            let email = document.getElementById("email").value;
            let sex = document.getElementById("sex").value;
            let lang = document.getElementById("lang").value;
            let about = document.getElementById("about").value;
        }
    </script>

</body>

</html>
