<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

    <style>

        * {
            box-sizing: border-box; /* FIX utama agar ukuran konsisten */
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #AEDEFC;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background: white;
            width: 620px;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            text-align: center;
        }

        .login-card h2 {
            font-size: 22px;
            margin-bottom: 50px;
            font-weight: 500;
            color: black;
        }

        .form-group {
            width: 80%;
            margin: 0 auto;
        }

        .input-box {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            background: #e5e5e5;
            font-size: 14px;
        }

        .btn-login {
            width: 100%;          /* sama dgn input */
            padding: 12px;
            background: #90a8ff;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
        }

        .btn-login:hover {
            background: #8298ff;
        }

        .login {
            margin-top: 15px;
            display: block;
            color: #000;
            font-size: 13px;
            text-decoration: underline;
            margin-bottom: 30px;
        }

    </style>
</head>
<body>

    <div class="container">
        <div class="login-card">
            <h2>REGISTRASI</h2>

            <form action="#" method="POST">
                @csrf

                <div class="form-group">
                    <input type="name" name="nama" placeholder="Nama" class="input-box" required>
                    <input type="email" name="email" placeholder="Email" class="input-box" required>
                    <input type="password" name="password" placeholder="Password" class="input-box" required>
                    <input type="confpassword" name="confirmpassword" placeholder="Confirm Password" class="input-box" required>

                </div>
            </form>

            <a href="{{ route('lms.login') }}" class="login">Already registered?</a>

            <form action="#" method="POST">
                @csrf

                <div class="form-group">
                    <button type="submit" class="btn-login">REGISTRASI</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
