<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="/css/app.css">
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') }}</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <span class="navbar-brand">{{ env('APP_NAME') }}</span>
            </nav>
        </header>

        <main role="main" class="container">
            <h1 class="mt-5">Добро пожаловать!</h1>
            <p class="lead">Этот тестовый сайт поможет Вам превратить длинные ссылки в короткие. Пожалуйста, воспользуйтесь формой ниже. <br/>Внимание: не забудьте указать протокол (http/https/ftp/...).</p>

            <form method="POST" id="short_form" action="/short" role="form">
                <div class="input-group mb-3">
                    <input name="long_url" id="short_form_long_url" type="url" class="form-control" placeholder="https://mail.example.com/">
                    <div class="input-group-append">
                        <input type="submit" class="btn btn-outline-secondary" id="short_form_submit" value="Сократить" disabled="disabled">
                    </div>
                </div>
                @csrf
            </form>

            <p id="short_form_status" style="display: none;">Ожидайте... Запрос выполняется.</p>

            <hr>
            
            <h3>Последние ссылки</h3>
            <ul id="short_urls_list">
            @if (count($short_urls))
                @foreach ($short_urls as $url)
                    <li><a href="/{{ $url->short_url }}" target="_blank">{{request()->getSchemeAndHttpHost()}}/{{ $url->short_url }}</a></li>
                @endforeach
            @endif
            </ul>
            @if (!count($short_urls))
                <p id="short_urls_text">Пока еще никто не воспользовался нашим сервисом, но Вы можете стать первым.</p>
            @endif
        </main>

        <footer class="footer">
            <div class="container">
                <span class="text-muted">Сделал <a href="https://github.com/ma1exe" target="_blank">ma1exe</a> в 2020.</span>
            </div>
        </footer>

        <script src="/js/app.js"></script>
    </body>
</html>
