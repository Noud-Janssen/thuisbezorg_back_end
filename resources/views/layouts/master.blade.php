<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <div class="header_bd"></div>
        <header>
            <h1>@yield('title')</h1>

            @section('header')
    
            @show
            <div class="link_row">
                <a href="/">Home</a>
                <a href="/menu">Menu</a>
                <a href="/contact">Contact</a>
                <a href="/users/login">Login</a>
            </div>
        </header>
        <div class="fixed_margin"></div>

        <main>
            @section('main')

            @show

        </main>


        </footer>
            @section('footer')

            @show
        </footer> 
    </body>
</html>