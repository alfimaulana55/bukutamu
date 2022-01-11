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
        }

        .screen-body-item {
            flex: 1;
            padding: 50px;
        }

        .screen-body-item.left {
            display: flex;
            flex-direction: column;
        }

        .app-title {
            display: flex;
            flex-direction: column;
            position: relative;
            color: #ea1d6f;
            font-size: 26px;
        }

        .app-title:after {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 25px;
            height: 4px;
            background: #ea1d6f;
        }

        .app-contact {
            margin-top: auto;
            font-size: 8px;
            color: #888;
        }

        .app-form-group {
            margin-bottom: 15px;
            width: 20rem;
        }

        .app-form-group.message {
            margin-top: 40px;
        }

        .app-form-group.buttons {
            margin-bottom: 0;
            text-align: right;
        }

        .app-form-control {
            width: 100%;
            padding: 10px 0;
            background: none;
            border: none;
            border-bottom: 1px solid #666;
            color: #ddd;
            font-size: 14px;
            text-transform: uppercase;
            outline: none;
            transition: border-color .2s;
        }

        .app-form-control::placeholder {
            color: #666;
        }

        .app-form-control:focus {
            border-bottom-color: #ddd;
        }

        .app-form-button {
            background: none;
            border: none;
            color: #ea1d6f;
            font-size: 14px;
            cursor: pointer;
            outline: none;
        }

        .app-form-button:hover {
            color: #b9134f;
        }

        .credit {
            display: flex;
            justify-content: center;
            align-items: stretch;
            margin-top: 10px;
            color: #ffa4bd;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 16px;
            font-weight: bold;
        }

        .credit p {
            margin-top: 0px;
        }

        .credits-link {
            display: flex;
            align-items: center;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
        }

        .dribbble {
            width: 20px;
            height: 20px;
            margin: 0 5px;
        }

        #bukutamu {
            text-decoration: none;
            font-size: 18px;
            margin-bottom: 1rem;

        }

        @media screen and (max-width: 520px) {
            .screen-body {
                flex-direction: column;
            }

            .screen-body-item.left {
                margin-bottom: 30px;
            }

            .app-title {
                flex-direction: row;
            }

            .app-title span {
                margin-right: 12px;
            }

            .app-title:after {
                display: none;
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
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>DAFTAR BUKU</span>
                            <span>TAMU</span>
                        </div>
                        <div class="app-contact">KELAS : 4IA14</div>
                    </div>
                    <form name="tamu" method="post" action="simpan.php">

                        <div class="screen-body-item">
                            <div class="app-form">
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="NAMA" id="name" type="text" name="name" required>
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="EMAIL" id="email" type="text" name="email" required>
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="ALAMAT" id="alamat" type="text" name="address" required>
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="KOTA" id="kota" type="text" name="city" required>
                                </div>
                                <div class="app-form-group message">
                                    <input class="app-form-control" placeholder="PESAN" id="pesan" name="msg" required>
                                </div>
                                <div class="app-form-group buttons">
                                    <input class="app-form-button" type="reset" name="reset" value="RESET" required>
                                    <input class="app-form-button" type="submit" name="submit" value="SEND"></input>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <center><a id="bukutamu" class="app-form-button" href="tampil.php">LIHAT BUKU TAMU</a></center>
            </div>
            <div class="credit">
                <center>
                    <p>kelompok: bunga febrianti, dhia safa helga, muhammad alfi maulana ammas</p>
                    <!-- <br> -->
                    <p></p>
                    <!-- <br> -->
                    <p></p>
                    <!-- <br> -->
                    <p></p>
                </center>
            </div>
        </div>
    </div>

</body>

</html>