<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            position: relative;
            background-color: black;
            opacity: 0;
            animation: fadeIn 4s forwards;
            height: 100vh; /* Ensures the body takes up the full height of the viewport */
        }

        #background-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%; 
            height: auto;
            z-index: -1;
        }

        .play-again-btn {
            position: absolute;
            margin-top: 33%;
            margin-left: 74.5%;
            transform: translate(-50%, -50%);
            background-color: #800000;
            border-radius: 50px;
            padding: 15px 32px;
            color: #fff;
            font-family: "ABeeZee", sans-serif;
            font-weight: 400;
            font-size: 17px;
            font-style: normal;
            z-index: 1;
        }

        .play-again-btn:hover {
            background-color: #0056b3;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

    <form action="logic.php" method="post">
        <button type="submit" class="btn btn-primary play-again-btn">PLAY AGAIN</button>
    </form>

    <img id="background-img" src="gameover.png" alt="Background Image">

    <script>
        window.onload = function() {
            document.body.style.opacity = 1;
        };
    </script>
</body>
</html>
