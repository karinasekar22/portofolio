<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Karina Sekar</title>
    <script src="https://unpkg.com/feather-icons"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="scroll-smooth">
    @include('layouts.navbar')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.portfolio')
    @include('partials.clients')
    @include('partials.blog')
    @include('partials.contact')
    @include('layouts.footer')
    <script>
        feather.replace();
    </script>
</body>

</html>