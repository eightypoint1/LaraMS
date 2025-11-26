<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <style>
        body {
            background: #1e1e1e;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .card {
            background: #8CA9FF;
            padding: 40px;
            width: 450px;
            border-radius: 20px;
            text-align: center;
        }

        .circle {
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px auto;
            font-size: 30px;
            color: #3c5cff;
        }

        .text {
            color: white;
            font-size: 28px;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="{{ asset('build/assets/success.png') }}"width="120" style="margin-bottom:15px;" >
        <div class="text">SUCCESS</div>
    </div>
</body>
</html>
