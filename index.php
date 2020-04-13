<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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

        /*
        .kotakdalam {
            margin-top: 7px;
        }
*/

        .menu-item {
            /* hide and position tooltip */
            opacity: 0;
            transition: opacity 0s ease-in 600ms, opacity 600ms;
            position: relative;
        }

        .menu-item:after {
            display: block;
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            transition: width 600ms;
        }

        .menu-item-hover:hover .menu-item {
            opacity: 1;
            transition: opacity 0s ease-in 600ms, opacity 600ms;
        }

        .menu-item-hover:hover .menu-item:after {
            width: 0;
        }

        .lupapass {
            margin-left: 5px;
            cursor: pointer;
            color: red;
        }

        .lupapass:hover {
            color: blue;
            font-weight: bold;
        }

        .register {
            margin-left: 20px;
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

            <div class="menu-item-hover">
                <i class="fas fa-question"></i>
                <span>
                    <span class="menu-item">
                        Lupa Password?
                    </span>
                </span>
            </div>

            <div class="menu-item-hover">
                <i class="fas fa-user-plus"></i>
                <span>
                    <span class="menu-item">
                        Register
                    </span>
                </span>
            </div>
            <input type="submit" class="tombolsubmit">
        </div>
    </main>

    <footer>

    </footer>
</body>

</html>