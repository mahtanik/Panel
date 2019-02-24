 <html lang="fa">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap -->
            <link href="/HUB/public/css/bootstrap.min.css" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="/HUB/public/css/font-awesome.min.css" rel="stylesheet">
            <!-- NProgress -->
            <link href="/HUB/public/css/nprogress.css" rel="stylesheet">
            <!-- bootstrap-progressbar -->
            <link href="/HUB/public/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
            <!-- bootstrap-daterangepicker -->
            <link href="/HUB/public/css/daterangepicker.css" rel="stylesheet">
            <!-- Custom Theme Style -->
            <link href="/HUB/public/css/custom.min.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        </head>

        <style>
            /* Bordered form */
            form {
                border: 3px solid #f1f1f1;
            }

            /* Full-width inputs */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            /* Add a hover effect for buttons */
            button:hover {
                opacity: 0.8;
            }

            .container {
                padding: 16px;
            }

            /* The "Forgot password" text */
            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
            }
        </style>

        <body style="background-color: white">
            <div class="container" style=" margin-top: 200px ;width: 40vh; text-align: center ; ">
                <h1>ورود به پنل مدیریت</h1>

                <div class="container" style="box-shadow: 5px 10px 8px 10px #888888;">
                    <label for="uname"><b>نام کاربری</b></label>
                    <input id="username" type="text" placeholder="نام کاربری خود را وارد کنید" name="uname" required>

                    <label for="psw"><b>رمزعبور</b></label>
                    <input id="password" type="password" placeholder="رمز خود را وارد کنید" name="psw" required>

                    <button type="submit">ورود</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember">به یاد داشته باش
                    </label>
                </div>

                <div class="container">
                    <span class="psw">بازیابی <a href="#">رمز عبور؟</a></span>
                </div>
            </div>
        </body>
 <script>

     var username = $('#username').text();
     var password = $('#password').text();

     console.log(username);
     console.log(password);

 </script>
 </html>
