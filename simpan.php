<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            background: linear-gradient(to right, #ea1d6f 0%, #eb466b 100%);
            font-size: 12px;
        }

        body,
        button,
        input {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            letter-spacing: 1.4px;
        }

        .background {
            display: flex;
            min-height: 100vh;
        }

        .container {
            flex: 0 1 700px;
            margin: auto;
            padding: 10px;
        }

        .screen {
            position: relative;
            background: #3e3e3e;
            border-radius: 15px;
        }

        .screen:after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 20px;
            right: 20px;
            bottom: 0;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
            z-index: -1;
        }

        .screen-header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background: #4d4d4f;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .screen-header-left {
            margin-right: auto;
        }

        .screen-header-button {
            display: inline-block;
            width: 8px;
            height: 8px;
            margin-right: 3px;
            border-radius: 8px;
            background: white;
        }

        .screen-header-button.close {
            background: #ed1c6f;
        }

        .screen-header-button.maximize {
            background: #e8e925;
        }

        .screen-header-button.minimize {
            background: #74c54f;
        }

        .screen-header-right {
            display: flex;
        }

        .screen-header-ellipsis {
            width: 3px;
            height: 3px;
            margin-left: 2px;
            border-radius: 8px;
            background: #999;
        }

        .screen-body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            padding: 50px;
            color: white;
        }

        .arrow {
            border: solid white;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
        }

        .left {
            transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
        }

        .right {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }

        .kotak {
            width: 50%;
            background-color: white;
            color: white;
        }

        .back {
            text-decoration: none;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 18px;
            font-weight: bold;
            color: white;
        }

        .credit {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            margin-top: 10px;
            color: white;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 16px;
            font-weight: bold;
        }



        @media screen and (max-width: 520px) {
            .screen-body {
                flex-direction: column;
            }

        }

        @media screen and (max-width: 600px) {
            .screen-body {
                padding: 40px;
            }

            .screen-body-item {
                padding: 0;
            }
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">

                    <div>

                        <?php
                        include("connect.php");
                        $nama = $_POST['name'];
                        $email = $_POST['email'];
                        $alamat = $_POST['address'];
                        $kota = $_POST['city'];
                        $pesan = $_POST['msg'];

                        // sql entry data pada tabel
                        $sql = "INSERT INTO tamu (name, email, address, city, msg)
                            VALUES ('$nama','$email','$alamat','$kota','$pesan')";

                        if ($conn->query($sql) === TRUE) {
                            echo "Pesan telah terkirim!";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();
                        ?>
                    </div>

                </div>
            </div>
            <div class="credit">


                <a href="index.php" class="arrow left"></a>
                <a href="index.php" class="back">kembali </a>
                <div class="kotak"></div>
                <a href="tampil.php" class="back"> lihat buku tamu</a>
                <a href="tampil.php" class="arrow right"></a>

            </div>
        </div>
    </div>

</body>

</html>