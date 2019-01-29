<!DOCTYPE html>
<html lang="en">
<head>
    @yield('meta', '')
    <meta charset="UTF-8">
    <title>@yield('title', 'Rent-a-Game')</title>
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    @yield('js','')
</head>
<body>
    <header>
        <div id="logoTop"><p class="logoTop">RENT-A-GAME</p></div>
        <hr>
        <nav>
            <a class="navMenu" href="home">Pagrindinis</a>
            <a class="navMenu" href="contacts">Kontaktai</a>
            <a class="navMenu" href="calendar">Užsakymai</a>
        </nav>
        <hr>
    </header>
<main>
    <div class="content">
        <div id="blockLeft"><p class="rek">VietaJūsųReklamai</p></div>
        <div id="blockMiddle">
            @yield('content')
        </div>
        <div id="blockRight"><p class="rek">VietaJūsųReklamai</p></div>
    </div>
    <hr>
</main>
    <footer>
        <span>2018&copy; visos teises saugomos</span>
    </footer>
    @yield('jsFooter','')
</body>
</html>