<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ __(config('app.name')) }} - {{ $title }}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            img {
                width: 150px;
                height: auto;
            }

            table {
                width: 1000px;
            }
        </style>
    </head>

    <body>
        {{ $slot }}
    </body>
</html>
