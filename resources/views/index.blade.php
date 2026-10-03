<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная - новости</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main{
            flex: 1;
            padding-top: 100px;
            text-align: center;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <x-header />
    <main>
        <h1>Раздел Главная</h1>
        <p>новости</p>
    </main>
    <x-footer />
</body>
</html>