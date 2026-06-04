<?php
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Időpontfoglalás</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #111;
            overflow: hidden;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            position: relative;
        }

        .diagonal-message {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-20deg);
            font-size: 48px;
            font-weight: bold;
            color: rgba(255, 0, 0, 0.15);
            text-transform: uppercase;
            white-space: nowrap;
            user-select: none;
            pointer-events: none;
            text-align: center;
        }

        .back-button {
            position: absolute;
            top: 62%;
            left: 50%;
            transform: translateX(-50%);
            display: inline-block;
            padding: 10px 22px;
            background: #fff;
            color: #111;
            border-radius: 6px;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .back-button:hover {
            background: #ddd;
        }

        @media (max-width: 768px) {
            .diagonal-message {
                font-size: 26px;
                padding: 0 20px;
                white-space: normal;
            }

            .back-button {
                top: 60%;
                font-size: 14px;
                padding: 9px 18px;
            }
        }
    </style>
</head>
<body>

    <div class="diagonal-message">
        Az online időpontfoglalás jelenleg nem aktív
    </div>

    <a href="javascript:history.back()" class="back-button">
        Vissza
    </a>

</body>
</html>

<?php include "Includes/templates/footer.php"; ?>