<!DOCTYPE html>
<html>
<head>
    <title>Loading...</title>
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

        .spinner {
            border: 6px solid #dfe6ff;
            border-top: 6px solid #3c5cff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin: 0 auto 20px auto;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            100% { transform: rotate(360deg); }
        }

        .text {
            color: white;
            font-size: 22px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="spinner"></div>
        <div class="text">Please wait ...</div>
    </div>
</body>
</html>
