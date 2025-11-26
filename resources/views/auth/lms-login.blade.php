<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #b5e3ff; /* warna biru muda seperti figma */
            font-family: Arial, sans-serif;
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
            width: 420px;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            text-align: center;
        }

        .login-card h2 {
            font-size: 22px;
            margin-bottom: 25px;
            font-weight: 600;
            color: #000;
        }

        .input-box {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            background: #e5e5e5;
            border-radius: 3px;
            font-size: 14px;
        }

        .btn-login {
            width: 80%;
            padding: 10px;
            background: #90a8ff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }

        .btn-login:hover {
            background: #8298ff;
        }

        .sign-up {
            margin-top: 15px;
            display: block;
            color: #000;
            font-size: 13px;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="login-card">
            <h2>LOGIN</h2>

            <form action="#" method="POST">
                @csrf

                <input type="email" name="email" placeholder="Email" class="input-box" required>
                <input type="password" name="password" placeholder="Password" class="input-box" required>

                <button type="submit" class="btn-login">LOGIN</button>
            </form>

            <a href="/register" class="sign-up">Sign Up</a>
        </div>
    </div>

</body>
</html>
