<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver PDF</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body style="overflow: hidden;">
    <iframe class="embed-responsive-item" style="min-height:100vh; min-width: 100%;" src="<?php echo $url_pdf; ?>" allowfullscreen></iframe>
</body>
</html>
