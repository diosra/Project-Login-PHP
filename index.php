<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Login Page</title>

    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-image: url("images/pic.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .tempelatas {
            text-align: center;
            color: white;
            margin-bottom: 10px;
        }

        main {
            margin-top: 30px;
        }

        .clock {
            padding: 30px;
            color: white;
            font-family: sans-serif;
            margin: 0 auto;
            text-align: center;
        }

        .clock h3 {
            display: inline;
        }

        .clock .time {
            font-size: 25px;
            margin: 0 auto;
            margin-top: -10px;
            background: linear-gradient(to right, #30CFD0 0%, #330867 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }


        .clock .date {
            font-size: 25px;
            margin: 0 auto;
            background: linear-gradient(to right, #30CFD0 0%, #330867 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        h2 {
            text-align: center;
            text-decoration: underline;
            margin-bottom: 15px;
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
            color: black;

        }

        .isianmenu p {
            text-align: left;
            padding-left: 2px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .kotaklogin {
            padding: 3px;
            width: 100%;
            margin-bottom: 5px;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);
            border-radius: 7px;
        }


        .flexbox {
            display: flex;
            flex-direction: row;
        }

        .flexbox input {
            flex-basis: 93%;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);
            margin-bottom: 6px;
            border-radius: 7px;
        }

        .flexbox i {
            flex-basis: 7%;
            margin-left: 10px;
            margin-top: 8px;
        }

        .menu-item-hover {
            margin-left: 6px;
            display: inline;
        }

        .menu-item {
            opacity: 0;
            transition: opacity 0s ease-in 600ms, opacity 600ms;
            position: relative;
        }

        .menu-item a {
            color: white;
        }

        .menu-item:after {
            display: inline;
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            background-color: #fff;
            transition: width 600ms;
        }

        .menu-item-hover:hover .menu-item {
            cursor: pointer;
            color: red;
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
            color: white;
            font-weight: bold;
        }

        .register {
            margin-left: 20px;
            cursor: pointer;
        }

        .register:hover {
            color: white;
            font-weight: bold;
        }

        .btn {
            float: right;
            margin-top: 20px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <header>
        <div class="tempelatas">
            <h1>Selamat Datang</h1>
        </div>
    </header>

    <main>
        <div class="isianmenu">
            <h2>LOGIN</h2>
            <p style="margin-bottom: -1px;">Username</p>
            <input type="text" class="kotaklogin" id="user" placeholder="Masukkan username anda">
            <p style="margin-bottom: -1px;">Password</p>
            <div class="flexbox">
                <input type="password" class="kotakpass" id="password" placeholder="Masukkan password anda">
                <i class="fas fa-eye-slash" onclick="show()"></i>
            </div>
            <div class="menu-item-hover">
                <i class="fas fa-question"></i>
                <span>
                    <span class="menu-item">
                        <a href="" target="_blank"> Lupa Password?</a>
                    </span>
                </span>
            </div>
            <div class="menu-item-hover">
                <i class="fas fa-user-plus"></i>
                <span>
                    <span class="menu-item">
                        <a href="" target="_blank"> Register</a>
                    </span>
                </span>
            </div>

            <button type="button" class="btn btn-outline-success">LOGIN</button>

        </div>
        <div class="clock">
            <h3>Waktu sekarang menunjukkan:</h3>
            <span class="time"></span>
            <br>
            <h3>Tanggal sekarang menunjukkan :</h3>
            <span class="date"></span>
        </div>
    </main>

    <footer>

    </footer>

    <script src="node_modules/moment/moment.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        function show() {
            let x = document.getElementById("password");
            let c = x.nextElementSibling
            if (x.getAttribute('type') == "password") {
                c.removeAttribute("class");
                c.setAttribute("class", "fa fa-eye");
                x.removeAttribute("type");
                x.setAttribute("type", "text");
            } else {
                c.removeAttribute("class");
                c.setAttribute("class", "fa fa-eye-slash");
                x.removeAttribute("type");
                x.setAttribute("type", "password");
            }
        }
    </script>
    <script>
        const displayTime = () => {
            moment.locale("id");
            $(".time").text(moment().format("LTS"));
            $(".date").text(moment().format("LL"));
        };

        const updateTime = () => {
            displayTime();
            setTimeout(updateTime, 1000)
        };

        updateTime();
    </script>
</body>

</html>