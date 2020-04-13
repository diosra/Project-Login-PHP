<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .tempelatas {
            text-align: center;
            color: red;
            margin-bottom: 15px;
        }

        h2 {
            text-align: center;
            text-decoration: underline blue;
        }

        .isianmenu {
            border: 2px solid black;
            border-radius: 7px;
            padding-top: -20px;
            padding-bottom: 20px;
            padding-left: 5px;
            padding-right: 5px;
            text-align: left;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);
            width: 35%;
            margin: 0 auto;
            overflow: auto;
            position: relative;
        }

        .isianmenu p {
            text-align: left;
            padding-left: 2px;
        }

        .kotaklogin,
        .kotakpass {
            padding: 3px;
            width: 100%;
            margin-bottom: 5px;
        }

        .kotakdalam {
            margin-top: 7px;
        }

        .lupapass {
            float: left;
            cursor: pointer;
        }

        .lupapass:hover {
            color: blue;
            font-weight: bold;
        }

        .register {
            float: right;
            cursor: pointer;
        }

        .register:hover {
            color: aqua;
            font-weight: bold;
        }

        .tombolsubmit {
            margin-top: 7px;
            width: 50%;
            height: 35px;
            float: right;
            cursor: pointer;
        }

        .tombolsubmit:hover {
            background-color: red;
            font-weight: bolder;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <div class="tempelatas">
            <h1>Selamat Datang, Silahkan Login</h1>
        </div>
    </header>

    <main>
        <div class="isianmenu">
            <h2>LOGIN</h2>
            <p>Username</p>
            <input type="text" class="kotaklogin" id="user" placeholder="Masukkan username anda">
            <p>Password</p>
            <input type="password" class="kotakpass" id="pass" placeholder="Masukkan password anda">
            <div class="kotakdalam">
                <span class="lupapass">Lupa Password</span> <span class="register">Register</span><br>
            </div>
            <input type="submit" class="tombolsubmit">
        </div>
    </main>

    <footer>

    </footer>
</body>

</html>