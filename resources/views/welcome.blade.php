<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #AEDEFC; /* warna yang kamu minta */
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        h1 {
            font-size: 32px;
            color: #1f1f1f;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin-bottom: 30px;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            margin: 8px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            color: white;
            transition: 0.2s;
        }

        .btn-login {
            background-color: #7aaefc;
        }

        .btn-login:hover {
            background-color: #689cf7;
        }

        .btn-register {
            background-color: #5c8dff;
        }

        .btn-register:hover {
            background-color: #4a7cf5;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome</h1>
    <p>Silakan pilih menu untuk melanjutkan</p>

    <a href="{{ route('login') }}" class="btn btn-login">Login</a>
    <a href="{{ route('register') }}" class="btn btn-register">Register</a>
</div>

</body>
</html>
