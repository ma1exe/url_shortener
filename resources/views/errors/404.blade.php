<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="/css/app.css">
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Страница не найдена | Ошибка 404</title>
    </head>
    <body>
       <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
            </nav>
        </header>

        <main role="main" class="container">
            <h1 class="mt-5">Упс! Кажется, такой страницы нет.</h1>
            <p class="lead">Но вы можете вернуться на <a href="/">главную</a>.</p>
        </main>

        <footer class="footer">
            <div class="container">
                <span class="text-muted">Сделал <a href="https://github.com/ma1exe" target="_blank">ma1exe</a> в 2020.</span>
            </div>
        </footer>
    </body>
</html>
