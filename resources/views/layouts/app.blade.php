<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("head-title", "")</title>

</head>

<body>
    <!--includi header-->
    @include("partial.header")

    <!-- inserisci contenuti-->
    <main>
        @yield("main-content")
    </main>

    <!-- includi footer -->
    @include("partial.footer")

    @vite("resources/js/app.js")
</body>
</html>
