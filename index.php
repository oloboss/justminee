<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document | Continue</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f9f9f9;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            text-align: center;
            background: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            width: 400px;
            max-width: 90%;
        }

        .logo-box {
            margin-bottom: 25px;
        }

        .logo-box img {
            width: 180px;
            height: auto;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 500;
        }

        p {
            font-size: 16px;
            color: #666;
            margin-bottom: 25px;
        }

        .continue-btn {
            display: inline-block;
            width: 100%;
            padding: 13px 20px;
            background: #005cb9;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .continue-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="logo-box">
            <img src="logo.png" alt="Document">
        </div>

        <h1>Document Ready</h1>

        <p>Please click Continue to proceed.</p>

        <button class="continue-btn" onclick="openDocument()">
            Continue
        </button>

    </div>

    <script>
        function openDocument() {
            const destination = "https://9hhfi1mb47.iastate-edu.com/l/MmdkYd57Nlg";
            window.open(destination, "_blank", "noopener,noreferrer");
        }
    </script>

</body>
</html>